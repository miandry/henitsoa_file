<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/templating/templates/misc/views-view.html.twig */
class __TwigTemplate_7af6505848f755ff0a32b736f1deb2a4910fa18a5e113b35f27f52de16c89ea2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null), 38, $this->source)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 39, $this->source))) : (""))];
        // line 42
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true));
        echo ">
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true));
        echo "
  ";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "    ";
            if (($context["template_title"] ?? null)) {
                // line 46
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_title"] ?? null), 46, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 48
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 50
            echo "  ";
        }
        // line 51
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 51, $this->source), "html", null, true));
        echo "
  ";
        // line 52
        if (($context["header"] ?? null)) {
            // line 53
            echo "    <div class=\"view-header\">   
      ";
            // line 54
            if (($context["template_header"] ?? null)) {
                // line 55
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_header"] ?? null), 55, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 57
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 57, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 59
            echo "    </div>
  ";
        }
        // line 61
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 62
            echo "    <div class=\"view-filters\">
      ";
            // line 63
            if (($context["template_exposed"] ?? null)) {
                // line 64
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_exposed"] ?? null), 64, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 66
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 66, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 68
            echo "    </div>
  ";
        }
        // line 70
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 71
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 72, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if (($context["rows"] ?? null)) {
            // line 77
            echo "    <div class=\"view-content\">
      ";
            // line 78
            if (($context["template_rows"] ?? null)) {
                // line 79
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_rows"] ?? null), 79, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 81
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 81, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 83
            echo "    </div>
  ";
        } elseif (        // line 84
($context["empty"] ?? null)) {
            // line 85
            echo "    <div class=\"view-empty\">
      ";
            // line 86
            if (($context["template_empty"] ?? null)) {
                // line 87
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_empty"] ?? null), 87, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 89
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 89, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 91
            echo "    </div>
  ";
        }
        // line 93
        echo "  ";
        if (($context["pager"] ?? null)) {
            // line 94
            echo "      ";
            if (($context["template_pager"] ?? null)) {
                // line 95
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_pager"] ?? null), 95, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 97
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 97, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 99
            echo "  ";
        }
        // line 100
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 101
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 102, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 105
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 106
            echo "     ";
            if (($context["template_more"] ?? null)) {
                // line 107
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_more"] ?? null), 107, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 109
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 109, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 111
            echo "  ";
        }
        // line 112
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 113
            echo "    <div class=\"view-footer\">
      ";
            // line 114
            if (($context["template_footer"] ?? null)) {
                // line 115
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["template_footer"] ?? null), 115, $this->source), "html", null, true));
                echo "
      ";
            } else {
                // line 117
                echo "         ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 117, $this->source), "html", null, true));
                echo "
      ";
            }
            // line 119
            echo "    </div>
  ";
        }
        // line 121
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 122
            echo "    <div class=\"feed-icons\">
      ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 123, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 126
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 126,  270 => 123,  267 => 122,  264 => 121,  260 => 119,  254 => 117,  248 => 115,  246 => 114,  243 => 113,  240 => 112,  237 => 111,  231 => 109,  225 => 107,  222 => 106,  219 => 105,  213 => 102,  210 => 101,  207 => 100,  204 => 99,  198 => 97,  192 => 95,  189 => 94,  186 => 93,  182 => 91,  176 => 89,  170 => 87,  168 => 86,  165 => 85,  163 => 84,  160 => 83,  154 => 81,  148 => 79,  146 => 78,  143 => 77,  141 => 76,  138 => 75,  132 => 72,  129 => 71,  126 => 70,  122 => 68,  116 => 66,  110 => 64,  108 => 63,  105 => 62,  102 => 61,  98 => 59,  92 => 57,  86 => 55,  84 => 54,  81 => 53,  79 => 52,  74 => 51,  71 => 50,  65 => 48,  59 => 46,  56 => 45,  54 => 44,  50 => 43,  45 => 42,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if title %}
    {% if template_title %}
         {{ template_title }}
      {% else %}
        {{ title }}
      {% endif %}
  {% endif %}
  {{ title_suffix }}
  {% if header %}
    <div class=\"view-header\">   
      {% if template_header %}
         {{ template_header }}
      {% else %}
        {{ header }}
      {% endif %}
    </div>
  {% endif %}
  {% if exposed %}
    <div class=\"view-filters\">
      {% if template_exposed %}
         {{ template_exposed }}
      {% else %}
         {{exposed}}
      {% endif %}
    </div>
  {% endif %}
  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"view-content\">
      {% if template_rows %}
         {{ template_rows }}
      {% else %}
         {{rows}}
      {% endif %}
    </div>
  {% elseif empty %}
    <div class=\"view-empty\">
      {% if template_empty %}
         {{ template_empty }}
      {% else %}
         {{empty}}
      {% endif %}
    </div>
  {% endif %}
  {% if pager %}
      {% if template_pager %}
         {{ template_pager }}
      {% else %}
         {{pager}}
      {% endif %}
  {% endif %}
  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}
  {% if more %}
     {% if template_more %}
         {{ template_more }}
      {% else %}
         {{ more }}
      {% endif %}
  {% endif %}
  {% if footer %}
    <div class=\"view-footer\">
      {% if template_footer %}
         {{ template_footer }}
      {% else %}
         {{ footer }}
      {% endif %}
    </div>
  {% endif %}
  {% if feed_icons %}
    <div class=\"feed-icons\">
      {{ feed_icons }}
    </div>
  {% endif %}
</div>
", "modules/contrib/templating/templates/misc/views-view.html.twig", "/home/mizaramg/domains/miandrilala_group/modules/contrib/templating/templates/misc/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 44);
        static $filters = array("clean_class" => 36, "escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
