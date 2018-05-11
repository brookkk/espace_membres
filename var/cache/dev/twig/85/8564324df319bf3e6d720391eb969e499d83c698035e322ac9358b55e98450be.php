<?php

/* EspacePlatformBundle:Show:offre.html.twig */
class __TwigTemplate_65a6f30c246921b53b6301acee31e3784020a0a85f3b8fa07c6715016fc87553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspacePlatformBundle::layout.html.twig", "EspacePlatformBundle:Show:offre.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'search_body' => array($this, 'block_search_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspacePlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspacePlatformBundle:Show:offre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspacePlatformBundle:Show:offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_show_offre");
        echo "\">Offres</a></li>
  <li>Liste</li>
 
</ul>

<h3>Liste des Offres</h3>

 ";
        // line 14
        $this->displayBlock('search_body', $context, $blocks);
        // line 16
        echo "
 
  
   <table class=\"data\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
      <tr>
        
        <th>Réf</th>
        <th>Titre de l'offre</th>
        <th>Ville</th>
        <th>Entreprise</th>
        <th>Details</th>
        ";
        // line 28
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 29
            echo "     <th>Details de l'offre</th>
     <th>Postuler</th>
      ";
        }
        // line 32
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
            // line 33
            echo "     <th>Etat</th>
     <th>Candidats</th>
     <th>Action</th>
     <th>Validation</th>

      ";
        }
        // line 39
        echo "
         
      </tr>
    </thead>

    <tfoot>
      <tr>
        <th>Réf</th>
        <th>Titre de l'offre</th>
        <th>Ville</th>
        <th>Entreprise</th>
        <th>Details</th>
        ";
        // line 51
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 52
            echo "     <th>Details de l'offre</th>
     <th>Postuler</th>
      ";
        }
        // line 55
        echo "
";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
            // line 57
            echo "    

    <th>Etat</th> 
    <th>Candidats</th> 
    <th>Action</th>
    <th>Validation</th>

      ";
        }
        // line 65
        echo "
      

      </tr>
    </tfoot>  
    <tbody>

  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOffres"]) ? $context["listOffres"] : $this->getContext($context, "listOffres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 73
            echo "
  <tr>
  <td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "refOffre", array()), "Y-m-d"), "html", null, true);
            echo " </td>
  <td> ";
            // line 76
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["offre"], "titreOffre", array())), "html", null, true);
            echo " </td>
  <td> ";
            // line 77
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["offre"], "villeE", array())), "html", null, true);
            echo " </td>
  <td> ";
            // line 78
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "entreprise", array()), "nom", array())), "html", null, true);
            echo " </td>
  <td>
<a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_details_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"fa fa-list\" ></span> </a> &nbsp 
</td>
    

";
            // line 84
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 85
                echo "  <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "typeContrat", array()), "nom", array()), "html", null, true);
                echo " </td>

     <td>

     ";
                // line 89
                if (($this->getAttribute((isset($context["has_applied"]) ? $context["has_applied"] : $this->getContext($context, "has_applied")), $this->getAttribute($context["offre"], "id", array()), array(), "array") == 0)) {
                    // line 90
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_apply_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-briefcase\"></span> </a> &nbsp 
      ";
                } else {
                    // line 92
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_in_apply_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-briefcase\" style=\"color:red\"></span> </a> &nbsp 
      ";
                }
                // line 94
                echo "     </td>
      ";
            }
            // line 96
            echo "

";
            // line 98
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
                // line 99
                if (($this->getAttribute($context["offre"], "etat", array()) == 0)) {
                    echo " <td style=\"color:grey\"> Créée 
    ";
                } elseif (($this->getAttribute(                // line 100
$context["offre"], "etat", array()) == 1)) {
                    echo "  <td> Soumise
    ";
                } elseif (($this->getAttribute(                // line 101
$context["offre"], "etat", array()) == 2)) {
                    echo "  <td style=\"color:green\"> Publiée
    ";
                } elseif (($this->getAttribute(                // line 102
$context["offre"], "etat", array()) == 3)) {
                    echo "  <td style=\"color:red\"> Refusée
    ";
                } elseif (($this->getAttribute(                // line 103
$context["offre"], "etat", array()) == 4)) {
                    echo "  <td style=\"color:black\"> Archivée
    ";
                }
                // line 105
                echo "


</td>
<td><a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_candidats_offre_show", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"  title=\"postuleurs\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_users"]) ? $context["nb_users"] : $this->getContext($context, "nb_users")), $this->getAttribute($context["offre"], "id", array()), array(), "array"), "html", null, true);
                echo " </a>  </td>
</td>
<td>
";
                // line 112
                if (((($this->getAttribute($context["offre"], "etat", array()) == 0) || ($this->getAttribute($context["offre"], "etat", array()) == 4)) || ($this->getAttribute($context["offre"], "etat", array()) == 3))) {
                    // line 113
                    echo "   <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_update_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> </a> &nbsp 
      
          
        <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_delete_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer l offre?')\" ><span class=\"glyphicon glyphicon-trash\"></span></a> &nbsp 

<a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_offre_dupliquer", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"  ><span class=\"glyphicon glyphicon-copy\"></span></a> &nbsp 
";
                } else {
                    // line 120
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_offre_dupliquer", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\"  ><span class=\"glyphicon glyphicon-copy\"></span></a> &nbsp 

";
                }
                // line 122
                echo "     
</td>



";
                // line 127
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                    // line 128
                    echo "



";
                    // line 132
                    if (($this->getAttribute($context["offre"], "etat", array()) == 0)) {
                        echo " <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_soumis", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span> </a> &nbsp 
    ";
                    } elseif (($this->getAttribute(                    // line 133
$context["offre"], "etat", array()) == 1)) {
                        echo " <td> 
    ";
                    } elseif (($this->getAttribute(                    // line 134
$context["offre"], "etat", array()) == 2)) {
                        echo "  <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_archiver", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"glyphicon glyphicon-floppy-disk\"></span></a> 
    ";
                    } elseif (($this->getAttribute(                    // line 135
$context["offre"], "etat", array()) == 3)) {
                        echo "  <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_soumis", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span> </a> 
    ";
                    } elseif (($this->getAttribute(                    // line 136
$context["offre"], "etat", array()) == 4)) {
                        echo "  <td style=\"color:black\"> 
    ";
                    }
                    // line 138
                    echo "
";
                } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 140
                    echo "

";
                    // line 142
                    if (($this->getAttribute($context["offre"], "etat", array()) == 0)) {
                        echo " <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_soumis", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span></a>  
    ";
                    } elseif (($this->getAttribute(                    // line 143
$context["offre"], "etat", array()) == 1)) {
                        echo " <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_admin_offre_valider", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" title=\"Valider l'offre\" ><span class=\"glyphicon glyphicon-thumbs-up\"></span> </a> &nbsp  
       <a href=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_admin_offre_refuser", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" style=\"color:red\"><span class=\"glyphicon glyphicon-thumbs-down\"></span> </a> 
    
    ";
                    } elseif (($this->getAttribute(                    // line 146
$context["offre"], "etat", array()) == 2)) {
                        echo "  <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_archiver", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\"> Archiver </a> 
    ";
                    } elseif (($this->getAttribute(                    // line 147
$context["offre"], "etat", array()) == 3)) {
                        echo "  <td> <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_entro_offre_soumis", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\">Soumettre </a>  
    ";
                    } elseif (($this->getAttribute(                    // line 148
$context["offre"], "etat", array()) == 4)) {
                        echo "  <td style=\"color:black\">
    ";
                    }
                    // line 150
                    echo "
";
                }
                // line 152
                echo "
      ";
            }
            // line 154
            echo "   
 </td> 
        

    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo " 
 </tbody>
 </table>


      ";
        // line 165
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENTREPRISE")) {
            // line 166
            echo "  <a class=\"btn btn btn-success\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EP_n_offre");
            echo "\" role=\"button\">Ajouter une Offre</a>
      ";
        }
        // line 168
        echo "
 


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_search_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_body"));

        // line 15
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspacePlatformBundle:Show:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 15,  402 => 14,  388 => 168,  382 => 166,  380 => 165,  373 => 160,  362 => 154,  358 => 152,  354 => 150,  349 => 148,  343 => 147,  337 => 146,  332 => 144,  326 => 143,  320 => 142,  316 => 140,  312 => 138,  307 => 136,  301 => 135,  295 => 134,  291 => 133,  285 => 132,  279 => 128,  277 => 127,  270 => 122,  263 => 120,  258 => 118,  253 => 116,  246 => 113,  244 => 112,  236 => 109,  230 => 105,  225 => 103,  221 => 102,  217 => 101,  213 => 100,  209 => 99,  207 => 98,  203 => 96,  199 => 94,  193 => 92,  187 => 90,  185 => 89,  177 => 85,  175 => 84,  168 => 80,  163 => 78,  159 => 77,  155 => 76,  151 => 75,  147 => 73,  143 => 72,  134 => 65,  124 => 57,  122 => 56,  119 => 55,  114 => 52,  112 => 51,  98 => 39,  90 => 33,  87 => 32,  82 => 29,  80 => 28,  66 => 16,  64 => 14,  54 => 7,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" 
 {% extends \"EspacePlatformBundle::layout.html.twig\" %}

{% block body %}

<ul class=\"breadcrumb\">
  <li><a href=\"{{ path('EP_show_offre') }}\">Offres</a></li>
  <li>Liste</li>
 
</ul>

<h3>Liste des Offres</h3>

 {% block search_body %}
 {% endblock %}

 
  
   <table class=\"data\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
      <tr>
        
        <th>Réf</th>
        <th>Titre de l'offre</th>
        <th>Ville</th>
        <th>Entreprise</th>
        <th>Details</th>
        {% if is_granted('ROLE_ETUDIANT') and not is_granted('ROLE_ADMIN') %}
     <th>Details de l'offre</th>
     <th>Postuler</th>
      {% endif %}
        {% if is_granted('ROLE_ENTREPRISE')  %}
     <th>Etat</th>
     <th>Candidats</th>
     <th>Action</th>
     <th>Validation</th>

      {% endif %}

         
      </tr>
    </thead>

    <tfoot>
      <tr>
        <th>Réf</th>
        <th>Titre de l'offre</th>
        <th>Ville</th>
        <th>Entreprise</th>
        <th>Details</th>
        {% if is_granted('ROLE_ETUDIANT') and not is_granted('ROLE_ADMIN') %}
     <th>Details de l'offre</th>
     <th>Postuler</th>
      {% endif %}

{% if is_granted('ROLE_ENTREPRISE')  %}
    

    <th>Etat</th> 
    <th>Candidats</th> 
    <th>Action</th>
    <th>Validation</th>

      {% endif %}

      

      </tr>
    </tfoot>  
    <tbody>

  {% for offre in listOffres %}

  <tr>
  <td> {{ offre.refOffre|date('Y-m-d') }} </td>
  <td> {{ offre.titreOffre |capitalize}} </td>
  <td> {{ offre.villeE |capitalize}} </td>
  <td> {{ offre.entreprise.nom   |capitalize}} </td>
  <td>
<a href=\"{{ path('EP_details_offre',{'id': offre.id}) }}\" target=\"_blank\"><span class=\"fa fa-list\" ></span> </a> &nbsp 
</td>
    

{% if is_granted('ROLE_ETUDIANT') and not is_granted('ROLE_ADMIN') %}
  <td> {{ offre.typeContrat.nom }} </td>

     <td>

     {%  if has_applied[offre.id]==0   %}
<a href=\"{{ path('EP_apply_offre',{'id': offre.id}) }}\"><span class=\"glyphicon glyphicon-briefcase\"></span> </a> &nbsp 
      {% else %}
<a href=\"{{ path('EP_in_apply_offre',{'id': offre.id}) }}\"><span class=\"glyphicon glyphicon-briefcase\" style=\"color:red\"></span> </a> &nbsp 
      {% endif %}
     </td>
      {% endif %}


{% if is_granted('ROLE_ENTREPRISE') %}
{% if offre.etat==0  %} <td style=\"color:grey\"> Créée 
    {%elseif offre.etat==1%}  <td> Soumise
    {%elseif offre.etat==2%}  <td style=\"color:green\"> Publiée
    {%elseif offre.etat==3%}  <td style=\"color:red\"> Refusée
    {%elseif offre.etat==4%}  <td style=\"color:black\"> Archivée
    {% endif %}



</td>
<td><a href=\"{{ path('EP_candidats_offre_show',{'id': offre.id}) }}\" target=\"_blank\"  title=\"postuleurs\">{{ nb_users[offre.id] }} </a>  </td>
</td>
<td>
{% if offre.etat==0 or offre.etat==4 or offre.etat==3 %}
   <a href=\"{{ path('EP_update_offre',{'id': offre.id}) }}\"><span class=\"glyphicon glyphicon-pencil\"></span> </a> &nbsp 
      
          
        <a href=\"{{ path('EP_delete_offre',{'id': offre.id}) }}\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer l offre?')\" ><span class=\"glyphicon glyphicon-trash\"></span></a> &nbsp 

<a href=\"{{ path('EP_offre_dupliquer',{'id': offre.id}) }}\"  ><span class=\"glyphicon glyphicon-copy\"></span></a> &nbsp 
{% else %}
<a href=\"{{ path('EP_offre_dupliquer',{'id': offre.id}) }}\"  ><span class=\"glyphicon glyphicon-copy\"></span></a> &nbsp 

{%endif%}     
</td>



{% if is_granted('ROLE_ENTREPRISE') and not is_granted('ROLE_ADMIN') %}




{% if offre.etat==0  %} <td> <a href=\"{{ path('EP_entro_offre_soumis',{'id': offre.id}) }}\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span> </a> &nbsp 
    {%elseif offre.etat==1%} <td> 
    {%elseif offre.etat==2%}  <td> <a href=\"{{ path('EP_entro_offre_archiver',{'id': offre.id}) }}\"><span class=\"glyphicon glyphicon-floppy-disk\"></span></a> 
    {%elseif offre.etat==3%}  <td> <a href=\"{{ path('EP_entro_offre_soumis',{'id': offre.id}) }}\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span> </a> 
    {%elseif offre.etat==4%}  <td style=\"color:black\"> 
    {% endif %}

{% elseif is_granted('ROLE_ADMIN') %}


{% if offre.etat==0  %} <td> <a href=\"{{ path('EP_entro_offre_soumis',{'id': offre.id}) }}\" title=\"Soumettre l'offre\"><span class=\"glyphicon glyphicon-check\"></span></a>  
    {%elseif offre.etat==1%} <td> <a href=\"{{ path('EP_admin_offre_valider',{'id': offre.id}) }}\" title=\"Valider l'offre\" ><span class=\"glyphicon glyphicon-thumbs-up\"></span> </a> &nbsp  
       <a href=\"{{ path('EP_admin_offre_refuser',{'id': offre.id}) }}\" style=\"color:red\"><span class=\"glyphicon glyphicon-thumbs-down\"></span> </a> 
    
    {%elseif offre.etat==2%}  <td> <a href=\"{{ path('EP_entro_offre_archiver',{'id': offre.id}) }}\"> Archiver </a> 
    {%elseif offre.etat==3%}  <td> <a href=\"{{ path('EP_entro_offre_soumis',{'id': offre.id}) }}\">Soumettre </a>  
    {%elseif offre.etat==4%}  <td style=\"color:black\">
    {% endif %}

{%endif%}

      {% endif %}
   
 </td> 
        

    </tr>
  {% endfor %}
 
 </tbody>
 </table>


      {% if is_granted('ROLE_ENTREPRISE') %}
  <a class=\"btn btn btn-success\" href=\"{{ path('EP_n_offre') }}\" role=\"button\">Ajouter une Offre</a>
      {% endif %}

 


{% endblock %}", "EspacePlatformBundle:Show:offre.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/PlatformBundle/Resources/views/Show/offre.html.twig");
    }
}
