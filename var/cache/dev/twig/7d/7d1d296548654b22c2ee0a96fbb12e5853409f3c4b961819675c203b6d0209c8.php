<?php

/* EspaceUserBundle:Show:etudiant.html.twig */
class __TwigTemplate_a246ccf09baa900b8590dd1f62689e5dcf7e711c3ed3afe0f2eab1515143edd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspacePlatformBundle::layout.html.twig", "EspaceUserBundle:Show:etudiant.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspacePlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Show:etudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Show:etudiant.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_show_user");
        echo "\">Candidat</a></li>
  <li>Details</li>
 
</ul>

<h3><b>Informations utilisateur</b></h3>



<div class=\"col-md-6\">

<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Coordonnées
</h4>

<b>Civilité :</b> ";
        // line 24
        if (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "civilite", array()) == 1)) {
            echo " Monsieur ";
        } else {
            echo " Madame ";
        }
        echo " <br>
<b>Prénom :</b> ";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array())), "html", null, true);
        echo " <br>
<b>Nom :</b> ";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array())), "html", null, true);
        echo " <br>
<b>Téléphone :</b> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone", array()), "html", null, true);
        echo " <br>
<b>Adresse :</b> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo " <br>
<b>Date de naissance :</b> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "ddn", array()), "d/m/Y"), "html", null, true);
        echo " <br>
<b>Numéro INE :</b> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "numIne", array()), "html", null, true);
        echo " <br>



</div> 



<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Personne à contacter en cas d'urgence
</h4>

<b>Prénom :</b>  ";
        // line 44
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcPrenom", array())), "html", null, true);
        echo " <br>
<b>Nom :</b>  ";
        // line 45
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcNom", array())), "html", null, true);
        echo " <br>
<b>Téléphone :</b> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcTelephone", array()), "html", null, true);
        echo " <br>
<b>Mobile :</b> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcTelephonePortable", array()), "html", null, true);
        echo " <br>
<b>Adresse :</b> ";
        // line 48
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcAdresse", array())), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcVille", array()), "html", null, true);
        echo " <br>
<b>Email :</b> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcEmail", array()), "html", null, true);
        echo " <br>
<b>Lien avec l'intéressé :</b> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "pcLien", array()), "html", null, true);
        echo " <br>



</div>

</div>

<div class=\"col-md-6\"> 



";
        // line 62
        if ($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array())) {
            // line 63
            echo "
<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
CV
</h4>

<b>Filière professionelle :</b>  <br>
<b>Date emploi :</b>  <br>
<b>Poste actuel :</b>  <br>
<b>Niveaux d'étude :</b> ";
            // line 73
            if ( !(null === $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "niveauFormation", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "niveauFormation", array()), "nom", array()), "html", null, true);
                echo " ";
            }
            echo " <br>


<b>Diplome d'inscription :</b> <br>
 
";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["diplomes"]) ? $context["diplomes"] : $this->getContext($context, "diplomes")));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 79
                echo " &nbsp &nbsp &nbsp";
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "nom", array()), "html", null, true);
                echo " <br>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo " 
 <b>Entreprise trouvée :</b> ";
            // line 82
            if (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "foundEntro", array()) == 0)) {
                echo " Nom ";
            } else {
                echo " Oui  ";
            }
            echo " <br>
<b>Aide recherche alternance :</b> ";
            // line 83
            if (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "serviceAccompagnement", array()) == 0)) {
                echo " Nom ";
            } else {
                echo " Oui  ";
            }
            echo " <br>
<b>Centre d'intérêt :</b> <br>
<b>Contrat recherché :</b> ";
            // line 85
            if ($this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "typeContratRecherche", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "typeContratRecherche", array()), "nom", array()), "html", null, true);
            }
            echo " <br>
<b>Expérience :</b> 

";
            // line 88
            if (($this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "experience", array()) == 1)) {
                echo " Pas d'expérience
";
            } elseif (($this->getAttribute($this->getAttribute(            // line 89
(isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "experience", array()) == 2)) {
                echo " 1-3 ans
";
            } elseif (($this->getAttribute($this->getAttribute(            // line 90
(isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "experience", array()) == 3)) {
                echo " 3-5 ans
";
            } else {
                // line 91
                echo " 5 ans et plus
";
            }
            // line 93
            echo " <br>

<b>Formation actuelle :</b> <br>
<b>Réseaux sociaux :</b> <br>
&nbsp &nbsp <i>Facebook</i> : ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "facebookLink", array()), "html", null, true);
            echo " <br>
&nbsp &nbsp <i>LinkedIn</i> : ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "linkedInLink", array()), "html", null, true);
            echo "<br>
&nbsp &nbsp <i>Viadeo</i> : ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "viadeoLink", array()), "html", null, true);
            echo "<br>

<b>Mobilité :</b> 
";
            // line 102
            if (($this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "mobilite", array()) == 1)) {
                echo " Nationale
";
            } elseif (($this->getAttribute($this->getAttribute(            // line 103
(isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "mobilite", array()) == 2)) {
                echo " Régionale
";
            } elseif (($this->getAttribute($this->getAttribute(            // line 104
(isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "cv", array()), "mobilite", array()) == 3)) {
                echo " Départementale
";
            }
            // line 106
            echo " <br>
<br>

<a href = \"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_download_CV", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo "\">Télécharger le CV</a>
<br>
</div> 

";
        } else {
            // line 114
            echo "

<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Le CV n'est pas encore rempli
</h4>
</div>

";
        }
        // line 124
        echo "
<a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_new_etudiantCV", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
        echo "\"><span class=\"fa fa-file\"></span> </a> &nbsp 
&nbsp 

<a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_update_user", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> </a> &nbsp 
&nbsp 

  ";
        // line 131
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 132
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_delete_user", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo "\" onclick='return confirm(\"Etes vous sûr de vouloir supprimer cet utilisateur?\")'><span class=\"glyphicon glyphicon-trash\" ></span> </a> &nbsp 
      ";
        }
        // line 134
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle:Show:etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 134,  318 => 132,  316 => 131,  310 => 128,  304 => 125,  301 => 124,  289 => 114,  281 => 109,  276 => 106,  271 => 104,  267 => 103,  263 => 102,  257 => 99,  253 => 98,  249 => 97,  243 => 93,  239 => 91,  234 => 90,  230 => 89,  226 => 88,  217 => 85,  208 => 83,  200 => 82,  197 => 81,  188 => 79,  184 => 78,  173 => 73,  161 => 63,  159 => 62,  144 => 50,  140 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  73 => 24,  53 => 7,  49 => 5,  40 => 4,  11 => 2,);
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
  <li><a href=\"{{ path('espace_show_user') }}\">Candidat</a></li>
  <li>Details</li>
 
</ul>

<h3><b>Informations utilisateur</b></h3>



<div class=\"col-md-6\">

<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Coordonnées
</h4>

<b>Civilité :</b> {% if etudiant.civilite==1 %} Monsieur {% else %} Madame {%endif%} <br>
<b>Prénom :</b> {{etudiant.prenom | capitalize}} <br>
<b>Nom :</b> {{etudiant.nom | capitalize}} <br>
<b>Téléphone :</b> {{etudiant.telephone}} <br>
<b>Adresse :</b> {{etudiant.adresse}} <br>
<b>Date de naissance :</b> {{etudiant.ddn|date('d/m/Y')}} <br>
<b>Numéro INE :</b> {{etudiant.numIne}} <br>



</div> 



<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Personne à contacter en cas d'urgence
</h4>

<b>Prénom :</b>  {{etudiant.pcPrenom | capitalize}} <br>
<b>Nom :</b>  {{etudiant.pcNom | capitalize}} <br>
<b>Téléphone :</b> {{etudiant.pcTelephone}} <br>
<b>Mobile :</b> {{etudiant.pcTelephonePortable}} <br>
<b>Adresse :</b> {{etudiant.pcAdresse|capitalize}}, {{etudiant.pcVille}} <br>
<b>Email :</b> {{etudiant.pcEmail}} <br>
<b>Lien avec l'intéressé :</b> {{etudiant.pcLien}} <br>



</div>

</div>

<div class=\"col-md-6\"> 



{% if etudiant.cv %}

<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
CV
</h4>

<b>Filière professionelle :</b>  <br>
<b>Date emploi :</b>  <br>
<b>Poste actuel :</b>  <br>
<b>Niveaux d'étude :</b> {% if etudiant.niveauFormation is not null %}{{etudiant.niveauFormation.nom}} {% endif %} <br>


<b>Diplome d'inscription :</b> <br>
 
{% for diplome in diplomes%}
 &nbsp &nbsp &nbsp{{diplome.nom}} <br>
{% endfor %}
 
 <b>Entreprise trouvée :</b> {% if etudiant.foundEntro == 0 %} Nom {% else %} Oui  {%endif%} <br>
<b>Aide recherche alternance :</b> {% if etudiant.serviceAccompagnement == 0 %} Nom {% else %} Oui  {%endif%} <br>
<b>Centre d'intérêt :</b> <br>
<b>Contrat recherché :</b> {% if etudiant.cv.typeContratRecherche %} {{etudiant.cv.typeContratRecherche.nom }}{% endif %} <br>
<b>Expérience :</b> 

{% if etudiant.cv.experience == 1 %} Pas d'expérience
{% elseif  etudiant.cv.experience == 2 %} 1-3 ans
{% elseif  etudiant.cv.experience == 3 %} 3-5 ans
{% else %} 5 ans et plus
{% endif %}
 <br>

<b>Formation actuelle :</b> <br>
<b>Réseaux sociaux :</b> <br>
&nbsp &nbsp <i>Facebook</i> : {{etudiant.cv.facebookLink }} <br>
&nbsp &nbsp <i>LinkedIn</i> : {{etudiant.cv.linkedInLink }}<br>
&nbsp &nbsp <i>Viadeo</i> : {{etudiant.cv.viadeoLink }}<br>

<b>Mobilité :</b> 
{% if etudiant.cv.mobilite == 1 %} Nationale
{% elseif  etudiant.cv.mobilite == 2 %} Régionale
{% elseif  etudiant.cv.mobilite == 3 %} Départementale
{% endif %}
 <br>
<br>

<a href = \"{{ path('EU_download_CV',{'id': etudiant.id}) }}\">Télécharger le CV</a>
<br>
</div> 

{% else %}


<div class= \"block-infos-user\">

<h4 class=\"subtitle\">
Le CV n'est pas encore rempli
</h4>
</div>

{% endif %}

<a href=\"{{ path('EU_new_etudiantCV',{'id': etudiant.id}) }}\"><span class=\"fa fa-file\"></span> </a> &nbsp 
&nbsp 

<a href=\"{{ path('espace_update_user',{'id': etudiant.id}) }}\"><span class=\"glyphicon glyphicon-pencil\"></span> </a> &nbsp 
&nbsp 

  {% if is_granted('ROLE_ADMIN') %}
<a href=\"{{ path('espace_delete_user',{'id': etudiant.id}) }}\" onclick='return confirm(\"Etes vous sûr de vouloir supprimer cet utilisateur?\")'><span class=\"glyphicon glyphicon-trash\" ></span> </a> &nbsp 
      {% endif %}

</div>

{% endblock %}", "EspaceUserBundle:Show:etudiant.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/Show/etudiant.html.twig");
    }
}
