<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mina/templates/page front/page--front.html.twig */
class __TwigTemplate_69e47e8e05c74ed31de7cfa4ffb297cb72f9f8f363ad9a65d0cb336c42294187 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'menu' => [$this, 'block_menu'],
            'background_image' => [$this, 'block_background_image'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
            'second_footer1' => [$this, 'block_second_footer1'],
            'second_footer2' => [$this, 'block_second_footer2'],
            'footer3' => [$this, 'block_footer3'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 62, "escape" => 65, "t" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 171
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 177
        echo "
";
        // line 179
        echo "<div class=\"row\" id=\"footer2\">
  <div class=\"col-md-6\">
  ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "second_footer1", [])) {
            // line 182
            echo "    ";
            $this->displayBlock('second_footer1', $context, $blocks);
            // line 185
            echo "  ";
        }
        // line 186
        echo "  </div>
  ";
        // line 190
        echo "  <div class=\"col-md-6\">
  ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "second_footer2", [])) {
            // line 192
            echo "    ";
            $this->displayBlock('second_footer2', $context, $blocks);
            // line 195
            echo "  ";
        }
        // line 196
        echo "  </div>
</div>


";
        // line 201
        echo "
<div class=\"row \" id=\"footer3\">
     ";
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "footer3", [])) {
            // line 204
            echo "        ";
            $this->displayBlock('footer3', $context, $blocks);
            // line 207
            echo "     ";
        }
        // line 208
        echo "     ";
        // line 209
        echo "     ";
        // line 211
        echo "       ";
        // line 212
        echo "          
        ";
        // line 214
        echo "</div>";
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        // line 97
        echo "  <div role=\"main\" class=\"main-container  js-quickedit-main-content\">
    <div class=\"row row-no-gutters\">

      ";
        // line 101
        echo "      <div class=\"row row-no-gutters header-shadow\">
        ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 103
            echo "          <div class=\"col-md-4 col-sm-2  col-xs-8\" >
            ";
            // line 104
            $this->displayBlock('header', $context, $blocks);
            // line 107
            echo "          </div>
            <div class=\"col-md-0 col-sm-10 col-xs-4 btn-display\" >
              <a ><i class=\"fas fa-ellipsis-h fa-3x\"></i></a>
              
           </div>
        ";
        }
        // line 113
        echo "      
        ";
        // line 115
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 116
            echo "           
            <div class=\"col-md-8  col-sm-10 col-xs-12 \" id=\"menu-hidden\" >
              ";
            // line 118
            $this->displayBlock('menu', $context, $blocks);
            // line 121
            echo "            </div>
        ";
        }
        // line 123
        echo "      </div>
      ";
        // line 125
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "background_image", [])) {
            // line 126
            echo "          ";
            $this->displayBlock('background_image', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "      ";
        echo " 
      ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 132
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        // line 141
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 142
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 143
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 144
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 145
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 148
        echo "       <div class=\"container\">
      <section";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 151
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 155
        echo "      </section>
      
      ";
        // line 158
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 159
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 164
            echo "      ";
        }
        // line 165
        echo "      </div>
    </div>
  </div>
";
    }

    // line 104
    public function block_header($context, array $blocks = [])
    {
        echo "     
                ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "                  
            ";
    }

    // line 118
    public function block_menu($context, array $blocks = [])
    {
        // line 119
        echo "                ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
        echo "
              ";
    }

    // line 126
    public function block_background_image($context, array $blocks = [])
    {
        // line 127
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "background_image", [])), "html", null, true);
        echo "
          ";
    }

    // line 132
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 133
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 134
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        // line 152
        echo "          <a id=\"main-content\"></a>
          ";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 159
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 160
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 171
    public function block_footer($context, array $blocks = [])
    {
        // line 172
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 173
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    // line 182
    public function block_second_footer1($context, array $blocks = [])
    {
        // line 183
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "second_footer1", [])), "html", null, true);
        echo "
    ";
    }

    // line 192
    public function block_second_footer2($context, array $blocks = [])
    {
        // line 193
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "second_footer2", [])), "html", null, true);
        echo "
    ";
    }

    // line 204
    public function block_footer3($context, array $blocks = [])
    {
        // line 205
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer3", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mina/templates/page front/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 205,  432 => 204,  425 => 193,  422 => 192,  415 => 183,  412 => 182,  405 => 173,  400 => 172,  397 => 171,  390 => 161,  387 => 160,  384 => 159,  378 => 153,  375 => 152,  372 => 151,  365 => 134,  362 => 133,  359 => 132,  352 => 127,  349 => 126,  342 => 119,  339 => 118,  333 => 105,  328 => 104,  321 => 165,  318 => 164,  315 => 159,  312 => 158,  308 => 155,  305 => 151,  301 => 149,  298 => 148,  296 => 145,  295 => 144,  294 => 143,  293 => 142,  292 => 141,  290 => 140,  287 => 138,  284 => 137,  281 => 132,  279 => 131,  275 => 130,  272 => 129,  269 => 126,  266 => 125,  263 => 123,  259 => 121,  257 => 118,  253 => 116,  250 => 115,  247 => 113,  239 => 107,  237 => 104,  234 => 103,  232 => 102,  229 => 101,  224 => 97,  221 => 96,  216 => 91,  212 => 89,  209 => 88,  203 => 85,  200 => 84,  197 => 83,  193 => 80,  184 => 74,  181 => 73,  178 => 72,  174 => 70,  171 => 69,  165 => 67,  163 => 66,  158 => 65,  156 => 62,  155 => 61,  154 => 59,  152 => 58,  149 => 57,  145 => 214,  142 => 212,  140 => 211,  138 => 209,  136 => 208,  133 => 207,  130 => 204,  128 => 203,  124 => 201,  118 => 196,  115 => 195,  112 => 192,  110 => 191,  107 => 190,  104 => 186,  101 => 185,  98 => 182,  96 => 181,  92 => 179,  89 => 177,  85 => 171,  83 => 170,  80 => 169,  78 => 96,  75 => 94,  71 => 57,  69 => 56,  67 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container  js-quickedit-main-content\">
    <div class=\"row row-no-gutters\">

      {# Header #}
      <div class=\"row row-no-gutters header-shadow\">
        {% if page.header %}
          <div class=\"col-md-4 col-sm-2  col-xs-8\" >
            {% block header %}     
                {{ page.header }}                  
            {% endblock %}
          </div>
            <div class=\"col-md-0 col-sm-10 col-xs-4 btn-display\" >
              <a ><i class=\"fas fa-ellipsis-h fa-3x\"></i></a>
              
           </div>
        {% endif %}
      
        {# Menu #}
        {% if page.menu %}
           
            <div class=\"col-md-8  col-sm-10 col-xs-12 \" id=\"menu-hidden\" >
              {% block menu %}
                {{ page.menu }}
              {% endblock %}
            </div>
        {% endif %}
      </div>
      {# Background Image #}
      {% if page.background_image %}
          {% block background_image %}
              {{ page.background_image }}
          {% endblock %}
      {% endif %}
      {# Sidebar First #} 
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
       <div class=\"container\">
      <section{{ content_attributes.addClass(content_classes) }}>
        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>
      
      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
      </div>
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}

{# Footer2 #}
<div class=\"row\" id=\"footer2\">
  <div class=\"col-md-6\">
  {% if page.second_footer1 %}
    {% block second_footer1 %}
      {{ page.second_footer1 }}
    {% endblock %}
  {% endif %}
  </div>
  {# <div class=\"col-md-1 vl\">
    
  </div> #}
  <div class=\"col-md-6\">
  {% if page.second_footer2 %}
    {% block second_footer2 %}
      {{ page.second_footer2 }}
    {% endblock %}
  {% endif %}
  </div>
</div>


{# footer 3 #}

<div class=\"row \" id=\"footer3\">
     {% if page.footer3 %}
        {% block footer3 %}
          {{ page.footer3 }}
        {% endblock %}
     {% endif %}
     {# onclick=\"openForm()\" #}
     {# <button id=\"open-button\" >Need Help!</button>
      <button id=\"close-button\" >close</button> #}
       {# <div class=\"chat-popup\" id=\"myForm\"> #}
          
        {# </div> #}
</div>", "themes/custom/mina/templates/page front/page--front.html.twig", "/var/www/html/project10/web/themes/custom/mina/templates/page front/page--front.html.twig");
    }
}
