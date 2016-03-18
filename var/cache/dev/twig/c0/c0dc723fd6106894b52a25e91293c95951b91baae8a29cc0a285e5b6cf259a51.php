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
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e42e6c35f4fe9752f56ad0e2a1708b9272a85069d9ea69786ccaf89ab2bb71db = $this->env->getExtension("native_profiler");
        $__internal_e42e6c35f4fe9752f56ad0e2a1708b9272a85069d9ea69786ccaf89ab2bb71db->enter($__internal_e42e6c35f4fe9752f56ad0e2a1708b9272a85069d9ea69786ccaf89ab2bb71db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div class=\"container-fluid\">
            <header class=\"row\" style=\"background-color: black;\">
                <div class=\"col-sm-2\" style=\"color:white;\">HelloMates</div>
                <div class=\"col-sm-8\">
                    <form class=\"form-inline\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hm_sync_summoner_name", array("region" => "euw", "name" => "kahélaim")), "html", null, true);
        echo "\">
                        <input id=\"summonerName\" class=\"form-control\" type=\"text\" placeholder=\"Summoner name...\">
                        <select>
                            <option value=\"euw\">Europe west</option>
                            <option value=\"na\">North america</option>
                        </select>
                        <button class=\"btn btn-primary\">Search</button>
                    </form>
                </div>
                <div class=\"col-sm-2\">
                    <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button class=\"btn btn-primary\">Sign up</button></form>
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><button class=\"btn btn-primary\">Sign in</button></form>
                </div>
            </header>
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "            <footer class=\"row\">

            </footer>
        </div>
        
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_e42e6c35f4fe9752f56ad0e2a1708b9272a85069d9ea69786ccaf89ab2bb71db->leave($__internal_e42e6c35f4fe9752f56ad0e2a1708b9272a85069d9ea69786ccaf89ab2bb71db_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_82c385658dc8c874447fe05a541d542db03e529ae004aebf6783207c78ff0271 = $this->env->getExtension("native_profiler");
        $__internal_82c385658dc8c874447fe05a541d542db03e529ae004aebf6783207c78ff0271->enter($__internal_82c385658dc8c874447fe05a541d542db03e529ae004aebf6783207c78ff0271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HelloMates";
        
        $__internal_82c385658dc8c874447fe05a541d542db03e529ae004aebf6783207c78ff0271->leave($__internal_82c385658dc8c874447fe05a541d542db03e529ae004aebf6783207c78ff0271_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9d08a7d7a1a7fbb1390228b602957d72e3745b2f264bd93571d6e0760c24ba0 = $this->env->getExtension("native_profiler");
        $__internal_f9d08a7d7a1a7fbb1390228b602957d72e3745b2f264bd93571d6e0760c24ba0->enter($__internal_f9d08a7d7a1a7fbb1390228b602957d72e3745b2f264bd93571d6e0760c24ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f9d08a7d7a1a7fbb1390228b602957d72e3745b2f264bd93571d6e0760c24ba0->leave($__internal_f9d08a7d7a1a7fbb1390228b602957d72e3745b2f264bd93571d6e0760c24ba0_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_e01bd85298f429e9be0356904e530c2e4bd4b20803f37fe1d351190a8319828c = $this->env->getExtension("native_profiler");
        $__internal_e01bd85298f429e9be0356904e530c2e4bd4b20803f37fe1d351190a8319828c->enter($__internal_e01bd85298f429e9be0356904e530c2e4bd4b20803f37fe1d351190a8319828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e01bd85298f429e9be0356904e530c2e4bd4b20803f37fe1d351190a8319828c->leave($__internal_e01bd85298f429e9be0356904e530c2e4bd4b20803f37fe1d351190a8319828c_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d469c23fe769a01568d85317008d92256a85df0042f07d352232a772f187997a = $this->env->getExtension("native_profiler");
        $__internal_d469c23fe769a01568d85317008d92256a85df0042f07d352232a772f187997a->enter($__internal_d469c23fe769a01568d85317008d92256a85df0042f07d352232a772f187997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d469c23fe769a01568d85317008d92256a85df0042f07d352232a772f187997a->leave($__internal_d469c23fe769a01568d85317008d92256a85df0042f07d352232a772f187997a_prof);

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
        return array (  128 => 38,  117 => 30,  106 => 9,  94 => 4,  85 => 39,  83 => 38,  74 => 31,  72 => 30,  66 => 27,  62 => 26,  49 => 16,  41 => 10,  39 => 9,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <title>{% block title %}HelloMates{% endblock %}</title>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div class="container-fluid">*/
/*             <header class="row" style="background-color: black;">*/
/*                 <div class="col-sm-2" style="color:white;">HelloMates</div>*/
/*                 <div class="col-sm-8">*/
/*                     <form class="form-inline" action="{{ path('hm_sync_summoner_name', {'region': 'euw', 'name': 'kahélaim'}) }}">*/
/*                         <input id="summonerName" class="form-control" type="text" placeholder="Summoner name...">*/
/*                         <select>*/
/*                             <option value="euw">Europe west</option>*/
/*                             <option value="na">North america</option>*/
/*                         </select>*/
/*                         <button class="btn btn-primary">Search</button>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-sm-2">*/
/*                     <form action="{{ path('fos_user_registration_register') }}"><button class="btn btn-primary">Sign up</button></form>*/
/*                     <form action="{{ path('fos_user_security_login') }}"><button class="btn btn-primary">Sign in</button></form>*/
/*                 </div>*/
/*             </header>*/
/*             {% block content %}{% endblock %}*/
/*             <footer class="row">*/
/* */
/*             </footer>*/
/*         </div>*/
/*         */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
