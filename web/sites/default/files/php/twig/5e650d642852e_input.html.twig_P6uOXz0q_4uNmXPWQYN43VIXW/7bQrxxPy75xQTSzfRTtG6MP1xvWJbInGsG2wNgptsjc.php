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

/* input.html.twig */
class __TwigTemplate_1c171009cfd864af0bd7970dae510a92afe70f2348643ec4b6d394913a924514 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 22, "if" => 23, "block" => 32];
        $filters = ["escape" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'block'],
                ['escape'],
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
        // line 22
        ob_start();
        // line 23
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 24
            echo "
    <div class=\"input-group\">
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        if (($context["prefix"] ?? null)) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        $this->displayBlock('input', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        if (($context["suffix"] ?? null)) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (($context["input_group"] ?? null)) {
            // line 41
            echo "    </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_input($context, array $blocks = [])
    {
        // line 33
        echo "    <input";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  112 => 32,  105 => 44,  102 => 43,  98 => 41,  96 => 40,  93 => 39,  87 => 37,  85 => 36,  82 => 35,  80 => 32,  77 => 31,  71 => 29,  69 => 28,  66 => 27,  61 => 24,  58 => 23,  56 => 22,);
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
 * Default theme implementation for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% spaceless %}
  {% if input_group %}

    <div class=\"input-group\">
  {% endif %}

  {% if prefix %}
    {{ prefix }}
  {% endif %}

  {% block input %}
    <input{{ attributes }} />
  {% endblock %}

  {% if suffix %}
    {{ suffix }}
  {% endif %}

  {% if input_group %}
    </div>
  {% endif %}

  {{ children }}
{% endspaceless %}
", "input.html.twig", "themes/contrib/bootstrap/templates/input/input.html.twig");
    }
}
