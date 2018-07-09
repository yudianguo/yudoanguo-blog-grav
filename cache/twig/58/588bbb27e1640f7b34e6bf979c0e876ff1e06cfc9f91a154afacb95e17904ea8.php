<?php

/* partials/navigation.html.twig */
class __TwigTemplate_327cff4b495c7dc806a17f04c19c3c26f3edddfff205cdbf4e8e92f5e5e56921 extends Twig_Template
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
        // line 34
        echo "
<ul class=\"navigation\">
";
        // line 36
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 37
            echo "  ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
";
        } else {
            // line 39
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 40
                echo "    ";
                // line 41
                echo "    ";
                if ( !($this->getAttribute(($context["theme_config"] ?? null), "hidehomemenulink", array()) && twig_in_filter($this->getAttribute($context["page"], "slug", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "home", array()), "alias", array())))) {
                    // line 42
                    echo "      ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                    // line 45
                    echo "      <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
        <a href=\"";
                    // line 46
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
          ";
                    // line 47
                    if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                        // line 48
                        echo "            <i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                        echo "\"></i>
          ";
                    }
                    // line 50
                    echo "          ";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
        </a>
      </li>
    ";
                }
                // line 54
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 57
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "displaycustommenus", array()), "enabled", array())) {
            // line 58
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "menu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 59
                echo "    <li>
      <a href=\"";
                // line 60
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", array());
                echo "\">
        ";
                // line 61
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    // line 62
                    echo "          <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>
        ";
                }
                // line 64
                echo "        ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
      </a>
    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 70
        if ((($this->getAttribute(($context["theme_config"] ?? null), "display_of_git_sync_repo_link", array()) == "menu") || ($this->getAttribute(($context["theme_config"] ?? null), "display_of_git_sync_repo_link", array()) == ($context["empty"] ?? null)))) {
            // line 71
            echo "  <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 71)->display($context);
            echo "</li>
";
        }
        // line 73
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 74
            echo "  <li>
    <i class=\"fa fa-lock\"></i>
    ";
            // line 76
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 76)->display($context);
            echo "</li>
";
        }
        // line 78
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "    ";
                // line 4
                echo "    ";
                if ( !($this->getAttribute(($context["theme_config"] ?? null), "hidehomemenulink", array()) && twig_in_filter($this->getAttribute($context["p"], "slug", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "home", array()), "alias", array())))) {
                    // line 5
                    echo "      ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 8
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 9
                        echo "        <li class=\"has-children ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
          <a href=\"";
                        // line 10
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\">
            ";
                        // line 11
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 12
                            echo "              <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
            ";
                        }
                        // line 14
                        echo "            ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
            <span></span>
          </a>
          <ul>
            ";
                        // line 18
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
        </ul>
      </li>
    ";
                    } else {
                        // line 22
                        echo "      <li class=\"";
                        echo ($context["current_page"] ?? null);
                        echo "\">
        <a href=\"";
                        // line 23
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\">
          ";
                        // line 24
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 25
                            echo "            <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
          ";
                        }
                        // line 27
                        echo "          ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
        </a>
      </li>
    ";
                    }
                    // line 31
                    echo "  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 31,  213 => 27,  207 => 25,  205 => 24,  201 => 23,  196 => 22,  189 => 18,  181 => 14,  175 => 12,  173 => 11,  169 => 10,  164 => 9,  161 => 8,  158 => 5,  155 => 4,  153 => 3,  148 => 2,  136 => 1,  131 => 78,  126 => 76,  122 => 74,  120 => 73,  114 => 71,  112 => 70,  100 => 64,  94 => 62,  92 => 61,  86 => 60,  83 => 59,  78 => 58,  76 => 57,  69 => 54,  61 => 50,  55 => 48,  53 => 47,  49 => 46,  44 => 45,  41 => 42,  38 => 41,  36 => 40,  31 => 39,  25 => 37,  23 => 36,  19 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
  {% for p in page.children.visible %}
    {# Supress home menu link - hibbittsdesign.org #}
    {% if not((theme_config.hidehomemenulink) and (p.slug in config.system.home.alias)) %}
      {% set current_page = (p.active or p.activeChild)
        ? 'active'
        : '' %}
      {% if p.children.visible.count > 0 %}
        <li class=\"has-children {{ current_page }}\">
          <a href=\"{{ p.url }}\">
            {% if p.header.icon %}
              <i class=\"fa fa-{{ p.header.icon }}\"></i>
            {% endif %}
            {{ p.menu }}
            <span></span>
          </a>
          <ul>
            {{ _self.loop(p) }}
        </ul>
      </li>
    {% else %}
      <li class=\"{{ current_page }}\">
        <a href=\"{{ p.url }}\">
          {% if p.header.icon %}
            <i class=\"fa fa-{{ p.header.icon }}\"></i>
          {% endif %}
          {{ p.menu }}
        </a>
      </li>
    {% endif %}
  {% endif %}
{% endfor %}
{% endmacro %}

<ul class=\"navigation\">
{% if theme_config.dropdown.enabled %}
  {{ _self.loop(pages) }}
{% else %}
  {% for page in pages.children.visible %}
    {# Supress home menu link - hibbittsdesign.org #}
    {% if not((theme_config.hidehomemenulink) and (page.slug in config.system.home.alias)) %}
      {% set current_page = (page.active or page.activeChild)
        ? 'active'
        : '' %}
      <li class=\"{{ current_page }}\">
        <a href=\"{{ page.url }}\">
          {% if page.header.icon %}
            <i class=\"fa fa-{{ page.header.icon }}\"></i>
          {% endif %}
          {{ page.menu }}
        </a>
      </li>
    {% endif %}
  {% endfor %}
{% endif %}
{# custom menu items check and display - hibbittsdesign.org #}
{% if theme_config.displaycustommenus.enabled %}
  {% for mitem in theme_config.menu %}
    <li>
      <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
        {% if mitem.icon %}
          <i class=\"fa fa-{{ mitem.icon }}\"></i>
        {% endif %}
        {{ mitem.text }}
      </a>
    </li>
  {% endfor %}
{% endif %}
{# check to display git sync link in menu - hibbittsdesign.org #}
{% if theme_config.display_of_git_sync_repo_link == 'menu' or theme_config.display_of_git_sync_repo_link == empty %}
  <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
{% endif %}
{% if config.plugins.login.enabled and grav.user.username %}
  <li>
    <i class=\"fa fa-lock\"></i>
    {% include 'partials/login-status.html.twig' %}</li>
{% endif %}
</ul>
", "partials/navigation.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/partials/navigation.html.twig");
    }
}
