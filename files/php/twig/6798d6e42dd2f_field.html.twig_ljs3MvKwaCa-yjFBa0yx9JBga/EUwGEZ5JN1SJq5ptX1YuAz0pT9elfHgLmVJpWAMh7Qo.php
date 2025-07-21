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

/* modules/contrib/templating/templates/misc/field.html.twig */
class __TwigTemplate_f76b712a8efe66ce5a36c50fc702283a57b0a98b989ededa62ab42a0431f85fb extends \Twig\Template
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
        // line 28
        echo "
";
        // line 29
        $context["output"] = Drupal\templating\TwigExtension\DefaultTwigExtension::render_template($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 29, $this->source));
        // line 30
        if (($context["output"] ?? null)) {
            // line 31
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_template($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 31, $this->source)), "html", null, true));
            echo "
";
        } else {
            // line 33
            echo "  ";
            // line 34
            $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["field_name"] ?? null), 36, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 37
($context["field_type"] ?? null), 37, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(            // line 38
($context["label_display"] ?? null), 38, $this->source)), 4 => (((            // line 39
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
            // line 42
            echo "  ";
            // line 43
            $context["title_classes"] = [0 => "field__label", 1 => (((            // line 45
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
            // line 48
            echo "
  ";
            // line 49
            if (($context["label_hidden"] ?? null)) {
                // line 50
                echo "    ";
                if (($context["multiple"] ?? null)) {
                    // line 51
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 51), 51, $this->source), "html", null, true));
                    echo ">
        ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 53
                        echo "          <div";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), "addClass", [0 => "field__item"], "method", false, false, true, 53), 53, $this->source), "html", null, true));
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true));
                        echo "</div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "      </div>
    ";
                } else {
                    // line 57
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 58
                        echo "        <div";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 58), 58, $this->source), "html", null, true));
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true));
                        echo "</div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "    ";
                }
                // line 61
                echo "  ";
            } else {
                // line 62
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true));
                echo ">
      <div";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true));
                echo "</div>
      ";
                // line 64
                if (($context["multiple"] ?? null)) {
                    // line 65
                    echo "      <div class=\"field__items\">
        ";
                }
                // line 67
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", [0 => "field__item"], "method", false, false, true, 68), 68, $this->source), "html", null, true));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true));
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "        ";
                if (($context["multiple"] ?? null)) {
                    // line 71
                    echo "      </div>
      ";
                }
                // line 73
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  155 => 71,  152 => 70,  141 => 68,  136 => 67,  132 => 65,  130 => 64,  124 => 63,  119 => 62,  116 => 61,  113 => 60,  102 => 58,  97 => 57,  93 => 55,  82 => 53,  78 => 52,  73 => 51,  70 => 50,  68 => 49,  65 => 48,  63 => 45,  62 => 43,  60 => 42,  58 => 39,  57 => 38,  56 => 37,  55 => 36,  54 => 34,  52 => 33,  46 => 31,  44 => 30,  42 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for comment fields.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional title output populated by modules, intended to
 *   be displayed after the main title tag that appears in the template.
 * - comments: List of comments rendered through comment.html.twig.
 * - comment_form: The 'Add new comment' form.
 * - comment_display_mode: Is the comments are threaded.
 * - comment_type: The comment type bundle ID for the comment field.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 * @see comment_preprocess_field()
 */
#}

{% set output = render_template(var_template) %}
{% if output %}
 {{  render_template(var_template)}}
{% else %}
  {%
    set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    label_display == 'inline' ? 'clearfix',
  ]
  %}
  {%
    set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
  %}

  {% if label_hidden %}
    {% if multiple %}
      <div{{ attributes.addClass(classes, 'field__items') }}>
        {% for item in items %}
          <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
        {% endfor %}
      </div>
    {% else %}
      {% for item in items %}
        <div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>
      {% endfor %}
    {% endif %}
  {% else %}
    <div{{ attributes.addClass(classes) }}>
      <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
      {% if multiple %}
      <div class=\"field__items\">
        {% endif %}
        {% for item in items %}
          <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
        {% endfor %}
        {% if multiple %}
      </div>
      {% endif %}
    </div>
  {% endif %}
{% endif %}
", "modules/contrib/templating/templates/misc/field.html.twig", "/home/mizaramg/domains/miandrilala_group/modules/contrib/templating/templates/misc/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 30, "for" => 52);
        static $filters = array("escape" => 31, "clean_class" => 36);
        static $functions = array("render_template" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'clean_class'],
                ['render_template']
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
