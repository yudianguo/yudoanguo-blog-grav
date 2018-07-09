<?php

/* partials/scripts.html.twig */
class __TwigTemplate_e34ef8cf617b9344bd4e0ac98f5b7e8a7554e9215cd1fec57e5f21c338f6309c extends Twig_Template
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
        // line 1
        echo "<!--- Your global JavaScript code can go here -->
";
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--- Your global JavaScript code can go here -->
", "partials/scripts.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/partials/scripts.html.twig");
    }
}
