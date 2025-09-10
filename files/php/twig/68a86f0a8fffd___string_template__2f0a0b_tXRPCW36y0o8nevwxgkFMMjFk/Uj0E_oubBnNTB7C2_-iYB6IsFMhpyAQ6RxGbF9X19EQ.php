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

/* __string_template__2f0a0b2713c22b99833a9f170d8f47f8805391d946a9122d98936d22be5e113a */
class __TwigTemplate_ba23daa74d60b566d6f43282c35da0fab88e12ed791f77e2e153ac10fb2f5f5c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'templating_content' => [$this, 'block_templating_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((Drupal\templating\TwigExtension\DefaultTwigExtension::path_templating() . "/templates/misc/node.html.twig"), "__string_template__2f0a0b2713c22b99833a9f170d8f47f8805391d946a9122d98936d22be5e113a", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_templating_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["i"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::node_parser_twig($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 3, $this->source));
        // line 4
        $context["e"] = Drupal\entity_parser\TwigExtension\DefaultTwigExtension::node_parser_twig($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_eleve", [], "any", false, false, true, 4), "node", [], "any", false, false, true, 4), 4, $this->source));
        // line 5
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_photo", [], "any", false, false, true, 5), "image", [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5);
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_droite", [], "any", false, false, true, 6) == 1)) {
            // line 7
            echo "    ";
            $context["droit"] = "Inscrict";
        } else {
            // line 9
            echo "    ";
            $context["droit"] = "Désinscrit";
        }
        // line 11
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
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 21, $this->source), "html", null, true));
        echo "\"
                            alt=\"\">
                    </div>
                    <h1 class=\"text-gray-900 font-bold text-xl leading-8 my-1\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom", [], "any", false, false, true, 24), 24, $this->source), "html", null, true));
        echo "</h1>
                    <h3 class=\"text-gray-600 font-lg text-semibold leading-6\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_prenom", [], "any", false, false, true, 25), 25, $this->source), "html", null, true));
        echo "</h3>
                    <p class=\"text-sm text-gray-500 hover:text-gray-600 leading-6\">

                      <ul
                        class=\"bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow  px-2 mt-3 divide-y rounded shadow-sm\">
                        <li class=\"flex items-center py-2\">
                            No. Matricule :</span>
                            <span class=\"ml-auto\">
                            ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true));
        echo "
                            </span>
                        </li>
                        <li class=\"flex items-center py-2\">
                            Classe :</span>
                            <span class=\"ml-auto\">
                            ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_classe", [], "any", false, false, true, 39), "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true));
        echo "
                            </span>
                        </li>

       
                        <li class=\"flex items-center py-3\">
                            <span>Numero :</span>
                            <span class=\"ml-auto\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_numero", [], "any", false, false, true, 46), 46, $this->source), "html", null, true));
        echo "</span>
                        </li>

                         <li class=\"flex items-center py-3\">
                            <span>Status :</span>
                            <span class=\"ml-auto\"><span
                                    class=\"bg-green-500 py-1 px-2 rounded text-white text-sm\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["droit"] ?? null), 52, $this->source), "html", null, true));
        echo "</span></span>
                        </li>
                                         <li class=\"flex items-center py-3\">
                            <span>Date d'entrée</span>
                            <span class=\"ml-auto\">";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_date_entre", [], "any", false, false, true, 56), 56, $this->source), "html", null, true));
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
                                <div class=\"px-4 py-2 font-semibold\">Année scolaire : </div>
                                <div class=\"px-4 py-2\">";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_annee_scolaire", [], "any", false, false, true, 81), 81, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Genre</div>
                                ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_genre", [], "any", false, false, true, 85) == 1)) {
            // line 86
            echo "                                   <div class=\"px-4 py-2\">Masculin</div>
                                ";
        } else {
            // line 88
            echo "                                   <div class=\"px-4 py-2\">Féminin</div>
                                ";
        }
        // line 90
        echo "                            </div>
                                  <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Date et lieu de naissance</div>
                                <div class=\"px-4 py-2\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_date_de_naissance", [], "any", false, false, true, 93), 93, $this->source), "html", null, true));
        echo " a ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_lieu_de_nai", [], "any", false, false, true, 93), 93, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom du père</div>
                                <div class=\"px-4 py-2\">";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom_pere", [], "any", false, false, true, 97), 97, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession du père</div>
                                <div class=\"px-4 py-2\">";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_profession_pere", [], "any", false, false, true, 101), 101, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Nom de la mère</div>
                                <div class=\"px-4 py-2\">";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_nom_mere", [], "any", false, false, true, 105), 105, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Profession de la mère</div>
                                <div class=\"px-4 py-2\">";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_profession_mere", [], "any", false, false, true, 109), 109, $this->source), "html", null, true));
        echo "</div>
                            </div>
              
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Contact No.</div>
                                <div class=\"px-4 py-2\">";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_phone", [], "any", false, false, true, 114), 114, $this->source), "html", null, true));
        echo "</div>
                            </div>
                            <div class=\"grid grid-cols-2 border border-t-0 border-l-0 border-r-0 border-b-1 hover:bg-slate-200\">
                                <div class=\"px-4 py-2 font-semibold\">Addresse</div>
                                <div class=\"px-4 py-2\">";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "field_adresse", [], "any", false, false, true, 118), 118, $this->source), "html", null, true));
        echo "</div>
                            </div>
                      
                        </div>
                    </div>
    <a href=\"/admin/build?destination=/admin/inscription&id=";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "nid", [], "any", false, false, true, 123), 123, $this->source), "html", null, true));
        echo "\" class=\"button text-blue-800 text-sm font-semibold rounded-lg  hover:shadow-xs p-3 my-4\"> 
    Telecharger Carnet de Correspondance </a>
                    <a href=\"#\" class=\"button text-blue-800 text-sm font-semibold rounded-lg  hover:shadow-xs p-3 my-4\"> Telecharger Bulletin </a>
                </div>
                <!-- End of about section -->

                <div class=\"my-4\"></div>

       
                <!-- End of profile tab -->
            </div>
        </div>
              <!-- Experience and education -->
     
                  <div class=\"mx-auto\">
                               <section class=\"antialiased bg-gray-100 text-gray-600 pt-4\" x-data=\"app\">
    <div class=\"flex flex-col justify-center h-full\">
        <!-- Table -->
        <div class=\"w-full  mx-auto bg-white shadow-lg rounded-sm border border-gray-200\">
            <header class=\"px-5 py-4 border-b border-gray-100\">
                <div class=\"font-semibold text-gray-800\">Notes Année scolaire ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["i"] ?? null), "field_annee_scolaire", [], "any", false, false, true, 143), 143, $this->source), "html", null, true));
        echo "</div>
            </header>

            <div class=\"overflow-x-auto p-3\">
                <table class=\"table-auto w-full\">
                    <thead class=\"text-xs font-semibold uppercase text-gray-400 bg-gray-50\">
                        <tr>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\"> Matiere</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Coeffient</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 1eme Trim</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 2eme Trim</div>
                            </th>
                               <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 3eme Trim</div>
                            </th>
                        </tr>
                    </thead>
                     ";
        // line 167
        $context["total1"] = 0;
        // line 168
        echo "                     ";
        $context["total2"] = 0;
        // line 169
        echo "                     ";
        $context["total3"] = 0;
        // line 170
        echo "                           ";
        $context["count"] = 0;
        // line 171
        echo "                     ";
        $context["total_coefficent"] = 0;
        // line 172
        echo "                     ";
        $context["bulletins"] = Drupal\mz_henitsoa\TwigExtension\DefaultTwigExtension::twig_bulletin($this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 172, $this->source));
        // line 173
        echo "                    <tbody class=\"text-sm divide-y divide-gray-100\">
                     ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bulletins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 175
            echo "                         ";
            $context["total_coefficent"] = (($context["total_coefficent"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "coef", [], "any", false, false, true, 175));
            // line 176
            echo "                         ";
            $context["total1"] = (($context["total1"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "tr1", [], "any", false, false, true, 176));
            // line 177
            echo "                         ";
            $context["total2"] = (($context["total2"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "tr2", [], "any", false, false, true, 177));
            // line 178
            echo "                         ";
            $context["total3"] = (($context["total3"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "tr3", [], "any", false, false, true, 178));
            // line 179
            echo "                         ";
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 180
            echo "                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "mat", [], "any", false, false, true, 183), 183, $this->source), "html", null, true));
            echo "</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "coef", [], "any", false, false, true, 187), 187, $this->source), "html", null, true));
            echo "</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tr1", [], "any", false, false, true, 191), 191, $this->source), "html", null, true));
            echo "
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tr2", [], "any", false, false, true, 196), 196, $this->source), "html", null, true));
            echo "
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tr3", [], "any", false, false, true, 201), 201, $this->source), "html", null, true));
            echo "
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">Note total</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">";
        // line 213
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_coefficent"] ?? null), 213, $this->source), "html", null, true));
        echo "</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
        // line 217
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total1"] ?? null), 217, $this->source), "html", null, true));
        echo "
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
        // line 222
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total2"] ?? null), 222, $this->source), "html", null, true));
        echo "
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
        // line 227
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total3"] ?? null), 227, $this->source), "html", null, true));
        echo "
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">Moyenne</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">";
        // line 238
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (($context["total_coefficent"] ?? null) / ($context["count"] ?? null)), 0, ".", " "), "html", null, true));
        echo "</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">";
        // line 241
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (($context["total1"] ?? null) / ($context["count"] ?? null)), 0, ".", " "), "html", null, true));
        echo "</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
        // line 245
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (($context["total2"] ?? null) / ($context["count"] ?? null)), 0, ".", " "), "html", null, true));
        echo "
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   ";
        // line 250
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (($context["total3"] ?? null) / ($context["count"] ?? null)), 0, ".", " "), "html", null, true));
        echo "
                                </div>
                            </td>
                        </tr>
                    
                  

                    </tbody>
                </table>
            </div>

            <!-- total amount -->
            <div class=\"flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4\">
                <div>Total general</div>
                <div class=\"text-blue-600\"> ";
        // line 264
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (((($context["total1"] ?? null) + ($context["total2"] ?? null)) + ($context["total3"] ?? null)) / 3), 0, ".", " "), "html", null, true));
        echo " </div>
                <div>Moyenne general</div>
                <div class=\"text-blue-600\"> ";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, ((((($context["total1"] ?? null) + ($context["total2"] ?? null)) + ($context["total3"] ?? null)) / 3) / ($context["count"] ?? null)), 0, ".", " "), "html", null, true));
        echo " </div>
            </div>
        </div>
    </div>
</section>
                            </div>  
    </div>
       
         
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__2f0a0b2713c22b99833a9f170d8f47f8805391d946a9122d98936d22be5e113a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 266,  457 => 264,  440 => 250,  432 => 245,  425 => 241,  419 => 238,  405 => 227,  397 => 222,  389 => 217,  382 => 213,  373 => 206,  362 => 201,  354 => 196,  346 => 191,  339 => 187,  332 => 183,  327 => 180,  324 => 179,  321 => 178,  318 => 177,  315 => 176,  312 => 175,  308 => 174,  305 => 173,  302 => 172,  299 => 171,  296 => 170,  293 => 169,  290 => 168,  288 => 167,  261 => 143,  238 => 123,  230 => 118,  223 => 114,  215 => 109,  208 => 105,  201 => 101,  194 => 97,  185 => 93,  180 => 90,  176 => 88,  172 => 86,  170 => 85,  163 => 81,  135 => 56,  128 => 52,  119 => 46,  109 => 39,  100 => 33,  89 => 25,  85 => 24,  79 => 21,  67 => 11,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}{% extends path_templating() ~ \"/templates/misc/node.html.twig\" %}
{% block templating_content %}
{% set i = (node_parser(node)) %}
{% set e = (node_parser(i.field_eleve.node)) %}
{% set image  = e.field_photo.image.url %}
{% if i.field_droite == 1 %}
    {% set droit = \"Inscrict\" %}
{% else %}
    {% set droit = \"Désinscrit\" %}
{% endif %}

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
                        <li class=\"flex items-center py-2\">
                            Classe :</span>
                            <span class=\"ml-auto\">
                            {{i.field_classe.title}}
                            </span>
                        </li>

       
                        <li class=\"flex items-center py-3\">
                            <span>Numero :</span>
                            <span class=\"ml-auto\">{{i.field_numero}}</span>
                        </li>

                         <li class=\"flex items-center py-3\">
                            <span>Status :</span>
                            <span class=\"ml-auto\"><span
                                    class=\"bg-green-500 py-1 px-2 rounded text-white text-sm\">{{droit}}</span></span>
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
                                <div class=\"px-4 py-2 font-semibold\">Année scolaire : </div>
                                <div class=\"px-4 py-2\">{{i.field_annee_scolaire}}</div>
                            </div>
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
    <a href=\"/admin/build?destination=/admin/inscription&id={{i.nid}}\" class=\"button text-blue-800 text-sm font-semibold rounded-lg  hover:shadow-xs p-3 my-4\"> 
    Telecharger Carnet de Correspondance </a>
                    <a href=\"#\" class=\"button text-blue-800 text-sm font-semibold rounded-lg  hover:shadow-xs p-3 my-4\"> Telecharger Bulletin </a>
                </div>
                <!-- End of about section -->

                <div class=\"my-4\"></div>

       
                <!-- End of profile tab -->
            </div>
        </div>
              <!-- Experience and education -->
     
                  <div class=\"mx-auto\">
                               <section class=\"antialiased bg-gray-100 text-gray-600 pt-4\" x-data=\"app\">
    <div class=\"flex flex-col justify-center h-full\">
        <!-- Table -->
        <div class=\"w-full  mx-auto bg-white shadow-lg rounded-sm border border-gray-200\">
            <header class=\"px-5 py-4 border-b border-gray-100\">
                <div class=\"font-semibold text-gray-800\">Notes Année scolaire {{i.field_annee_scolaire}}</div>
            </header>

            <div class=\"overflow-x-auto p-3\">
                <table class=\"table-auto w-full\">
                    <thead class=\"text-xs font-semibold uppercase text-gray-400 bg-gray-50\">
                        <tr>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\"> Matiere</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Coeffient</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 1eme Trim</div>
                            </th>
                            <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 2eme Trim</div>
                            </th>
                               <th class=\"p-2\">
                                <div class=\"font-semibold text-left\">Notes 3eme Trim</div>
                            </th>
                        </tr>
                    </thead>
                     {% set total1 = 0 %}
                     {% set total2 = 0 %}
                     {% set total3 = 0 %}
                           {% set count = 0 %}
                     {% set total_coefficent = 0 %}
                     {% set bulletins = bulletin(i) %}
                    <tbody class=\"text-sm divide-y divide-gray-100\">
                     {% for item in bulletins %}
                         {% set total_coefficent = total_coefficent + item.coef %}
                         {% set total1 = total1 + item.tr1 %}
                         {% set total2 = total2 + item.tr2 %}
                         {% set total3 = total3 + item.tr3 %}
                         {% set count = count + 1  %}
                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">{{item.mat}}</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">{{item.coef}}</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{item.tr1}}
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{item.tr2}}
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{item.tr3}}
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">Note total</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">{{total_coefficent}}</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{total1}}
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{total2}}
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{total3}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"p-2\">
                                <div>
                                    <div class=\"font-medium text-gray-800\">Moyenne</div>
                                </div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">{{(total_coefficent/count)|number_format(0, '.', ' ') }}</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left\">{{(total1/count)|number_format(0, '.', ' ') }}</div>
                            </td>
                            <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{(total2/count)|number_format(0, '.', ' ') }}
                                </div>
                            </td>
                                  <td class=\"p-2\">
                                <div class=\"text-left font-medium text-green-500\">
                                   {{(total3/count)|number_format(0, '.', ' ') }}
                                </div>
                            </td>
                        </tr>
                    
                  

                    </tbody>
                </table>
            </div>

            <!-- total amount -->
            <div class=\"flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4\">
                <div>Total general</div>
                <div class=\"text-blue-600\"> {{((total1 + total2 + total3)/3)|number_format(0, '.', ' ')}} </div>
                <div>Moyenne general</div>
                <div class=\"text-blue-600\"> {{((total1 + total2 + total3)/3/count)|number_format(0, '.', ' ')}} </div>
            </div>
        </div>
    </div>
</section>
                            </div>  
    </div>
       
         
</div>

{% endblock %}", "__string_template__2f0a0b2713c22b99833a9f170d8f47f8805391d946a9122d98936d22be5e113a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 6, "for" => 174);
        static $filters = array("escape" => 21, "number_format" => 238);
        static $functions = array("node_parser" => 3, "bulletin" => 172, "path_templating" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'number_format'],
                ['node_parser', 'bulletin', 'path_templating']
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
