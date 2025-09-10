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

/* __string_template__9bddb8b4830ac176c50c23bb9069a5681e3852cbfce675a998c2aaefe4329887 */
class __TwigTemplate_f34c045d3096f6edf7dc38281c5dd6fb1679817391db9aa1d73210a4b1b76d72 extends \Twig\Template
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
        // line 2
        $context["e"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::node_parser_twig($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 2, $this->source));
        // line 3
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_photo", [], "any", false, false, true, 3), "image", [], "any", false, false, true, 3), "url", [], "any", false, false, true, 3);
        // line 4
        echo "

<div class=\"bg-gray-100\">
    <div class=\"container mx-auto my-5 p-5\">
        <div class=\"md:flex no-wrap md:-mx-2 \">
            <!-- Left Side -->
            <div class=\"w-full md:w-3/12 md:mx-2\">
                <!-- Profile Card -->
                <div class=\"bg-white p-3 border-t-4 border-green-400\">
                    <div class=\"image overflow-hidden\">
                        <img class=\"h-auto w-full mx-auto\"
                            src=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 15, $this->source), "html", null, true));
        echo "\"
                            alt=\"\">
                    </div>
                    <h1 class=\"text-gray-900 font-bold text-xl leading-8 my-1\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom", [], "any", false, false, true, 18), 18, $this->source), "html", null, true));
        echo "</h1>
                    <h3 class=\"text-gray-600 font-lg text-semibold leading-6\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_prenom", [], "any", false, false, true, 19), 19, $this->source), "html", null, true));
        echo "</h3>
                    <p class=\"text-sm text-gray-500 hover:text-gray-600 leading-6\">

                      <ul
                        class=\"bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow  px-2 mt-3 divide-y rounded shadow-sm\">
                        <li class=\"flex items-center py-2\">
                            No. Matricule :</span>
                            <span class=\"ml-auto\">
                            ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
        echo "
                            </span>
                        </li>

                         <li class=\"flex items-center py-3\">
                            <span>Date d'entrée</span>
                            <span class=\"ml-auto\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_date_entre", [], "any", false, false, true, 33), 33, $this->source), "html", null, true));
        echo "</span>
                        </li>
                        
                    </ul>
                </div>
                <!-- End of profile card -->
            </div>
            <!-- Right Side -->
            <div class=\"w-full md:w-9/12 mx-2 h-100\">
                <!-- Profile tab -->
                <div class=\"bg-white p-3 shadow-sm rounded-sm h-full\">
                    <div class=\"flex items-center space-x-2 font-semibold text-gray-900 leading-8\">
                        <span clas=\"text-green-500\">
                            <svg class=\"h-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\"
                                stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                    d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                            </svg>
                        </span>
                        <span class=\"tracking-wide\">Information general</span>
                    </div>
                    <div class=\"text-gray-700\">
                        <div class=\"grid md:grid-cols-1 text-sm\">
     
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Genre</div>
                                ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_genre", [], "any", false, false, true, 59) == 1)) {
            // line 60
            echo "                                   <div class=\"px-4 py-2\">Masculin</div>
                                ";
        } else {
            // line 62
            echo "                                   <div class=\"px-4 py-2\">Féminin</div>
                                ";
        }
        // line 64
        echo "                            </div>
                                  <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Date et lieu de naissance</div>
                                <div class=\"px-4 py-2\">";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_date_de_naissance", [], "any", false, false, true, 67), 67, $this->source), "html", null, true));
        echo " a ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_lieu_de_nai", [], "any", false, false, true, 67), 67, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom du père</div>
                                <div class=\"px-4 py-2\">";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom_pere", [], "any", false, false, true, 71), 71, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession du père</div>
                                <div class=\"px-4 py-2\">";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_profession_pere", [], "any", false, false, true, 75), 75, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom de la mère</div>
                                <div class=\"px-4 py-2\">";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom_mere", [], "any", false, false, true, 79), 79, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession de la mère</div>
                                <div class=\"px-4 py-2\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_profession_mere", [], "any", false, false, true, 83), 83, $this->source), "html", null, true));
        echo "</div>
                            </div>
              
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Contact No.</div>
                                <div class=\"px-4 py-2\">";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_phone", [], "any", false, false, true, 88), 88, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Addresse</div>
                                <div class=\"px-4 py-2\">";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_adresse", [], "any", false, false, true, 92), 92, $this->source), "html", null, true));
        echo "</div>
                            </div>
                      
                        </div>
                    </div>
 
                </div>
                <!-- End of about section -->

                <div class=\"my-4\"></div>

       
                <!-- End of profile tab -->
            </div>
        </div>
              <!-- Experience and education -->
     
               
    </div>
       
         
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__9bddb8b4830ac176c50c23bb9069a5681e3852cbfce675a998c2aaefe4329887";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 92,  168 => 88,  160 => 83,  153 => 79,  146 => 75,  139 => 71,  130 => 67,  125 => 64,  121 => 62,  117 => 60,  115 => 59,  86 => 33,  77 => 27,  66 => 19,  62 => 18,  56 => 15,  43 => 4,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}
{% set e = (node_parser(node)) %}
{% set image  = e.field_photo.image.url %}


<div class=\"bg-gray-100\">
    <div class=\"container mx-auto my-5 p-5\">
        <div class=\"md:flex no-wrap md:-mx-2 \">
            <!-- Left Side -->
            <div class=\"w-full md:w-3/12 md:mx-2\">
                <!-- Profile Card -->
                <div class=\"bg-white p-3 border-t-4 border-green-400\">
                    <div class=\"image overflow-hidden\">
                        <img class=\"h-auto w-full mx-auto\"
                            src=\"{{image}}\"
                            alt=\"\">
                    </div>
                    <h1 class=\"text-gray-900 font-bold text-xl leading-8 my-1\">{{e.field_nom}}</h1>
                    <h3 class=\"text-gray-600 font-lg text-semibold leading-6\">{{e.field_prenom}}</h3>
                    <p class=\"text-sm text-gray-500 hover:text-gray-600 leading-6\">

                      <ul
                        class=\"bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow  px-2 mt-3 divide-y rounded shadow-sm\">
                        <li class=\"flex items-center py-2\">
                            No. Matricule :</span>
                            <span class=\"ml-auto\">
                            {{e.title}}
                            </span>
                        </li>

                         <li class=\"flex items-center py-3\">
                            <span>Date d'entrée</span>
                            <span class=\"ml-auto\">{{e.field_date_entre}}</span>
                        </li>
                        
                    </ul>
                </div>
                <!-- End of profile card -->
            </div>
            <!-- Right Side -->
            <div class=\"w-full md:w-9/12 mx-2 h-100\">
                <!-- Profile tab -->
                <div class=\"bg-white p-3 shadow-sm rounded-sm h-full\">
                    <div class=\"flex items-center space-x-2 font-semibold text-gray-900 leading-8\">
                        <span clas=\"text-green-500\">
                            <svg class=\"h-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\"
                                stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                                    d=\"M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z\" />
                            </svg>
                        </span>
                        <span class=\"tracking-wide\">Information general</span>
                    </div>
                    <div class=\"text-gray-700\">
                        <div class=\"grid md:grid-cols-1 text-sm\">
     
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Genre</div>
                                {% if  e.field_genre == 1%}
                                   <div class=\"px-4 py-2\">Masculin</div>
                                {% else %}
                                   <div class=\"px-4 py-2\">Féminin</div>
                                {% endif %}
                            </div>
                                  <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Date et lieu de naissance</div>
                                <div class=\"px-4 py-2\">{{e.field_date_de_naissance}} a {{e.field_lieu_de_nai}}</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom du père</div>
                                <div class=\"px-4 py-2\">{{e.field_nom_pere}}</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession du père</div>
                                <div class=\"px-4 py-2\">{{e.field_profession_pere}}</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom de la mère</div>
                                <div class=\"px-4 py-2\">{{e.field_nom_mere}}</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession de la mère</div>
                                <div class=\"px-4 py-2\">{{e.field_profession_mere}}</div>
                            </div>
              
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Contact No.</div>
                                <div class=\"px-4 py-2\">{{e.field_phone}}</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Addresse</div>
                                <div class=\"px-4 py-2\">{{e.field_adresse}}</div>
                            </div>
                      
                        </div>
                    </div>
 
                </div>
                <!-- End of about section -->

                <div class=\"my-4\"></div>

       
                <!-- End of profile tab -->
            </div>
        </div>
              <!-- Experience and education -->
     
               
    </div>
       
         
</div>

", "__string_template__9bddb8b4830ac176c50c23bb9069a5681e3852cbfce675a998c2aaefe4329887", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 59);
        static $filters = array("escape" => 15);
        static $functions = array("node_parser" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['node_parser']
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
