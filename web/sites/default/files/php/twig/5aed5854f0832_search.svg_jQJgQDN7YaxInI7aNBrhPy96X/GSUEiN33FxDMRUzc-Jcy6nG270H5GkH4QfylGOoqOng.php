<?php

/* themes/contrib/umami/images/svg/search.svg */
class __TwigTemplate_a3da414a6abc9aae008b0d7bb35988c1e5985f62f1712a4c868796c24f758f33 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<svg id=\"Layer_1\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 600 600\">
  <defs>
    <style>
      .cls-1{fill:none;}.cls-2{fill:#d93760;}
    </style>
  </defs>
  <path class=\"cls-1\" d=\"M228.37 348.78L110.23 466.92l22.86 22.84 118.12-118.14a165.77 165.77 0 0 1-22.84-22.84zm127.38-236.35a131.82 131.82 0 0 0 0 263.65 131.82 131.82 0 0 0 0-263.64zm-85.83 117.66a12.91 12.91 0 1 1 12.91-12.91 12.91 12.91 0 0 1-12.91 12.91zm28.43-31.3A22.61 22.61 0 1 1 321 176.18a22.61 22.61 0 0 1-22.65 22.61zM344 167.72a12.93 12.93 0 1 1 13-12.93 12.93 12.93 0 0 1-13 12.93z\"/>
  <path class=\"cls-2\" d=\"M355.75 79.47a164.81 164.81 0 0 0-144.5 244 38.93 38.93 0 0 0-11 7.73L90.9 440.58a39 39 0 0 0 0 55.15l13.37 13.37a39 39 0 0 0 55.17 0l109.33-109.34a38.85 38.85 0 0 0 7.74-11 164.78 164.78 0 1 0 79.24-309.29zM133.09 489.76l-22.86-22.84 118.14-118.14a165.77 165.77 0 0 0 22.84 22.84zm222.66-113.69a131.82 131.82 0 1 1 131.81-131.83 131.81 131.81 0 0 1-131.84 131.84z\"/>
  <circle class=\"cls-2\" cx=\"298.35\" cy=\"176.18\" r=\"22.61\"/>
  <circle class=\"cls-2\" cx=\"344.05\" cy=\"154.79\" r=\"12.93\"/>
  <circle class=\"cls-2\" cx=\"269.92\" cy=\"217.18\" r=\"12.91\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/umami/images/svg/search.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/umami/images/svg/search.svg", "/var/www/umami/web/themes/contrib/umami/images/svg/search.svg");
    }
}