<?php

/* EspaceUserBundle::layout_register.html.twig */
class __TwigTemplate_a66a09042736a34408771b124bc60855c0318d02f7af675d839c926c935038b7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle::layout_register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle::layout_register.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" >
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
</head>
<body id=\"page\">




   <div class=\"container marg_container_register\" >

   <div class=\"row\">
        <div id=\"menu\" class=\"col-md-2\">
            
         
        </div>

        <div id=\"content\" class=\"col-md-9\">
           

          <a id=\"logo\" href=\"#\" title=\"Accueil\" rel=\"home\">
      <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo Campus Redon Industries\" class=\"header-logo\">
    </a>


        </div>

    </div>

    <div class=\"row marg_container2\">
        <div id=\"menu\" class=\"col-md-2\">
            
           

            
        </div>

        <div id=\"content\" class=\"col-md-8\">
            ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        </div>

    </div>


   

</div>

 

";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "




</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Membres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/page.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>
            <!--<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css\">
                  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">-->


     <!--   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/css/smoothness/jquery.ui.theme.css"), "html", null, true);
        echo "\" /> -->

  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }
  </style>
    
    

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
   <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js\"></script>





 <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<!--<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/js/minified/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>-->





   <script >

        \$(document).ready(function() {
            \$('.data').DataTable({
                  \"language\": {
            \"sProcessing\":     \"Traitement en cours...\",
    \"sSearch\":         \"Rechercher&nbsp;:\",
    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Chargement en cours...\",
    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
    \"oPaginate\": {
        \"sFirst\":      \"Premier\",
        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
        \"sNext\":       \"Suivant\",
        \"sLast\":       \"Dernier\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
    },
          
        },
            });
        } );




    </script>
  
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle::layout_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 89,  225 => 88,  214 => 79,  205 => 78,  195 => 66,  186 => 65,  167 => 20,  163 => 19,  152 => 11,  148 => 10,  136 => 8,  118 => 6,  101 => 132,  99 => 78,  86 => 67,  84 => 65,  64 => 48,  43 => 29,  41 => 8,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" >
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Espace Membres{% endblock %}</title>

    {% block stylesheets %} 

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/page.css') }}\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>
            <!--<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css\">
                  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">-->


     <!--   <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerjqueryui/css/smoothness/jquery-ui.css') }}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerjqueryui/css/smoothness/jquery.ui.theme.css') }}\" /> -->

  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }
  </style>
    
    

    {% endblock %}

</head>
<body id=\"page\">




   <div class=\"container marg_container_register\" >

   <div class=\"row\">
        <div id=\"menu\" class=\"col-md-2\">
            
         
        </div>

        <div id=\"content\" class=\"col-md-9\">
           

          <a id=\"logo\" href=\"#\" title=\"Accueil\" rel=\"home\">
      <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo Campus Redon Industries\" class=\"header-logo\">
    </a>


        </div>

    </div>

    <div class=\"row marg_container2\">
        <div id=\"menu\" class=\"col-md-2\">
            
           

            
        </div>

        <div id=\"content\" class=\"col-md-8\">
            {% block body %}
            {% endblock %}
        </div>

    </div>


   

</div>

 

{% block javascripts %}

   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
   <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js\"></script>
       <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js\"></script>





 <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script> 
<!--<script type=\"text/javascript\" src=\"{{ asset('bundles/bmatznerjqueryui/js/minified/jquery-ui.min.js') }}\"></script>-->





   <script >

        \$(document).ready(function() {
            \$('.data').DataTable({
                  \"language\": {
            \"sProcessing\":     \"Traitement en cours...\",
    \"sSearch\":         \"Rechercher&nbsp;:\",
    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Chargement en cours...\",
    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
    \"oPaginate\": {
        \"sFirst\":      \"Premier\",
        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
        \"sNext\":       \"Suivant\",
        \"sLast\":       \"Dernier\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
    },
          
        },
            });
        } );




    </script>
  
 
{% endblock %}





</body>
</html>
", "EspaceUserBundle::layout_register.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/layout_register.html.twig");
    }
}
