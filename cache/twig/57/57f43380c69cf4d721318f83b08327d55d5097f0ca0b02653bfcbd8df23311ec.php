<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_44817bce56a59d79b69ccc97886911d933e022c8361235291c1556e721716536 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((        // line 2
($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(        // line 3
($context["blog"] ?? null), "url", array())));
        // line 4
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(        // line 6
($context["blog"] ?? null), "url", array())));
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 9
            echo "  <div class=\"sidebar-content\">
    ";
            // line 11
            echo "    <div style=\"margin-top: 10px\"></div>
    ";
            // line 12
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "  </div>
";
        }
        // line 16
        echo "<div class=\"sidebar-content\">
  ";
        // line 18
        echo "  ";
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/sidebar-markdown-widget"), "method"), "content", array());
        // line 19
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 20
            echo "    ";
            echo ($context["content"] ?? null);
            echo "
  ";
        } else {
            // line 22
            echo "    ";
            $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/sidebar"), "method"), "content", array());
            // line 23
            echo "    ";
            if (($context["content"] ?? null)) {
                // line 24
                echo "      ";
                echo ($context["content"] ?? null);
                echo "
    ";
            }
            // line 26
            echo "  ";
        }
        // line 27
        echo "</div>
";
        // line 28
        $this->loadTemplate("partials/aboutme.html.twig", "partials/sidebar.html.twig", 28)->display($context);
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 30
            echo "  <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
  ";
            // line 31
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 31)->display($context);
        }
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 34
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 35
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 36
            echo ($context["base_url"] ?? null);
            echo "/random\">
      <i class=\"fa fa-retweet\"></i>
      ";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
  </div>
";
        }
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 42
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 43
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 44
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 44)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 45
            echo "  </div>
";
        }
        // line 47
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 48
            echo "  <div class=\"sidebar-content\">
    <h4>";
            // line 49
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
    ";
            // line 50
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 50)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null))));
            // line 51
            echo "  </div>
";
        }
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 54
            echo "  <div class=\"sidebar-content syndicate\">
    <h4>";
            // line 55
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 56
            echo ($context["feed_url"] ?? null);
            echo ".atom\">
      <i class=\"fa fa-rss-square\"></i>
      Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 59
            echo ($context["feed_url"] ?? null);
            echo ".rss\">
      <i class=\"fa fa-rss-square\"></i>
      RSS</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  147 => 56,  143 => 55,  140 => 54,  138 => 53,  134 => 51,  132 => 50,  128 => 49,  125 => 48,  123 => 47,  119 => 45,  117 => 44,  113 => 43,  110 => 42,  108 => 41,  102 => 38,  97 => 36,  93 => 35,  90 => 34,  88 => 33,  85 => 31,  80 => 30,  78 => 29,  76 => 28,  73 => 27,  70 => 26,  64 => 24,  61 => 23,  58 => 22,  52 => 20,  49 => 19,  46 => 18,  43 => 16,  39 => 13,  37 => 12,  34 => 11,  31 => 9,  29 => 8,  26 => 7,  24 => 6,  23 => 4,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative
  ? (base_url_relative ~ '/' ~ blog.slug)
  : blog.url %}
{% set new_base_url = blog.url == '/'
  ? ''
  : blog.url %}

{% if config.plugins.simplesearch.enabled %}
  <div class=\"sidebar-content\">
    {#<h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>#}
    <div style=\"margin-top: 10px\"></div>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
  </div>
{% endif %}
{# display sidebar markdown page - hibbittsdesign.org #}
<div class=\"sidebar-content\">
  {# check older name for sidebar page - hibbittsdesign.org #}
  {% set content = pages.find('/sidebar-markdown-widget').content %}
  {% if content %}
    {{ content }}
  {% else %}
    {% set content = pages.find('/sidebar').content %}
    {% if content %}
      {{ content }}
    {% endif %}
  {% endif %}
</div>
{% include 'partials/aboutme.html.twig' %}
{% if config.plugins.relatedpages.enabled and related_pages | length > 0 %}
  <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
  {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ base_url }}/random\">
      <i class=\"fa fa-retweet\"></i>
      {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
  </div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url': new_base_url, 'taxonomy': 'tag'} %}
  </div>
{% endif %}
{% if config.plugins.archives.enabled %}
  <div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
    {% include 'partials/archives.html.twig' with {'base_url': new_base_url} %}
  </div>
{% endif %}
{% if config.plugins.feed.enabled %}
  <div class=\"sidebar-content syndicate\">
    <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\">
      <i class=\"fa fa-rss-square\"></i>
      Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\">
      <i class=\"fa fa-rss-square\"></i>
      RSS</a>
  </div>
{% endif %}
", "partials/sidebar.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/partials/sidebar.html.twig");
    }
}
