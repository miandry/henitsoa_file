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

/* modules/contrib/templating/templates/misc/form.html.twig */
class __TwigTemplate_26bcf2444d64eec60a1ff6ac15977934490b2712f172e0790c8221909010f222 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'templating_content' => [$this, 'block_templating_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["output"] = Drupal\templating\TwigExtension\DefaultTwigExtension::render_template($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 13, $this->source));
        // line 14
        if (($context["output"] ?? null)) {
            // line 15
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, Drupal\templating\TwigExtension\DefaultTwigExtension::render_template($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 15, $this->source)), "html", null, true));
            echo "
";
        } else {
            // line 17
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_top_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 17, $this->source))));
            $this->displayBlock('templating_content', $context, $blocks);
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_bottom_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 21, $this->source))));
            echo "
";
        }
        // line 23
        echo "

";
    }

    // line 17
    public function block_templating_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "      <form";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true));
        echo ">
        ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 19, $this->source), "html", null, true));
        echo "
      </form>
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  69 => 18,  65 => 17,  59 => 23,  54 => 21,  50 => 17,  44 => 15,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 */
#}
{% set output = render_template(var_template) %}
{% if output %}
  {{  render_template(var_template)}}
{% else %}
    {{spacer_top(content)|raw}}{% block templating_content %}
      <form{{ attributes }}>
        {{ children }}
      </form>
    {% endblock %}{{spacer_bottom(content)|raw}}
{% endif %}


", "modules/contrib/templating/templates/misc/form.html.twig", "/home/mizaramg/domains/miandrilala_group/modules/contrib/templating/templates/misc/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 14, "block" => 17);
        static $filters = array("escape" => 15, "raw" => 17);
        static $functions = array("render_template" => 13, "spacer_top" => 17, "spacer_bottom" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'raw'],
                ['render_template', 'spacer_top', 'spacer_bottom']
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
