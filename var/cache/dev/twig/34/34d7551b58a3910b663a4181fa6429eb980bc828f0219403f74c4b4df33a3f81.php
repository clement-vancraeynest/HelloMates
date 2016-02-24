<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3a2232eb0ad69a2d50c663f2f62e5dc9112d9b2e698b35bb0597bfe31b90c87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09c09112531aae98e8e606d5f6fd3d7158bc848ca2dd914730169bc94a468110 = $this->env->getExtension("native_profiler");
        $__internal_09c09112531aae98e8e606d5f6fd3d7158bc848ca2dd914730169bc94a468110->enter($__internal_09c09112531aae98e8e606d5f6fd3d7158bc848ca2dd914730169bc94a468110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c09112531aae98e8e606d5f6fd3d7158bc848ca2dd914730169bc94a468110->leave($__internal_09c09112531aae98e8e606d5f6fd3d7158bc848ca2dd914730169bc94a468110_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b8e9e8cb3bbcd26d3bb42064f90017cc24f9aebd8793e9f5747bef8e9b2a2d9 = $this->env->getExtension("native_profiler");
        $__internal_2b8e9e8cb3bbcd26d3bb42064f90017cc24f9aebd8793e9f5747bef8e9b2a2d9->enter($__internal_2b8e9e8cb3bbcd26d3bb42064f90017cc24f9aebd8793e9f5747bef8e9b2a2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2b8e9e8cb3bbcd26d3bb42064f90017cc24f9aebd8793e9f5747bef8e9b2a2d9->leave($__internal_2b8e9e8cb3bbcd26d3bb42064f90017cc24f9aebd8793e9f5747bef8e9b2a2d9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c37dba2bc647b88a7ffd614b21d3b0e448b3ccd244e91ded2a6d2de29830af35 = $this->env->getExtension("native_profiler");
        $__internal_c37dba2bc647b88a7ffd614b21d3b0e448b3ccd244e91ded2a6d2de29830af35->enter($__internal_c37dba2bc647b88a7ffd614b21d3b0e448b3ccd244e91ded2a6d2de29830af35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c37dba2bc647b88a7ffd614b21d3b0e448b3ccd244e91ded2a6d2de29830af35->leave($__internal_c37dba2bc647b88a7ffd614b21d3b0e448b3ccd244e91ded2a6d2de29830af35_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_876e6f4f5cf0fe8272c131a943508c80d81ce52aa46f99a0c2212c692b88115f = $this->env->getExtension("native_profiler");
        $__internal_876e6f4f5cf0fe8272c131a943508c80d81ce52aa46f99a0c2212c692b88115f->enter($__internal_876e6f4f5cf0fe8272c131a943508c80d81ce52aa46f99a0c2212c692b88115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_876e6f4f5cf0fe8272c131a943508c80d81ce52aa46f99a0c2212c692b88115f->leave($__internal_876e6f4f5cf0fe8272c131a943508c80d81ce52aa46f99a0c2212c692b88115f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
