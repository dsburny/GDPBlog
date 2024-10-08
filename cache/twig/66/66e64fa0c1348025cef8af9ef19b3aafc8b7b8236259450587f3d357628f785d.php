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

/* tools.html.twig */
class __TwigTemplate_ecaaaf4ecc9b553cd6871c4277e11e4b996344b52529eec3e306b982b8cd5c64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tools.html.twig"));

        // line 3
        $context["tools_slug"] = $this->getAttribute(($context["uri"] ?? null), "basename", []);
        // line 4
        if ((($context["tools_slug"] ?? null) == "tools")) {
            $context["tools_slug"] = "backups";
        }
        // line 5
        $context["title"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.TOOLS") . ": ") . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))));
        // line 6
        $context["tools"] = $this->getAttribute(($context["admin"] ?? null), "tools", [], "method");
        // line 8
        ob_start();
        // line 9
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . "-titlebar.html.twig"), "tools.html.twig", 9);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        $context["titlebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tools.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 12
    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        // line 13
        echo "    ";
        if (($context["titlebar"] ?? null)) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, ($context["titlebar"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 16
            echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    </div>
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.TOOLS"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))), "html", null, true);
            echo "</h1>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 23
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, ($context["tools"] ?? null)) > 1)) {
            // line 25
            echo "    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
            foreach ($context['_seq'] as $context["slug"] => $context["tool"]) {
                // line 28
                echo "            ";
                $context["perms"] = twig_first($this->env, $context["tool"]);
                // line 29
                echo "            ";
                $context["name"] = twig_last($this->env, $context["tool"]);
                // line 30
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize(($context["perms"] ?? null))) {
                    // line 31
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/tools/" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $context["slug"]))), "html", null, true);
                    echo "\" ";
                    if ((($context["tools_slug"] ?? null) == $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $context["slug"]))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["name"] ?? null))), "html", null, true);
                    echo "
            </a>
            ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['tool'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    </div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        $context["perms"] = twig_first($this->env, $this->getAttribute(($context["tools"] ?? null), ($context["tools_slug"] ?? null), [], "array"));
        // line 43
        echo "
    ";
        // line 44
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize(($context["perms"] ?? null))) {
            // line 45
            echo "        ";
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
            try {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                 $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . ".html.twig"), "tools.html.twig", 45);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
            }
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "        <h1>Unauthorized</h1>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 47,  190 => 46,  179 => 45,  177 => 44,  174 => 43,  171 => 42,  165 => 41,  155 => 36,  149 => 35,  143 => 32,  134 => 31,  131 => 30,  128 => 29,  125 => 28,  121 => 27,  117 => 25,  114 => 24,  108 => 23,  96 => 19,  89 => 17,  86 => 16,  80 => 14,  77 => 13,  71 => 12,  63 => 1,  52 => 9,  50 => 8,  48 => 6,  46 => 5,  42 => 4,  40 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set tools_slug = uri.basename %}
{% if tools_slug == 'tools' %}{% set tools_slug = 'backups' %}{% endif %}
{% set title = \"PLUGIN_ADMIN.TOOLS\"|t ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|t %}
{% set tools = admin.tools() %}

{% set titlebar -%}
    {% include 'partials/tools-' ~ tools_slug ~ '-titlebar.html.twig' ignore missing %}
{%- endset %}

{% block titlebar %}
    {% if titlebar %}
        {{ titlebar }}
    {% else %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
    </div>
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> {{ \"PLUGIN_ADMIN.TOOLS\"|t }} - {{ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|t }}</h1>
    {% endif %}
{% endblock %}

{% block content_top %}
    {% if tools|length > 1 %}
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        {% for slug,tool in tools %}
            {% set perms = tool|first %}
            {% set name = tool|last %}
            {% if authorize(perms) %}
            <a href=\"{{ admin_route('/tools/' ~ slug|hyphenize) }}\" {% if tools_slug == slug|hyphenize %}class=\"active\"{% endif %}>
                {{ name|t|capitalize }}
            </a>
            {% endif %}
        {% endfor %}
        </div>
    </div>
    {% endif %}
{% endblock %}

{% block content %}
    {% set perms = tools[tools_slug]|first %}

    {% if authorize(perms) %}
        {% include 'partials/tools-' ~ tools_slug ~ '.html.twig' ignore missing %}
    {% else %}
        <h1>Unauthorized</h1>
    {% endif %}
{% endblock %}

", "tools.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\tools.html.twig");
    }
}
