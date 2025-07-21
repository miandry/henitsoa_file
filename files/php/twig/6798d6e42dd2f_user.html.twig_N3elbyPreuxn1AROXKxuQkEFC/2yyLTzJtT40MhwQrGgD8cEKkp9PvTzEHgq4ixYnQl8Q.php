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

/* modules/contrib/templating/templates/misc/user.html.twig */
class __TwigTemplate_ffe77e6a43d9ae9964ae4a8f6e4ece8c64c57a7dc20d89231a1d2bf5373a3521 extends \Twig\Template
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
        // line 19
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "profile"], "method", false, false, true, 19), 19, $this->source), "html", null, true));
        echo ">
  ";
        // line 20
        if (($context["content"] ?? null)) {
            // line 21
            echo "    ";
            $context["output"] = Drupal\templating\TwigExtension\DefaultTwigExtension::render_inline_template_twig($this->sandbox->ensureToStringAllowed(($context["var_template"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["user"] ?? null), 21, $this->source));
            // line 22
            echo "    ";
            if (($context["output"] ?? null)) {
                // line 23
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 23, $this->source), "html", null, true));
                echo "
    ";
            } else {
                // line 25
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_top_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source))));
                echo " ";
                $this->displayBlock('templating_content', $context, $blocks);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Drupal\templating\TwigExtension\DefaultTwigExtension::spacer_bottom_twig($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source))));
                echo "
    ";
            }
            // line 27
            echo "  ";
        }
        // line 28
        echo "</article>
";
    }

    // line 25
    public function block_templating_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source), "html", null, true));
    }

    public function getTemplateName()
    {
        return "modules/contrib/templating/templates/misc/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  72 => 28,  69 => 27,  59 => 25,  53 => 23,  50 => 22,  47 => 21,  45 => 20,  40 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
<article{{ attributes.addClass('profile') }}>
  {% if content %}
    {% set output = render_inline_template(var_template,user) %}
    {% if output %}
      {{output}}
    {% else %}
        {{spacer_top(content)|raw}} {% block templating_content %}    {{- content -}}  {% endblock %} {{spacer_bottom(content)|raw}}
    {% endif %}
  {% endif %}
</article>
", "modules/contrib/templating/templates/misc/user.html.twig", "/home/mizaramg/domains/miandrilala_group/modules/contrib/templating/templates/misc/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21, "block" => 25);
        static $filters = array("escape" => 19, "raw" => 25);
        static $functions = array("render_inline_template" => 21, "spacer_top" => 25, "spacer_bottom" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['escape', 'raw'],
                ['render_inline_template', 'spacer_top', 'spacer_bottom']
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
