<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_b7b255a0f9acbd9726f131430d1079491788599d7b0ab49ea2079b7b1a8a5761 extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

  ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 4
        echo "  ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 1000);
        // line 5
        echo "  ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 330);
        // line 6
        echo "  ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 7
        echo "
  <div class=\"list-blog-header\">
    <span class=\"list-blog-date\">
      <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), " c");
        echo "\">
        <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
        <em>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</em>
      </time>
    </span>
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 16
            echo "      <h4 class=\"p-name\">
        ";
            // line 17
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 18
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\">
            <i class=\"fa fa-angle-double-right u-url\"></i>
          </a>
        ";
            }
            // line 22
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      </h4>
    ";
        } else {
            // line 25
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_icon", array())) {
                // line 26
                echo "        ";
                $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_icon", array());
                // line 27
                echo "      ";
            } else {
                // line 28
                echo "        ";
                if ($this->getAttribute(($context["theme_config"] ?? null), "post_icon", array())) {
                    // line 29
                    echo "          ";
                    $context["titleicon"] = $this->getAttribute(($context["theme_config"] ?? null), "post_icon", array());
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "      ";
            }
            // line 32
            echo "      ";
            if (($context["titleicon"] ?? null)) {
                // line 33
                echo "        <h4 class=\"p-name\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"u-url\"><i class=\"fa fa-";
                echo ($context["titleicon"] ?? null);
                echo "\" aria-hidden=\"true\"></i> ";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "</a></h4>
      ";
            } else {
                // line 35
                echo "        <h4 class=\"p-name\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"u-url\">";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "</a></h4>
      ";
            }
            // line 37
            echo "  ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 40
            echo "    <span class=\"tags\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "        <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </span>
    ";
        }
        // line 46
        echo "    ";
        if (($context["header_image"] ?? null)) {
            // line 47
            echo "      ";
            if (($context["header_image_file"] ?? null)) {
                // line 48
                echo "        ";
                $context["image_parts"] = pathinfo(($context["header_image_file"] ?? null));
                // line 49
                echo "        ";
                $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
                // line 50
                echo "        ";
                $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
                // line 51
                echo "        ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array");
                // line 52
                echo "      ";
            } else {
                // line 53
                echo "        ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 54
                echo "      ";
            }
            // line 55
            echo "
      ";
            // line 57
            echo "      ";
            if (($context["header_image_media"] ?? null)) {
                // line 58
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_credit", array())) {
                    // line 59
                    echo "          ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_credit", array());
                    // line 60
                    echo "          ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_creditlink", array());
                    // line 61
                    echo "          ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_alt_text", array());
                    // line 62
                    echo "        ";
                } elseif ($this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", array()), "header_image_credit", array())) {
                    // line 63
                    echo "          ";
                    $context["image_credit"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", array()), "header_image_credit", array());
                    // line 64
                    echo "          ";
                    $context["image_creditlink"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", array()), "header_image_creditlink", array());
                    // line 65
                    echo "          ";
                    $context["image_alt_text"] = $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "meta", array()), "header_image_alt_text", array());
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "        ";
                if (($context["image_credit"] ?? null)) {
                    // line 68
                    echo "          <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
            ";
                    // line 69
                    if (($context["image_creditlink"] ?? null)) {
                        // line 70
                        echo "              Image: <a class=\"newwindow external-link\" href=\"";
                        echo ($context["image_creditlink"] ?? null);
                        echo "\">
              ";
                        // line 71
                        echo ($context["image_credit"] ?? null);
                        echo "</a></span>
              <img src=\"";
                        // line 72
                        echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "url", array());
                        echo "\" alt=\"";
                        echo ($context["image_alt_text"] ?? null);
                        echo "\"/>
            ";
                    } else {
                        // line 74
                        echo "              Image: ";
                        echo ($context["image_credit"] ?? null);
                        echo "</span>
              <img src=\"";
                        // line 75
                        echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "url", array());
                        echo "\" alt=\"";
                        echo ($context["image_alt_text"] ?? null);
                        echo "\"/>
            ";
                    }
                    // line 77
                    echo "          </div>
        ";
                } else {
                    // line 79
                    echo "          <img src=\"";
                    echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "url", array());
                    echo "\" alt=\"";
                    echo ($context["image_alt_text"] ?? null);
                    echo "\"/>
        ";
                }
                // line 81
                echo "      ";
            }
            // line 82
            echo "
  ";
        }
        // line 84
        echo "
  </div>

  <div class=\"list-blog-padding\">

    ";
        // line 89
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 90
            echo "      <div class=\"e-content\">
        ";
            // line 91
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
      </div>
      ";
            // line 93
            if ( !($context["truncate"] ?? null)) {
                // line 94
                echo "        ";
                $context["show_prev_next"] = true;
                // line 95
                echo "      ";
            }
            // line 96
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 97
            echo "      <div class=\"p-summary e-content\">
          ";
            // line 98
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
          <p><a href=\"";
            // line 99
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
      </div>
      ";
        } elseif (        // line 101
($context["truncate"] ?? null)) {
            // line 102
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 103
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            <p><a href=\"";
            // line 104
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 107
            echo "
      ";
            // line 109
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "displaypostsummary", array()), "enabled", array())) {
                // line 110
                echo "        ";
                $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
                // line 111
                echo "      ";
            } else {
                // line 112
                echo "        ";
                $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", array());
                // line 113
                echo "      ";
            }
            // line 114
            echo "
      <div class=\"e-content\">
        ";
            // line 116
            echo ($context["content"] ?? null);
            echo "
      </div>

      ";
            // line 119
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 120
                echo "        ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 120)->display($context);
                // line 121
                echo "      ";
            }
            // line 122
            echo "
      ";
            // line 123
            $context["show_prev_next"] = true;
            // line 124
            echo "    ";
        }
        // line 125
        echo "
    ";
        // line 126
        if (($context["show_prev_next"] ?? null)) {
            // line 127
            echo "
      ";
            // line 129
            echo "      <p class=\"prev-next\">
        ";
            // line 130
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 131
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">
              <i class=\"fa fa-chevron-left\"></i>
              ";
                // line 133
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo "</a>
        ";
            }
            // line 135
            echo "
        ";
            // line 136
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 137
                echo "            <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">
              ";
                // line 138
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "
              <i class=\"fa fa-chevron-right\"></i>
            </a>
        ";
            }
            // line 142
            echo "
      </p>

    ";
        }
        // line 146
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 146,  411 => 142,  404 => 138,  399 => 137,  397 => 136,  394 => 135,  389 => 133,  383 => 131,  381 => 130,  378 => 129,  375 => 127,  373 => 126,  370 => 125,  367 => 124,  365 => 123,  362 => 122,  359 => 121,  356 => 120,  354 => 119,  348 => 116,  344 => 114,  341 => 113,  338 => 112,  335 => 111,  332 => 110,  329 => 109,  326 => 107,  318 => 104,  314 => 103,  311 => 102,  309 => 101,  302 => 99,  298 => 98,  295 => 97,  292 => 96,  289 => 95,  286 => 94,  284 => 93,  279 => 91,  276 => 90,  274 => 89,  267 => 84,  263 => 82,  260 => 81,  252 => 79,  248 => 77,  241 => 75,  236 => 74,  229 => 72,  225 => 71,  220 => 70,  218 => 69,  215 => 68,  212 => 67,  209 => 66,  206 => 65,  203 => 64,  200 => 63,  197 => 62,  194 => 61,  191 => 60,  188 => 59,  185 => 58,  182 => 57,  179 => 55,  176 => 54,  173 => 53,  170 => 52,  167 => 51,  164 => 50,  161 => 49,  158 => 48,  155 => 47,  152 => 46,  148 => 44,  134 => 42,  130 => 41,  127 => 40,  125 => 39,  122 => 38,  119 => 37,  111 => 35,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  77 => 25,  68 => 22,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

  {% set header_image = page.header.header_image | defined(true) %}
  {% set header_image_width = page.header.header_image_width | defined(1000) %}
  {% set header_image_height = page.header.header_image_height | defined(330) %}
  {% set header_image_file = page.header.header_image_file %}

  <div class=\"list-blog-header\">
    <span class=\"list-blog-date\">
      <time class=\"dt-published\" datetime=\"{{ page.date|date(\" c\") }}\">
        <span>{{ page.date|date(\"d\") }}</span>
        <em>{{ page.date|date(\"M\") }}</em>
      </time>
    </span>
    {% if page.header.link %}
      <h4 class=\"p-name\">
        {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\">
            <i class=\"fa fa-angle-double-right u-url\"></i>
          </a>
        {% endif %}
        <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
      </h4>
    {% else %}
      {% if page.header.post_icon %}
        {% set titleicon = page.header.post_icon %}
      {% else %}
        {% if theme_config.post_icon %}
          {% set titleicon = theme_config.post_icon %}
        {% endif %}
      {% endif %}
      {% if titleicon %}
        <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\"><i class=\"fa fa-{{ titleicon }}\" aria-hidden=\"true\"></i> {{ page.title }}</a></h4>
      {% else %}
        <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
      {% endif %}
  {% endif %}

    {% if page.taxonomy.tag %}
    <span class=\"tags\">
        {% for tag in page.taxonomy.tag %}
        <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
        {% endfor %}
    </span>
    {% endif %}
    {% if header_image %}
      {% if header_image_file %}
        {% set image_parts = pathinfo(header_image_file) %}
        {% set image_basename = image_parts.basename %}
        {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
        {% set header_image_media = image_page.media[image_basename] %}
      {% else %}
        {% set header_image_media = page.media.images | first %}
      {% endif %}

      {# support image credit tag with optional image meta file - hibbittsdesign.org #}
      {% if header_image_media %}
        {% if page.header.header_image_credit %}
          {% set image_credit = page.header.header_image_credit %}
          {% set image_creditlink = page.header.header_image_creditlink %}
          {% set image_alt_text = page.header.header_image_alt_text %}
        {% elseif header_image_media.meta.header_image_credit  %}
          {% set image_credit = header_image_media.meta.header_image_credit %}
          {% set image_creditlink = header_image_media.meta.header_image_creditlink %}
          {% set image_alt_text = header_image_media.meta.header_image_alt_text %}
        {% endif %}
        {% if image_credit %}
          <div class=\"image-credit-wrapper\"><span class=\"image-credit\">
            {% if image_creditlink %}
              Image: <a class=\"newwindow external-link\" href=\"{{ image_creditlink }}\">
              {{ image_credit }}</a></span>
              <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
            {% else %}
              Image: {{ image_credit }}</span>
              <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
            {% endif %}
          </div>
        {% else %}
          <img src=\"{{ header_image_media.cropZoom(header_image_width, header_image_height).url }}\" alt=\"{{ image_alt_text }}\"/>
        {% endif %}
      {% endif %}

  {% endif %}

  </div>

  <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
      <div class=\"e-content\">
        {{ page.content }}
      </div>
      {% if not truncate %}
        {% set show_prev_next = true %}
      {% endif %}
    {% elseif truncate and page.summary != page.content %}
      <div class=\"p-summary e-content\">
          {{ page.summary }}
          <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
      </div>
      {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% else %}

      {# check to hide post summary on page - hibbittsdesign.org #}
      {% if theme_config.displaypostsummary.enabled %}
        {% set content = page.content | slice(page.summary | length) %}
      {% else %}
        {% set content = page.content %}
      {% endif %}

      <div class=\"e-content\">
        {{ content }}
      </div>

      {% if config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
      {% endif %}

      {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

      {# reversed order of buttons - hibbittsdesign.org #}
      <p class=\"prev-next\">
        {% if not page.isLast %}
            <a class=\"button\" href=\"{{ page.prevSibling.url }}\">
              <i class=\"fa fa-chevron-left\"></i>
              {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
        {% endif %}

        {% if not page.isFirst %}
            <a class=\"button\" href=\"{{ page.nextSibling.url }}\">
              {{ 'BLOG.ITEM.NEXT_POST'|t }}
              <i class=\"fa fa-chevron-right\"></i>
            </a>
        {% endif %}

      </p>

    {% endif %}

  </div>
</div>
", "partials/blog_item.html.twig", "/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/templates/partials/blog_item.html.twig");
    }
}
