<?php

/* base.html.twig */
class __TwigTemplate_9c12633b12eacbac9fcddc237d2525c44e7b373ff46d4cb3fa27e7aa5e334f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3323c6f2abda5868b83e23513405827c236f1d09eacb64ed0fa26ec00cc3b6 = $this->env->getExtension("native_profiler");
        $__internal_cb3323c6f2abda5868b83e23513405827c236f1d09eacb64ed0fa26ec00cc3b6->enter($__internal_cb3323c6f2abda5868b83e23513405827c236f1d09eacb64ed0fa26ec00cc3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cb3323c6f2abda5868b83e23513405827c236f1d09eacb64ed0fa26ec00cc3b6->leave($__internal_cb3323c6f2abda5868b83e23513405827c236f1d09eacb64ed0fa26ec00cc3b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_56ce562bcff235f454ef6ea389aa7ca94b55f74385dd17e76e95c111b368fb5e = $this->env->getExtension("native_profiler");
        $__internal_56ce562bcff235f454ef6ea389aa7ca94b55f74385dd17e76e95c111b368fb5e->enter($__internal_56ce562bcff235f454ef6ea389aa7ca94b55f74385dd17e76e95c111b368fb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_56ce562bcff235f454ef6ea389aa7ca94b55f74385dd17e76e95c111b368fb5e->leave($__internal_56ce562bcff235f454ef6ea389aa7ca94b55f74385dd17e76e95c111b368fb5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4aad65dbbe67372becf55d419d04d0a714b43af3229aeefae8f55536c91663dc = $this->env->getExtension("native_profiler");
        $__internal_4aad65dbbe67372becf55d419d04d0a714b43af3229aeefae8f55536c91663dc->enter($__internal_4aad65dbbe67372becf55d419d04d0a714b43af3229aeefae8f55536c91663dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4aad65dbbe67372becf55d419d04d0a714b43af3229aeefae8f55536c91663dc->leave($__internal_4aad65dbbe67372becf55d419d04d0a714b43af3229aeefae8f55536c91663dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c00bc383cc176c78c37e72aa4dbfe1395ed0668c73dab03fbe4c07228ef107 = $this->env->getExtension("native_profiler");
        $__internal_64c00bc383cc176c78c37e72aa4dbfe1395ed0668c73dab03fbe4c07228ef107->enter($__internal_64c00bc383cc176c78c37e72aa4dbfe1395ed0668c73dab03fbe4c07228ef107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64c00bc383cc176c78c37e72aa4dbfe1395ed0668c73dab03fbe4c07228ef107->leave($__internal_64c00bc383cc176c78c37e72aa4dbfe1395ed0668c73dab03fbe4c07228ef107_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2676bd2fd8e02d846702dbcdcc43fcc99218af143b9381a138b4c0fc045a336c = $this->env->getExtension("native_profiler");
        $__internal_2676bd2fd8e02d846702dbcdcc43fcc99218af143b9381a138b4c0fc045a336c->enter($__internal_2676bd2fd8e02d846702dbcdcc43fcc99218af143b9381a138b4c0fc045a336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2676bd2fd8e02d846702dbcdcc43fcc99218af143b9381a138b4c0fc045a336c->leave($__internal_2676bd2fd8e02d846702dbcdcc43fcc99218af143b9381a138b4c0fc045a336c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
