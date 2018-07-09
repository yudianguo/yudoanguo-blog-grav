<?php

/* partials/aboutme.html.twig */
class __TwigTemplate_7b81fcefeb125cf39c1a414c1f6e4edd78d5cde991824ac06363b317fa140f88 extends Twig_Template
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
        echo "<div class=\"about-me h-card\">
\t";
        // line 2
        $context["src"] = (isset($context["aboutme_picture_src"]) ? $context["aboutme_picture_src"] : null);
        // line 3
        echo "\t";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "aboutme", array()), "gravatar", array()), "enabled", array())) {
            // line 4
            echo "\t\t";
            $context["src"] = (($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array(0 => false), "method") . ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array(0 => false), "method") == "/")) ? ("") : ("/"))) . (isset($context["aboutme_picture_src"]) ? $context["aboutme_picture_src"] : null));
            // line 5
            echo "\t";
        }
        // line 6
        echo "\t<img src=\"";
        echo (isset($context["src"]) ? $context["src"] : null);
        echo "\" title=\"";
        echo (isset($context["aboutme_name"]) ? $context["aboutme_name"] : null);
        echo "\" alt=\"Profile picture\" class=\"u-photo\" />
\t<h4><a href=\"";
        // line 7
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" class=\"p-name u-url\">";
        echo (isset($context["aboutme_name"]) ? $context["aboutme_name"] : null);
        echo "</a></h4>
\t<h3>";
        // line 8
        echo (isset($context["aboutme_title"]) ? $context["aboutme_title"] : null);
        echo "</h3>
\t<p class=\"p-note\">";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(nl2br(twig_escape_filter($this->env, (isset($context["aboutme_description"]) ? $context["aboutme_description"] : null), "html", null, true)));
        echo "</p>
\t";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "aboutme", array()), "social_pages", array()), "enabled", array())) {
            // line 11
            echo "\t\t<div class=\"social-pages\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aboutme_pages"]) ? $context["aboutme_pages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 13
                echo "\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute($context["page"], "url", array()))) {
                    // line 14
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\" ";
                    echo (($this->getAttribute($context["page"], "title", array())) ? ((("title=\"" . $this->getAttribute($context["page"], "title", array())) . "\"")) : (""));
                    echo " target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-";
                    echo $this->getAttribute($context["page"], "icon", array());
                    echo "\"></i></a>
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t</div>
\t";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/aboutme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  82 => 17,  76 => 16,  66 => 14,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 9,  46 => 8,  40 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"about-me h-card\">
\t{% set src = aboutme_picture_src %}
\t{% if not config.plugins.aboutme.gravatar.enabled %}
\t\t{% set src = uri.rootUrl(false) ~ (uri.rootUrl(false) == '/' ? '' : '/') ~ aboutme_picture_src %}
\t{% endif %}
\t<img src=\"{{ src }}\" title=\"{{ aboutme_name }}\" alt=\"Profile picture\" class=\"u-photo\" />
\t<h4><a href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"p-name u-url\">{{ aboutme_name }}</a></h4>
\t<h3>{{ aboutme_title }}</h3>
\t<p class=\"p-note\">{{ aboutme_description|nl2br|markdown|raw }}</p>
\t{% if config.plugins.aboutme.social_pages.enabled %}
\t\t<div class=\"social-pages\">
\t\t{% for page in aboutme_pages %}
\t\t\t{% if page.url|length %}
\t\t\t\t<a href=\"{{ page.url }}\" {{ page.title ? 'title=\"' ~ page.title ~ '\"' }} target=\"_blank\" rel=\"me\" class=\"u-url\"><i class=\"fa fa-2x fa-{{ page.icon }}\"></i></a>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t</div>
\t{% endif %}
</div>
", "partials/aboutme.html.twig", "/var/www/yudoanguo-blog-grav/user/plugins/aboutme/templates/partials/aboutme.html.twig");
    }
}
