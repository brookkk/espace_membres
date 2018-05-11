<?php

/* EspaceUserBundle::layout.html.twig */
class __TwigTemplate_be6bb667acd54f62b5a34f6f0dc89e04dac4294a41fba0dacba1b889447a98a9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle::layout.html.twig"));

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
        // line 34
        echo "
</head>
<body  style=\"font-family: Oswald\" id=\"page\">

 


   <div class=\"container marg_container\">

    
   <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            
         
        </div>

        <div id=\"content\" class=\"col-md-8\">
           

          <a id=\"logo\" href=\"#\" title=\"Accueil\" rel=\"home\">
      <img src=\"";
        // line 54
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
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "        </div>

    </div>



   

</div>
 
 

";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/floating-labels.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/page.css"), "html", null, true);
        echo "\" />

   <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>-->




<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">



     <!--   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/css/smoothness/jquery.ui.theme.css"), "html", null, true);
        echo "\" /> -->

  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }
  </style>
    
    

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "
  <!-- <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>






 <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>-->


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<!--<script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerjqueryui/js/minified/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>-->





  
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 106,  234 => 94,  224 => 86,  215 => 85,  205 => 72,  196 => 71,  177 => 25,  173 => 24,  158 => 12,  154 => 11,  150 => 10,  138 => 8,  120 => 6,  103 => 115,  101 => 85,  87 => 73,  85 => 71,  65 => 54,  43 => 34,  41 => 8,  36 => 6,  29 => 1,);
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

    <link rel=\"stylesheet\" href=\"{{ asset('css/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/floating-labels.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/page.css') }}\" />

   <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>-->




<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">



     <!--   <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerjqueryui/css/smoothness/jquery-ui.css') }}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerjqueryui/css/smoothness/jquery.ui.theme.css') }}\" /> -->

  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }
  </style>
    
    

    {% endblock %}

</head>
<body  style=\"font-family: Oswald\" id=\"page\">

 


   <div class=\"container marg_container\">

    
   <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            
         
        </div>

        <div id=\"content\" class=\"col-md-8\">
           

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

  <!-- <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>






 <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script> 


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>-->


  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<!--<script type=\"text/javascript\" src=\"{{ asset('bundles/bmatznerjqueryui/js/minified/jquery-ui.min.js') }}\"></script>-->





  
 
{% endblock %}





</body>
</html>
", "EspaceUserBundle::layout.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/layout.html.twig");
    }
}
