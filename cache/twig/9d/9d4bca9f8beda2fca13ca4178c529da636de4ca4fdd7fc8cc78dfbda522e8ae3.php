<?php

/* blog.html.twig */
class __TwigTemplate_1b90248035071bfb85c6612a9134027e4e5f3223ef7bd083581d6ea19c031ef0 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1202435567")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
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

  {% set collection = page.collection() %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

      {# display blog header image without any visual effects - hibbittsdesign.org #}
      {% set blog_image = page.media.images | first %}

      {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
        {% else %}
          <div class=\"blog-header\">
          {% endif %}
          {{ page.content }}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">

          {% for module in page.collection('modular_content') %}
            {% if (module.content|striptags)|trim %}
              <p>{{ module.content }}</p>
            {% endif %}
          {% endfor %}

          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% if (child.header.hide_from_post_list != true) and (child.parent.slug == page.slug) %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% if child.header.hide_from_post_list != true %}
                  {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                {% endif %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% if child.header.hide_from_post_list != true %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            {% include 'partials/sidebar.html.twig' with {'blog': page} %}
          </div>

        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "blog.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_1b90248035071bfb85c6612a9134027e4e5f3223ef7bd083581d6ea19c031ef0_1202435567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 9
            echo "
      ";
            // line 11
            echo "      ";
            $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
            // line 12
            echo "
      ";
            // line 13
            if (($context["blog_image"] ?? null)) {
                // line 14
                echo "        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
                echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
                echo ");\">
        ";
            } else {
                // line 16
                echo "          <div class=\"blog-header\">
          ";
            }
            // line 18
            echo "          ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>
      ";
        } else {
            // line 21
            echo "        <div style=\"margin-bottom: -16px;\"></div>
      ";
        }
        // line 23
        echo "
      ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 25
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 25)->display($context);
            // line 26
            echo "      ";
        }
        // line 27
        echo "
      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">

          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => "modular_content"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 32
            echo "            ";
            if (twig_trim_filter(strip_tags($this->getAttribute($context["module"], "content", array())))) {
                // line 33
                echo "              <p>";
                echo $this->getAttribute($context["module"], "content", array());
                echo "</p>
            ";
            }
            // line 35
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
          ";
        // line 38
        echo "          ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "tag"), "method") && ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "archives_month"), "method") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "page"), "method")))) {
            // line 39
            echo "
            ";
            // line 41
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("tag" => "featured")), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 42
                echo "              ";
                if ((($this->getAttribute($this->getAttribute($context["child"], "header", array()), "hide_from_post_list", array()) != true) && ($this->getAttribute($this->getAttribute($context["child"], "parent", array()), "slug", array()) == $this->getAttribute(($context["page"] ?? null), "slug", array())))) {
                    // line 43
                    echo "                ";
                    $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 43)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                    // line 44
                    echo "              ";
                }
                // line 45
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
            ";
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 49
                echo "              ";
                if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "tag", array(), "array"))) {
                    // line 50
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["child"], "header", array()), "hide_from_post_list", array()) != true)) {
                        // line 51
                        echo "                  ";
                        $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 51)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                        // line 52
                        echo "                ";
                    }
                    // line 53
                    echo "              ";
                }
                // line 54
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
          ";
        } else {
            // line 57
            echo "
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 59
                echo "              ";
                if (($this->getAttribute($this->getAttribute($context["child"], "header", array()), "hide_from_post_list", array()) != true)) {
                    // line 60
                    echo "                ";
                    $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 60)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
                    // line 61
                    echo "              ";
                }
                // line 62
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
          ";
        }
        // line 65
        echo "
          ";
        // line 66
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 67
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 67)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 68
            echo "          ";
        }
        // line 69
        echo "
        </div>

        ";
        // line 73
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "chromeless", array()), "enabled", array()))) {
            // line 74
            echo "
          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            ";
            // line 76
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 76)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
            // line 77
            echo "          </div>

        ";
        }
        // line 80
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 80,  411 => 77,  409 => 76,  405 => 74,  402 => 73,  397 => 69,  394 => 68,  391 => 67,  389 => 66,  386 => 65,  382 => 63,  368 => 62,  365 => 61,  362 => 60,  359 => 59,  342 => 58,  339 => 57,  335 => 55,  321 => 54,  318 => 53,  315 => 52,  312 => 51,  309 => 50,  306 => 49,  288 => 48,  285 => 46,  271 => 45,  268 => 44,  265 => 43,  262 => 42,  244 => 41,  241 => 39,  238 => 38,  235 => 36,  229 => 35,  223 => 33,  220 => 32,  216 => 31,  210 => 27,  207 => 26,  204 => 25,  202 => 24,  199 => 23,  195 => 21,  188 => 18,  184 => 16,  178 => 14,  176 => 13,  173 => 12,  170 => 11,  167 => 9,  164 => 8,  161 => 6,  158 => 5,  154 => 1,  152 => 3,  19 => 1,);
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

  {% set collection = page.collection() %}

  {% block content %}

    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

      {# display blog header image without any visual effects - hibbittsdesign.org #}
      {% set blog_image = page.media.images | first %}

      {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
        {% else %}
          <div class=\"blog-header\">
          {% endif %}
          {{ page.content }}
        </div>
      {% else %}
        <div style=\"margin-bottom: -16px;\"></div>
      {% endif %}

      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
      {% endif %}

      <div class=\"content-wrapper blog-content-list grid pure-g\">
        <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">

          {% for module in page.collection('modular_content') %}
            {% if (module.content|striptags)|trim %}
              <p>{{ module.content }}</p>
            {% endif %}
          {% endfor %}

          {# check if taxonomy and archive parm is false - hibbittsdesign.org #}
          {% if not(grav.uri.param('tag')) and (not(grav.uri.param('archives_month')) and (not(grav.uri.param('page')))) %}

            {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
            {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
              {% if (child.header.hide_from_post_list != true) and (child.parent.slug == page.slug) %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

            {# display posts without 'featured' tag - hibbittsdesign.org #}
            {% for child in collection %}
              {% if \"featured\" not in child.taxonomy['tag'] %}
                {% if child.header.hide_from_post_list != true %}
                  {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                {% endif %}
              {% endif %}
            {% endfor %}

          {% else %}

            {% for child in collection %}
              {% if child.header.hide_from_post_list != true %}
                {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
              {% endif %}
            {% endfor %}

          {% endif %}

          {% if config.plugins.pagination.enabled and collection.params.pagination %}
            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
          {% endif %}

        </div>

        {# check content display flag - hibbittsdesign.org #}
        {% if not(grav.uri.param('chromeless')) and (not theme_config.chromeless.enabled) %}

          <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
            {% include 'partials/sidebar.html.twig' with {'blog': page} %}
          </div>

        {% endif %}

      </div>
    {% endblock %}

  {% endembed %}
", "blog.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/blog.html.twig");
    }
}
