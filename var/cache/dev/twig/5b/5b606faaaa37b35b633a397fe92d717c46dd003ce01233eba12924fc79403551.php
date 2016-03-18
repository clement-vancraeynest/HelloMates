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
        $__internal_3e2277e866228ffc89af6be4aeed14bd695e701baf3bf191f5a6ca03a5db48de = $this->env->getExtension("native_profiler");
        $__internal_3e2277e866228ffc89af6be4aeed14bd695e701baf3bf191f5a6ca03a5db48de->enter($__internal_3e2277e866228ffc89af6be4aeed14bd695e701baf3bf191f5a6ca03a5db48de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2277e866228ffc89af6be4aeed14bd695e701baf3bf191f5a6ca03a5db48de->leave($__internal_3e2277e866228ffc89af6be4aeed14bd695e701baf3bf191f5a6ca03a5db48de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d275a9847f92be40ac782ffa096ffc16d1e7f529d2f38d029ae30b89332b962 = $this->env->getExtension("native_profiler");
        $__internal_9d275a9847f92be40ac782ffa096ffc16d1e7f529d2f38d029ae30b89332b962->enter($__internal_9d275a9847f92be40ac782ffa096ffc16d1e7f529d2f38d029ae30b89332b962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d275a9847f92be40ac782ffa096ffc16d1e7f529d2f38d029ae30b89332b962->leave($__internal_9d275a9847f92be40ac782ffa096ffc16d1e7f529d2f38d029ae30b89332b962_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_039393f3b63dece68073f8c7decf17ee583a83d7b3bb98b079be8770c48e37b4 = $this->env->getExtension("native_profiler");
        $__internal_039393f3b63dece68073f8c7decf17ee583a83d7b3bb98b079be8770c48e37b4->enter($__internal_039393f3b63dece68073f8c7decf17ee583a83d7b3bb98b079be8770c48e37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_039393f3b63dece68073f8c7decf17ee583a83d7b3bb98b079be8770c48e37b4->leave($__internal_039393f3b63dece68073f8c7decf17ee583a83d7b3bb98b079be8770c48e37b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_887de7edf48a0ba50325c92d7dee1695a9b9f672fea2fb099e8cc0e116c8b6f4 = $this->env->getExtension("native_profiler");
        $__internal_887de7edf48a0ba50325c92d7dee1695a9b9f672fea2fb099e8cc0e116c8b6f4->enter($__internal_887de7edf48a0ba50325c92d7dee1695a9b9f672fea2fb099e8cc0e116c8b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_887de7edf48a0ba50325c92d7dee1695a9b9f672fea2fb099e8cc0e116c8b6f4->leave($__internal_887de7edf48a0ba50325c92d7dee1695a9b9f672fea2fb099e8cc0e116c8b6f4_prof);

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
