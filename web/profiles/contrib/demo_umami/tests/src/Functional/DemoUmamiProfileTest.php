<?php

namespace Drupal\Tests\demo_umami\Functional;

use Drupal\Core\Config\FileStorage;
use Drupal\Core\Config\InstallStorage;
use Drupal\Core\Config\StorageInterface;
use Drupal\KernelTests\AssertConfigTrait;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests demo_umami profile.
 *
 * @group demo_umami
 */
class DemoUmamiProfileTest extends BrowserTestBase {
  use AssertConfigTrait;

  /**
   * {@inheritdoc}
   */
  protected function installParameters() {
    $parameters = parent::installParameters();
    $parameters['forms']['install_configure_form']['site_mail'] = 'admin@example.com';
    return $parameters;
  }

  /**
   * {@inheritdoc}
   */
  protected $profile = 'demo_umami';

  /**
   * Tests demo_umami profile warnings shown on Status Page.
   */
  public function testWarningsOnStatusPage() {
    $account = $this->drupalCreateUser(['administer site configuration']);
    $this->drupalLogin($account);

    // Check the requirements warning for using an experimental profile.
    $this->drupalGet('admin/reports/status');
    $this->assertSession()->pageTextContains('Demo Umami is an experimental profile to be used for demonstration purposes only, and should not be used for a production/live site. To start building a new site, you should re-install Drupal and choose another profile, for example "Standard".');

    // Check the requirements error for the version of Drupal being updated.
    // Change the stored installed version of Drupal.
    \Drupal::state()->set('demo_umami_drupal_version', \Drupal::VERSION . '1');
    $this->drupalGet('admin/reports/status');
    $this->assertSession()->pageTextContains('Drupal has been updated since this demo was installed, which could cause issues with this site. It is recommended that you re-install the demo to evaluate the latest changes.');
  }

  /**
   * Tests the profile supplied configuration is the same after installation.
   */
  public function testConfig() {
    // Just connect directly to the config table so we don't need to worry about
    // the cache layer.
    $active_config_storage = $this->container->get('config.storage');

    $default_config_storage = new FileStorage(drupal_get_path('profile', 'demo_umami') . '/' . InstallStorage::CONFIG_INSTALL_DIRECTORY, InstallStorage::DEFAULT_COLLECTION);
    $this->assertDefaultConfig($default_config_storage, $active_config_storage);

    $default_config_storage = new FileStorage(drupal_get_path('profile', 'demo_umami') . '/' . InstallStorage::CONFIG_OPTIONAL_DIRECTORY, InstallStorage::DEFAULT_COLLECTION);
    $this->assertDefaultConfig($default_config_storage, $active_config_storage);
  }

  /**
   * Asserts that the default configuration matches active configuration.
   *
   * @param \Drupal\Core\Config\StorageInterface $default_config_storage
   *   The default configuration storage to check.
   * @param \Drupal\Core\Config\StorageInterface $active_config_storage
   *   The active configuration storage.
   */
  protected function assertDefaultConfig(StorageInterface $default_config_storage, StorageInterface $active_config_storage) {
    /** @var \Drupal\Core\Config\ConfigManagerInterface $config_manager */
    $config_manager = $this->container->get('config.manager');

    foreach ($default_config_storage->listAll() as $config_name) {
      if ($active_config_storage->exists($config_name)) {
        $result = $config_manager->diff($default_config_storage, $active_config_storage, $config_name);
        $this->assertConfigDiff($result, $config_name, [
          // The filter.format.*:roles key is a special install key.
          'filter.format.basic_html' => ['roles:', '  - authenticated'],
          'filter.format.full_html' => ['roles:', '  - administrator'],
          'filter.format.restricted_html' => ['roles:', '  - anonymous'],
        ]);
      }
      else {
        $this->fail("$config_name has not been installed");
      }
    }
  }

  /**
   * Tests the successful editing of nodes by admin.
   */
  public function testEditNodesByAdmin() {
    $account = $this->drupalCreateUser(['administer nodes', 'edit any recipe content']);
    $this->drupalLogin($account);
    $webassert = $this->assertSession();

    // Check that admin is able to edit the node.
    $nodes = entity_load_multiple_by_properties('node', ['title' => 'Deep mediterranean quiche']);
    $node = reset($nodes);
    $this->drupalGet('node/' . $node->id() . '/edit');
    $webassert->statusCodeEquals('200');
    $this->submitForm([], "Save");
    $webassert->pageTextContains('Recipe Deep mediterranean quiche has been updated.');
  }

}
