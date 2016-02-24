<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c985cbcd0e5251b406472189bff10909199116731e7a01521bac14de9ac4f51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_283db6949d3f211968150597ff598a4d16858d10a42cf0582501561569851043 = $this->env->getExtension("native_profiler");
        $__internal_283db6949d3f211968150597ff598a4d16858d10a42cf0582501561569851043->enter($__internal_283db6949d3f211968150597ff598a4d16858d10a42cf0582501561569851043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283db6949d3f211968150597ff598a4d16858d10a42cf0582501561569851043->leave($__internal_283db6949d3f211968150597ff598a4d16858d10a42cf0582501561569851043_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bec1ef16feac969365f11bbdf690db067c8f083a744386842f242cd291012197 = $this->env->getExtension("native_profiler");
        $__internal_bec1ef16feac969365f11bbdf690db067c8f083a744386842f242cd291012197->enter($__internal_bec1ef16feac969365f11bbdf690db067c8f083a744386842f242cd291012197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bec1ef16feac969365f11bbdf690db067c8f083a744386842f242cd291012197->leave($__internal_bec1ef16feac969365f11bbdf690db067c8f083a744386842f242cd291012197_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8027e3b91462b04deb8b8e52b04a2d57c1f0ce081581cbaaf514c2a243644a58 = $this->env->getExtension("native_profiler");
        $__internal_8027e3b91462b04deb8b8e52b04a2d57c1f0ce081581cbaaf514c2a243644a58->enter($__internal_8027e3b91462b04deb8b8e52b04a2d57c1f0ce081581cbaaf514c2a243644a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8027e3b91462b04deb8b8e52b04a2d57c1f0ce081581cbaaf514c2a243644a58->leave($__internal_8027e3b91462b04deb8b8e52b04a2d57c1f0ce081581cbaaf514c2a243644a58_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_436009c4d9487ccb9b2867adec7dc5df4cbb1f3676723877eeed018d4750188c = $this->env->getExtension("native_profiler");
        $__internal_436009c4d9487ccb9b2867adec7dc5df4cbb1f3676723877eeed018d4750188c->enter($__internal_436009c4d9487ccb9b2867adec7dc5df4cbb1f3676723877eeed018d4750188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_436009c4d9487ccb9b2867adec7dc5df4cbb1f3676723877eeed018d4750188c->leave($__internal_436009c4d9487ccb9b2867adec7dc5df4cbb1f3676723877eeed018d4750188c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
