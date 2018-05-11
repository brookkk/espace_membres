<?php

/* EspacePlatformBundle::layout.html.twig */
class __TwigTemplate_e9b154519879adefaaba58b4fbda012a3356a209f925dfab463a6314034efcbd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspacePlatformBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspacePlatformBundle::layout.html.twig"));

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
        // line 90
        echo "
</head>
<body style=\"font-family: Oswald; font-size: 16px; color: #003a6c;\">
    <main class= \"brook_main\">

   <div  class=\"col-md-3\">     

 <a id=\"logo\" href=\"#\" title=\"Accueil\" rel=\"home\">
      <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo Campus Redon Industries\" class=\"header-logo\" >
    </a>

</div>
<div class=\"col-md-9\">
 <nav class=\"navbar navbar-default\" id=\"colorful-nav\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
  <div class=\"container-fluid\">

            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">

                    <li  class=\"home\"><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_platform_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span><h5>Accueil</h5></a></li>
                
                    <li class=\"search\"><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_show_offre");
        echo "\"><span class=\"glyphicon glyphicon-briefcase\"></span><h5>Offres</h5></a></li>
                    ";
        // line 120
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
            // line 121
            echo "                    <li class=\"lists\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_cvtheque_search");
            echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span><h5>Cv-thèque</h5></a></li>
                    ";
        }
        // line 123
        echo "                    <!--<li class=\"contact\"><a href=\"#\"><span class=\"glyphicon glyphicon-calendar\"></span><h5>Calendrier</h5></a></li>-->
                    ";
        // line 124
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 125
            echo "                    <li class=\"profile\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_show_user");
            echo "\"><span class=\"glyphicon glyphicon-lock\"></span><h5>Admin</h5></a></li>
                    ";
        }
        // line 127
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT")) {
            // line 128
            echo "                    <li class=\"statistics\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_details_candidat", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span><h5>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "</h5></a></li>
                    ";
        } else {
            // line 130
            echo "                    <li class=\"statistics\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_details_entreprise", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span><h5>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo "</h5></a></li>
                    ";
        }
        // line 132
        echo "                    <li class=\"about\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span><h5>Déconnexion</h5></a></li>

                </ul>



            </div>
            </div>
        </div>
    </nav>
</div>

   <div class=\"container\">

   

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-1\">
            
           

            
        </div>

        <div id=\"content\" class=\"col-md-10\">
            ";
        // line 157
        $this->displayBlock('body', $context, $blocks);
        // line 159
        echo "        </div>

         <div id=\"menu\" class=\"col-md-1\">
            
           

            
        </div>

    </div>


    



</div>

</main>

<footer class=\"footer-distributed\">

            <div class=\"footer-left\">

                <h3><a href=\"http://campus-redon-industries.com/\" target=\"_blank\">Accéder au site du<span> Campus</span></a></h3>



 <div class=\"footer-left-center\">
                    <i class=\"fa fa-home\"></i>
                    <p><span>26 Quai Surcouf</span> Redon (35600)</p>



                </div>

            </div>

            <div class=\"footer-center\">

               

                <div>
                    <i class=\"fa fa-phone\"></i>
                    <p>02 99 71 60 20 ou 02 23 10 04 12</p>
                </div>

                <div>
                    <i class=\"fa fa-envelope\"></i>
                    <p><a href=\"mailto:contact@campus-redon-industries.com\">contact@campus-redon-industries.com</a></p>
                </div>

            </div>

            <div class=\"footer-right\">

                

                <div class=\"footer-icons\">
                <p class=\"footer-company-about\">
                   <span>Restez Connectés 
                    <a href=\"https://www.facebook.com/campusespritindustries\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"https://twitter.com/campusesprit\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/company/campus-esprit-industries\"><i class=\"fa fa-linkedin\"></i></a>
</span> </p>
                </div>

            </div>

        </footer>






 

";
        // line 237
        $this->displayBlock('javascripts', $context, $blocks);
        // line 525
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/espace.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/page.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/footer-distributed-with-address-and-phones.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css\" />

    

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">

    <link href=\"http://fonts.googleapis.com/css?family=Cookie\" rel=\"stylesheet\" type=\"text/css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>
     

 <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/Header-Icons.css"), "html", null, true);
        echo "\">


  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }

  .control-label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

.form-control {
    display: inline-block;
    width: 25%;
    height: 34px;
    padding: 6px 12px;
    margin-left: 20px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;}

    .expp2 input{
        width: 59%;
    }

    .expp2 label{
        width: 88px;
    }

    .expp2 textarea{
        width: 62%;
    }
    .expp2 .form-group{
        margin-bottom: 5px; display: inline-block;
    }

      .langg2 input{
        width: 59%;
    }

    .langg2 label{
        width: 88px;
    }

    .langg2 select{
        width: 62%;
    }
    .langg2 .form-group{
        margin-bottom: 5px; display: inline-block;width: 45%;
    }
  </style>
    
    

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 158
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 238
        echo "
   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
   <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js\"></script>

     <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>




 <script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 

<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js\"></script>

 
<script type=\"text/javascript\">
    

var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter une expérience</a>');
var \$newLinkLi = \$('<div></div>').append(\$addTagLink);


var \$collectionHolder2;

// setup an \"add a tag\" link
var \$addLangLink = \$('<a href=\"#\" class=\"add_lang_link\">Ajouter une Langue</a>');
var \$newLinkLi2 = \$('<div></div>').append(\$addLangLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('div.experiences');

    \$collectionHolder.find('div.expp').each(function() {
        addTagFormDeleteLink(\$(this));
    });

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });







        // Get the ul that holds the collection of tags
    \$collectionHolder2 = \$('div.langues');

    \$collectionHolder2.find('div.langg').each(function() {
        addLangFormDeleteLink(\$(this));
    });

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder2.append(\$newLinkLi2);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

    \$addLangLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addLangForm(\$collectionHolder2, \$newLinkLi2);
    });




});



function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<div class=\"expp2\"></div>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}



function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Supprimer cette expérience</a>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}




    



/*jQuery(document).ready(function() {







});*/



function addLangForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<div class=\"langg2\"></div>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}



function addLangFormDeleteLink(\$langFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Supprimer cette Langue</a>');
    \$langFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$langFormLi.remove();
    });
}



</script>



   <script >

  

 \$(document).ready(function() {

    \$('.data').DataTable( {

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
        initComplete: function () {
            this.api().columns().every( function (idd) {
                var column = this;
                if(column !=\"Niveau de formation\"){
                var select = \$('<select><option value=\"\"></option></select>')
                    .appendTo( \$(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            

              }
            } );
        },
    
        dom: 'lBfrtip',
        \"columnDefs\" : [{
            \"targets\" : [ 0, 1, 2, 3],
            \"visible\" : true,
            \"searchable\" : true
        }, {
            \"targets\" : [ 4 ],
            \"visible\" : true,
            \"searchable\" : true
        }],
         buttons: [
            
            
            
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            'colvis'
        ]

    } );
} );


    </script>
  
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspacePlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 247,  419 => 238,  410 => 237,  400 => 158,  391 => 157,  320 => 29,  302 => 14,  298 => 13,  294 => 12,  290 => 11,  286 => 10,  274 => 8,  256 => 6,  239 => 525,  237 => 237,  157 => 159,  155 => 157,  126 => 132,  116 => 130,  106 => 128,  103 => 127,  97 => 125,  95 => 124,  92 => 123,  86 => 121,  84 => 120,  80 => 119,  75 => 117,  53 => 98,  43 => 90,  41 => 8,  36 => 6,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/espace.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/page.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/footer-distributed-with-address-and-phones.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css\" />

    

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">

    <link href=\"http://fonts.googleapis.com/css?family=Cookie\" rel=\"stylesheet\" type=\"text/css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/css/dataTables.bootstrap.css\"/>
     

 <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/Header-Icons.css') }}\">


  <style>
  .ui-dialog { width: 70%; height: 700%; padding: 0.5em; }

  .control-label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

.form-control {
    display: inline-block;
    width: 25%;
    height: 34px;
    padding: 6px 12px;
    margin-left: 20px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;}

    .expp2 input{
        width: 59%;
    }

    .expp2 label{
        width: 88px;
    }

    .expp2 textarea{
        width: 62%;
    }
    .expp2 .form-group{
        margin-bottom: 5px; display: inline-block;
    }

      .langg2 input{
        width: 59%;
    }

    .langg2 label{
        width: 88px;
    }

    .langg2 select{
        width: 62%;
    }
    .langg2 .form-group{
        margin-bottom: 5px; display: inline-block;width: 45%;
    }
  </style>
    
    

    {% endblock %}

</head>
<body style=\"font-family: Oswald; font-size: 16px; color: #003a6c;\">
    <main class= \"brook_main\">

   <div  class=\"col-md-3\">     

 <a id=\"logo\" href=\"#\" title=\"Accueil\" rel=\"home\">
      <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo Campus Redon Industries\" class=\"header-logo\" >
    </a>

</div>
<div class=\"col-md-9\">
 <nav class=\"navbar navbar-default\" id=\"colorful-nav\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
  <div class=\"container-fluid\">

            <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                <ul class=\"nav navbar-nav\">

                    <li  class=\"home\"><a href=\"{{ path('espace_platform_homepage') }}\"><span class=\"glyphicon glyphicon-home\"></span><h5>Accueil</h5></a></li>
                
                    <li class=\"search\"><a href=\"{{ path('EP_show_offre') }}\"><span class=\"glyphicon glyphicon-briefcase\"></span><h5>Offres</h5></a></li>
                    {% if is_granted('ROLE_ENTREPRISE')  %}
                    <li class=\"lists\"><a href=\"{{ path('EP_cvtheque_search') }}\"><span class=\"glyphicon glyphicon-list-alt\"></span><h5>Cv-thèque</h5></a></li>
                    {% endif %}
                    <!--<li class=\"contact\"><a href=\"#\"><span class=\"glyphicon glyphicon-calendar\"></span><h5>Calendrier</h5></a></li>-->
                    {% if is_granted('ROLE_ADMIN')  %}
                    <li class=\"profile\"><a href=\"{{ path('espace_show_user') }}\"><span class=\"glyphicon glyphicon-lock\"></span><h5>Admin</h5></a></li>
                    {% endif %}
                    {% if is_granted('ROLE_ETUDIANT')  %}
                    <li class=\"statistics\"><a href=\"{{ path('espace_details_candidat',{'id': app.user.id}) }}\"><span class=\"glyphicon glyphicon-user\"></span><h5>{{ app.user.prenom|capitalize }} {{ app.user.nom|capitalize }}</h5></a></li>
                    {% else %}
                    <li class=\"statistics\"><a href=\"{{ path('espace_details_entreprise',{'id': app.user.id}) }}\"><span class=\"glyphicon glyphicon-user\"></span><h5>{{ app.user.prenom|capitalize }} {{ app.user.nom|capitalize }}</h5></a></li>
                    {% endif %}
                    <li class=\"about\"><a href=\"{{ path('logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span><h5>Déconnexion</h5></a></li>

                </ul>



            </div>
            </div>
        </div>
    </nav>
</div>

   <div class=\"container\">

   

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-1\">
            
           

            
        </div>

        <div id=\"content\" class=\"col-md-10\">
            {% block body %}
            {% endblock %}
        </div>

         <div id=\"menu\" class=\"col-md-1\">
            
           

            
        </div>

    </div>


    



</div>

</main>

<footer class=\"footer-distributed\">

            <div class=\"footer-left\">

                <h3><a href=\"http://campus-redon-industries.com/\" target=\"_blank\">Accéder au site du<span> Campus</span></a></h3>



 <div class=\"footer-left-center\">
                    <i class=\"fa fa-home\"></i>
                    <p><span>26 Quai Surcouf</span> Redon (35600)</p>



                </div>

            </div>

            <div class=\"footer-center\">

               

                <div>
                    <i class=\"fa fa-phone\"></i>
                    <p>02 99 71 60 20 ou 02 23 10 04 12</p>
                </div>

                <div>
                    <i class=\"fa fa-envelope\"></i>
                    <p><a href=\"mailto:contact@campus-redon-industries.com\">contact@campus-redon-industries.com</a></p>
                </div>

            </div>

            <div class=\"footer-right\">

                

                <div class=\"footer-icons\">
                <p class=\"footer-company-about\">
                   <span>Restez Connectés 
                    <a href=\"https://www.facebook.com/campusespritindustries\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"https://twitter.com/campusesprit\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/company/campus-esprit-industries\"><i class=\"fa fa-linkedin\"></i></a>
</span> </p>
                </div>

            </div>

        </footer>






 

{% block javascripts %}

   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
   <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js\"></script>

     <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>




 <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script> 

<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js\"></script>

 
<script type=\"text/javascript\">
    

var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter une expérience</a>');
var \$newLinkLi = \$('<div></div>').append(\$addTagLink);


var \$collectionHolder2;

// setup an \"add a tag\" link
var \$addLangLink = \$('<a href=\"#\" class=\"add_lang_link\">Ajouter une Langue</a>');
var \$newLinkLi2 = \$('<div></div>').append(\$addLangLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('div.experiences');

    \$collectionHolder.find('div.expp').each(function() {
        addTagFormDeleteLink(\$(this));
    });

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });







        // Get the ul that holds the collection of tags
    \$collectionHolder2 = \$('div.langues');

    \$collectionHolder2.find('div.langg').each(function() {
        addLangFormDeleteLink(\$(this));
    });

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder2.append(\$newLinkLi2);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

    \$addLangLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addLangForm(\$collectionHolder2, \$newLinkLi2);
    });




});



function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<div class=\"expp2\"></div>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}



function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Supprimer cette expérience</a>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}




    



/*jQuery(document).ready(function() {







});*/



function addLangForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<div class=\"langg2\"></div>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}



function addLangFormDeleteLink(\$langFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Supprimer cette Langue</a>');
    \$langFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$langFormLi.remove();
    });
}



</script>



   <script >

  

 \$(document).ready(function() {

    \$('.data').DataTable( {

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
        initComplete: function () {
            this.api().columns().every( function (idd) {
                var column = this;
                if(column !=\"Niveau de formation\"){
                var select = \$('<select><option value=\"\"></option></select>')
                    .appendTo( \$(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = \$.fn.dataTable.util.escapeRegex(
                            \$(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'\$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value=\"'+d+'\">'+d+'</option>' )
                } );
            

              }
            } );
        },
    
        dom: 'lBfrtip',
        \"columnDefs\" : [{
            \"targets\" : [ 0, 1, 2, 3],
            \"visible\" : true,
            \"searchable\" : true
        }, {
            \"targets\" : [ 4 ],
            \"visible\" : true,
            \"searchable\" : true
        }],
         buttons: [
            
            
            
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            'colvis'
        ]

    } );
} );


    </script>
  
 
{% endblock %}





</body>
</html>
", "EspacePlatformBundle::layout.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/PlatformBundle/Resources/views/layout.html.twig");
    }
}
