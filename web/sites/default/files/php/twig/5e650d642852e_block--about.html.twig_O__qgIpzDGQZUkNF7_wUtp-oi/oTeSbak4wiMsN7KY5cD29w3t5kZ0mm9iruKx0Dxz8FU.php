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

/* themes/custom/mina/templates/block--about.html.twig */
class __TwigTemplate_72fce7dd53279a46d36739de7cabfc939fc1fce81f38ed3c01e1cc9dbc60ff5b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 37, "if" => 42, "block" => 53];
        $filters = ["clean_id" => 37, "escape" => 40, "without" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
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
        // line 36
        echo "
  ";
        // line 37
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 38
        echo "    <div class=\"row\">
     <div class=\"col-md-3\" >
      <nav role=\"navigation\" aria-labelledby=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-labelledby"), "html", null, true);
        echo ">
        ";
        // line 42
        echo "        ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 43
            echo "          ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 44
            echo "        ";
        }
        // line 45
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        <div style=\"display:flex; justify-content:space-between;\">
           <h2";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "label", [])), "html", null, true);
        echo "</h2>
           <p> <a class=\"btn-about\" ><i class=\"fas fa-ellipsis-h fa-1x  \"></i></a></p>
        </div>
        ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

        ";
        // line 53
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "      </nav>
    </div>
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        // line 54
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mina/templates/block--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  108 => 53,  102 => 56,  99 => 53,  94 => 50,  86 => 47,  80 => 45,  77 => 44,  74 => 43,  71 => 42,  65 => 40,  61 => 38,  59 => 37,  56 => 36,);
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
 * Default theme implementation for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 *
 * @ingroup themeable
 */
#}

  {% set heading_id = attributes.id ~ '-menu'|clean_id %}
    <div class=\"row\">
     <div class=\"col-md-3\" >
      <nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby') }}>
        {# Label. If not displayed, we still provide it for screen readers. #}
        {% if not configuration.label_display %}
          {% set title_attributes = title_attributes.addClass('visually-hidden') %}
        {% endif %}
        {{ title_prefix }}
        <div style=\"display:flex; justify-content:space-between;\">
           <h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>
           <p> <a class=\"btn-about\" ><i class=\"fas fa-ellipsis-h fa-1x  \"></i></a></p>
        </div>
        {{ title_suffix }}

        {# Menu. #}
        {% block content %}
          {{ content }}
        {% endblock %}
      </nav>
    </div>
", "themes/custom/mina/templates/block--about.html.twig", "/var/www/html/project10/web/themes/custom/mina/templates/block--about.html.twig");
    }
}
