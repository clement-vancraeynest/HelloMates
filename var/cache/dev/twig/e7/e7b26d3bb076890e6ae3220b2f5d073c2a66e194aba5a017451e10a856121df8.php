<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ac5e28bffb93ab8c41892d3e2b1782b7f259c1a9da5d54d2a5d2d9754a43a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e285afcca90b757b2fb4b2d787d83c8d8474865b812f485e800e98291647067 = $this->env->getExtension("native_profiler");
        $__internal_1e285afcca90b757b2fb4b2d787d83c8d8474865b812f485e800e98291647067->enter($__internal_1e285afcca90b757b2fb4b2d787d83c8d8474865b812f485e800e98291647067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e285afcca90b757b2fb4b2d787d83c8d8474865b812f485e800e98291647067->leave($__internal_1e285afcca90b757b2fb4b2d787d83c8d8474865b812f485e800e98291647067_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11d46bdbeb480d2ada0b5ae4eedb2487d1b1842b395f7f24541cec56bce62d76 = $this->env->getExtension("native_profiler");
        $__internal_11d46bdbeb480d2ada0b5ae4eedb2487d1b1842b395f7f24541cec56bce62d76->enter($__internal_11d46bdbeb480d2ada0b5ae4eedb2487d1b1842b395f7f24541cec56bce62d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11d46bdbeb480d2ada0b5ae4eedb2487d1b1842b395f7f24541cec56bce62d76->leave($__internal_11d46bdbeb480d2ada0b5ae4eedb2487d1b1842b395f7f24541cec56bce62d76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6826f260cf5de9aeac1fafb4853891d2fa9a72aeeff60eb4eb92020d027d4e7a = $this->env->getExtension("native_profiler");
        $__internal_6826f260cf5de9aeac1fafb4853891d2fa9a72aeeff60eb4eb92020d027d4e7a->enter($__internal_6826f260cf5de9aeac1fafb4853891d2fa9a72aeeff60eb4eb92020d027d4e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6826f260cf5de9aeac1fafb4853891d2fa9a72aeeff60eb4eb92020d027d4e7a->leave($__internal_6826f260cf5de9aeac1fafb4853891d2fa9a72aeeff60eb4eb92020d027d4e7a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee10bf418031b1d3fc35dc932289e6865d58e126c42afe6af31dd2dafb55941 = $this->env->getExtension("native_profiler");
        $__internal_1ee10bf418031b1d3fc35dc932289e6865d58e126c42afe6af31dd2dafb55941->enter($__internal_1ee10bf418031b1d3fc35dc932289e6865d58e126c42afe6af31dd2dafb55941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ee10bf418031b1d3fc35dc932289e6865d58e126c42afe6af31dd2dafb55941->leave($__internal_1ee10bf418031b1d3fc35dc932289e6865d58e126c42afe6af31dd2dafb55941_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
