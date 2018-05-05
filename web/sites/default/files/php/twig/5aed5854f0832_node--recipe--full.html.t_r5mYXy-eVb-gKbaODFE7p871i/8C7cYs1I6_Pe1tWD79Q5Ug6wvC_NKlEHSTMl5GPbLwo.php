<?php

/* themes/contrib/umami/templates/content/node--recipe--full.html.twig */
class __TwigTemplate_739f48355226729cbf6426b77237a1f14a8420443499b8ab03058443af996593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 70, "if" => 87, "trans" => 89);
        $filters = array("clean_class" => 72, "t" => 124);
        $functions = array("attach_library" => 79);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 70
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    <header class=\"node__header\">
      <h1 class=\"page-title\">
        ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "
      </h1>
      ";
        // line 87
        if (($context["display_submitted"] ?? null)) {
            // line 88
            echo "      <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "node__submitted"), "method"), "html", null, true));
            echo ">
        ";
            // line 89
            echo t("<span class=\"by-author\">by @author_name</span> @created_date", array("@author_name" => ($context["author_name"] ?? null), "@created_date" => ($context["created_date"] ?? null), ));
            // line 90
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 93
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_recipe_category", array()), "html", null, true));
        echo "
      ";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_tags", array()), "html", null, true));
        echo "
    </header>
  ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  <div";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
    <div class=\"layout__region--top\">
      <div class=\"layout__region layout__region--top-first\">
        ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
        echo "
      </div>
      <div class=\"layout__region layout__region--top-second\">
        <div class=\"recipe-meta\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"71\" height=\"62.6\" viewBox=\"0 0 71 62.6\"><title>Preparation icon</title><g fill=\"#FF6138\"><path d=\"M68.5 7.4c-1.4-2.8-4.9-5.6-8.4-5.6-.4 0-.9 0-1.3.1-1 .2-3.7.8-18.8 18h-.1c-1.2 0-1.9 0-20 19-8.8 9-17.4 18.3-17.5 18.4-.5.5-.7 1.3-.4 2 .2.7.8 1.2 1.5 1.3 1 .2 2.1.3 3.3.3 9.5 0 21-7.4 29-13.6 5.4-4.2 15.6-13.3 15.9-15.7.1-.9-.3-1.9-1.3-3.2l10.8-13.3h.5c2 0 4.8-.5 6.5-2.7 1.1-1.3 1.2-3.2.3-5zM8.3 56.8C20 44.3 36.3 27.2 40 24.1c1.9 1.2 6.2 5.2 7.4 7C44 35.6 22.7 55.4 8.3 56.8zM65.1 10c-.8 1-2.6 1.1-3.4 1.1-.6 0-1.1-.1-1.1-.1-.7-.1-1.4.2-1.9.7L47.9 25c-1.3-1.3-2.8-2.5-4.2-3.5C56.6 7.1 59.4 5.9 59.6 5.8c1.3-.3 3.5.9 4.7 2.6.8.9.8 1.5.8 1.6z\"/><circle cx=\"60.7\" cy=\"8.7\" r=\"1.3\"/></g></svg>
          ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_preparation_time", array()), "html", null, true));
        echo "
        </div>
        <div class=\"recipe-meta\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"54.5\" height=\"67.6\" viewBox=\"0 0 54.5 67.6\"><title>Cooking icon</title><g fill=\"#FF6138\"><path d=\"M27.2 2.5C16 2.5 2.8 22.1 2.8 38.6c0 16.1 9.6 26.5 24.5 26.5s24.5-10.4 24.5-26.5C51.7 21.7 38.7 2.5 27.2 2.5zm0 4c7.8 0 18.5 14 20.2 28.3h-4.9V30c0-1.1-.9-2-2-2s-2 .9-2 2v4.8h-4.8V30c0-1.1-.9-2-2-2s-2 .9-2 2v4.8h-4.8V30c0-1.1-.9-2-2-2s-2 .9-2 2v4.8H16V30c0-1.1-.9-2-2-2s-2 .9-2 2v4.8H7C8.8 20.7 19.6 6.5 27.2 6.5zm0 54.6c-9.9 0-20.4-5.9-20.5-22.3H47.5c.1 16.5-10.4 22.3-20.3 22.3z\"/><path d=\"M27.2 40.5c-1.5 0-2 .9-4 5.4-2.3 5.1-2.4 5.6-2 6.6.6 1.5 2.1 1.5 5.1 1.5h1.2c3.9 0 5.1 0 5.8-1.4.5-1.1.3-2.1-1.7-6.4-2.4-4.8-2.9-5.7-4.4-5.7zm.2 9.5h-1.7c.3-.6.6-1.4 1.1-2.5.1-.2.2-.5.4-.9.2.4.4.8.6 1.3.4.9.7 1.6 1 2.1h-1.4z\"/></g></svg>
          ";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cooking_time", array()), "html", null, true));
        echo "
        </div>
        <div class=\"recipe-meta\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"82.5\" height=\"61.3\" viewBox=\"0 0 82.5 61.3\"><title>Serves icon</title><g fill=\"#6D6E71\"><path d=\"M42.4 5.8c-13.3 0-24.2 11.5-24.2 25.6C18.2 45.5 29 57 42.4 57c13.3 0 24.1-11.5 24.1-25.6 0-14.2-10.8-25.6-24.1-25.6zm0 47.1c-11.1 0-20.2-9.7-20.2-21.6 0-11.9 9-21.6 20.2-21.6 11.1 0 20.1 9.7 20.1 21.6 0 11.9-9 21.6-20.1 21.6z\"/><path d=\"M42.4 13.1c-9.4 0-17.1 8.2-17.1 18.2S33 49.5 42.4 49.5s17.1-8.2 17.1-18.2-7.7-18.2-17.1-18.2zm0 32.4c-7.2 0-13.1-6.4-13.1-14.2 0-7.8 5.9-14.2 13.1-14.2 7.2 0 13.1 6.4 13.1 14.2 0 7.9-5.9 14.2-13.1 14.2zM80.1 30.3l.1-25c0-.6-.3-1.2-.8-1.6-.5-.4-1.1-.5-1.8-.3-.3.1-7.2 2.2-7.2 14.5 0 5.8.4 10.1 1 12.4-.4.6-.6 1.3-.6 2.1v21.8c0 2.1 1.7 3.8 3.7 3.8h2.3c2.1 0 3.7-1.7 3.7-3.8V32.3c.2-.7 0-1.4-.4-2zM76.2 9.7l-.1 18.7h-.9c-.3-1.3-.7-4.4-.7-10.6 0-3.9.8-6.5 1.7-8.1zm.5 44.3H75V32.5h1.7V54zM14.1 3.4c-1.1 0-2 .9-2 2v7.3H11V5.4c0-1.1-.9-2-2-2s-2 .9-2 2v7.3H5.8V5.4c0-1.1-.9-2-2-2s-2 .9-2 2v9.3c0 .1 0 .3.1.4v.1c0 .1.1.2.1.3v.1L5.2 21c-.7.7-1.1 1.7-1.1 2.8v30.4c0 2.1 1.7 3.8 3.7 3.8h2.3c2.1 0 3.7-1.7 3.7-3.8V23.7c0-1.1-.5-2.1-1.2-2.8l3.1-5.2v-.1c.1-.1.1-.2.1-.3v-.1c0-.1.1-.3.1-.4V5.4c.2-1.1-.7-2-1.8-2zm-3.6 13.3l-1.6 2.7-1.6-2.7h3.2zM8.1 54V24.3c.3.1.5.2.8.2.3 0 .6-.1.9-.2V54H8.1z\"/></g></svg>
          ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_number_of_servings", array()), "html", null, true));
        echo "
        </div>
        <div class=\"recipe-meta\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"66.9\" height=\"56.3\" viewBox=\"0 0 66.9 56.3\"><title>Difficulty icon</title><g fill=\"#00A388\"><path d=\"M33.4 2.5c-17 0-30.8 13.8-30.8 30.8 0 7.1 2.4 13.9 6.9 19.4.7.9 2 1 2.8.3s1-2 .3-2.8c-1.1-1.4-2.1-2.9-2.9-4.5l6.4-2.6c1-.4 1.5-1.6 1.1-2.6-.4-1-1.6-1.5-2.6-1.1L8.1 42c-.7-2-1.2-4.1-1.3-6.3h6.8c1.1 0 2-.9 2-2s-.9-2-2-2H6.7c.1-2.3.5-4.4 1.2-6.5l6.2 2.6c.3.1.5.2.8.2.8 0 1.5-.5 1.8-1.2.4-1-.1-2.2-1.1-2.6l-6.2-2.6c1-2 2.2-3.8 3.6-5.5l4.6 4.6c.4.4.9.6 1.4.6s1-.2 1.4-.6c.8-.8.8-2 0-2.8l-4.7-4.7c1.7-1.5 3.5-2.7 5.5-3.8l2.5 6c.3.8 1.1 1.2 1.9 1.2.3 0 .5 0 .8-.2.2-.1.4-.2.5-.3-.2 1.7-.4 4.3-.4 8.2 0 4.7.1 10.5.5 12.2.7 3.1 3.5 5.4 6.8 5.4.5 0 1-.1 1.5-.2 3.8-.8 6.2-4.5 5.4-8.2-.3-1.7-2.6-7-4.5-11.2-1.8-4-3-6.4-3.9-7.8.3.3.8.4 1.2.4 1.1 0 2-.9 2-2V6.6c2.3.2 4.5.6 6.6 1.3l-2.5 6c-.4 1 .1 2.2 1.1 2.6.3.1.5.2.8.2.8 0 1.5-.5 1.8-1.2l2.5-6c2 1 3.8 2.3 5.4 3.7l-4.7 4.7c-.8.8-.8 2 0 2.8.4.4.9.6 1.4.6s1-.2 1.4-.6l4.6-4.6c1.4 1.7 2.7 3.6 3.6 5.6l-6.2 2.6c-1 .4-1.5 1.6-1.1 2.6.3.8 1.1 1.2 1.9 1.2.3 0 .5 0 .8-.2l6.2-2.5c.6 2 1 4.2 1.2 6.4h-6.8c-1.1 0-2 .9-2 2s.9 2 2 2h6.8c-.2 2.2-.7 4.3-1.4 6.4l-6.4-2.7c-1-.4-2.2.1-2.6 1.1-.4 1 .1 2.2 1.1 2.6l6.3 2.6c-.9 1.7-1.9 3.2-3.1 4.7-.7.8-.6 2.1.3 2.8.4.3.8.5 1.3.5.6 0 1.1-.2 1.5-.7 4.6-5.5 7.1-12.5 7.1-19.7-.1-17.1-14-30.9-31-30.9zm3.4 32c.3 1.5-.7 3.1-2.3 3.4-1.6.3-3.2-.7-3.5-2.2-.3-1.7-.5-10.1-.3-15.6 2.3 5 5.7 12.8 6.1 14.4zm-7.3-22.1h-.4c-.7.1-1.2.4-1.6 1.4l-2.5-6c2.1-.7 4.2-1.1 6.5-1.3V13c0 .2 0 .4.1.5-1-1.1-1.5-1.1-2.1-1.1z\"/><ellipse cx=\"33.5\" cy=\"33.8\" transform=\"rotate(78.1 33.55 33.795)\" rx=\"1.3\" ry=\"1.3\"/></g></svg>
          ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_difficulty", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_summary", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"layout__region--bottom\">
      <h2>";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("What you'll need and how to make this dish")));
        echo "</h2>
      <div class=\"layout__region layout__region--bottom-first\">
        ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_ingredients", array()), "html", null, true));
        echo "
      </div>
      <div class=\"layout__region layout__region--bottom-second\">
        ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_recipe_instruction", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/umami/templates/content/node--recipe--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 129,  153 => 126,  148 => 124,  141 => 120,  136 => 118,  129 => 114,  122 => 110,  115 => 106,  107 => 101,  101 => 98,  96 => 96,  91 => 94,  86 => 93,  79 => 90,  77 => 89,  72 => 88,  70 => 87,  65 => 85,  59 => 82,  54 => 80,  50 => 79,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 72,  43 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/umami/templates/content/node--recipe--full.html.twig", "/var/www/umami/web/themes/contrib/umami/templates/content/node--recipe--full.html.twig");
    }
}
