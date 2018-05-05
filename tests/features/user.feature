Feature: User
  In order to know that it is possible to login to the site
  As a website user
  I need to be able to view the login page

  Scenario: View login page
    Given I am an anonymous user
    When I am on "/user"
    Then I should see "Username"
    And I should see "Password"

