<?php

/* item.html.twig */
class __TwigTemplate_222f232fb068cdfb0f1d367dfcb8480b307955dd955438990f012986240408d3 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "2075513967")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    <div class=\"blog-content-item grid pure-g-r\">
      <div id=\"item\" class=\"block pure-u-2-3 h-entry\">
        {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false} %}
      </div>

      {# check content display flag - hibbittsdesign.org #}
      {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
          {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
        </div>

      {% endif %}

    </div>
  {% endblock %}

{% endembed %}
", "item.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_222f232fb068cdfb0f1d367dfcb8480b307955dd955438990f012986240408d3_2075513967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "      ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    <div class=\"blog-content-item grid pure-g-r\">
      <div id=\"item\" class=\"block pure-u-2-3 h-entry\">
        ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 11
        echo "      </div>

      ";
        // line 14
        echo "      ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 15
            echo "
        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
          ";
            // line 17
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 17)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()))));
            // line 18
            echo "        </div>

      ";
        }
        // line 21
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 21,  128 => 18,  126 => 17,  122 => 15,  119 => 14,  115 => 11,  113 => 10,  108 => 7,  105 => 6,  102 => 5,  99 => 4,  96 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    <div class=\"blog-content-item grid pure-g-r\">
      <div id=\"item\" class=\"block pure-u-2-3 h-entry\">
        {% include 'partials/blog_item.html.twig' with {'blog': page.parent, 'truncate': false} %}
      </div>

      {# check content display flag - hibbittsdesign.org #}
      {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
          {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
        </div>

      {% endif %}

    </div>
  {% endblock %}

{% endembed %}
", "item.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/item.html.twig");
    }
}
