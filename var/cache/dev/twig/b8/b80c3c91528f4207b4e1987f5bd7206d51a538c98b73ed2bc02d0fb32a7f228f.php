<?php

/* EspaceUserBundle:New:etudiant.html.twig */
class __TwigTemplate_d62a3abee2cb83b3f0923f2ffcaad16c99eb4cc7914edd123a9448c79f8a4913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspaceUserBundle::layout_register.html.twig", "EspaceUserBundle:New:etudiant.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspaceUserBundle::layout_register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:New:etudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:New:etudiant.html.twig"));

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
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_user_homepage");
        echo "\">Candidat</a></li>
  <li>MAJ</li>
 
<h3>Candidat</h3>

";
        // line 20
        echo "
<div class=\"margin10\">
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


 



<div>
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'label');
        echo "
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo " 
</div>


<div>
  &nbsp  &nbsp &nbsp   ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "  
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


     ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "  &nbsp &nbsp &nbsp 
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo " 
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
</div>

 
 <div>
 
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "  
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp


     ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'label');
        echo "  
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'errors');
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget');
        echo "



 </div>
 <div class = \"margin32\">
  ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
 </div>


<br>


 <div>
  &nbsp  &nbsp  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "  
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp


     ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "  &nbsp &nbsp 
    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo " 
    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
</div>

 <br>
 <div class=\"margin32\">
 
    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddn", array()), 'label');
        echo "  
    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddn", array()), 'errors');
        echo "
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddn", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</div>
<div>
     ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIne", array()), 'label');
        echo "  
    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIne", array()), 'errors');
        echo "
    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numIne", array()), 'widget');
        echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




 </div>
 <br>
 <div >
  ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveauFormation", array()), 'row');
        echo "
 </div>
<br>
  <div >
  ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diplome", array()), 'row');
        echo "
 </div>



<h4 class=\"subtitle\">
 <b>Personne à contacter en cas d'urgence</b>

</h4>



<div>
  &nbsp  &nbsp &nbsp   ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcNom", array()), 'label');
        echo "  
    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcNom", array()), 'errors');
        echo "
    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcNom", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


     ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcPrenom", array()), 'label');
        echo "  &nbsp &nbsp &nbsp 
    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcPrenom", array()), 'errors');
        echo " 
    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcPrenom", array()), 'widget');
        echo "
</div>

 
 <div>
 
    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcAdresse", array()), 'label');
        echo "  
    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcAdresse", array()), 'errors');
        echo "
    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcAdresse", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp 


     ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcCodePostal", array()), 'label');
        echo "  
    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcCodePostal", array()), 'errors');
        echo "
    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcCodePostal", array()), 'widget');
        echo "



 </div>
 <div class = \"margin32\">
  ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcVille", array()), 'row');
        echo "
 </div>



<div>
";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcEmail", array()), 'label');
        echo "  
    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcEmail", array()), 'errors');
        echo "
    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcEmail", array()), 'widget');
        echo "

";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcTelephone", array()), 'label');
        echo "  
    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcTelephone", array()), 'errors');
        echo "
    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcTelephone", array()), 'widget');
        echo "


</div>
<div class = \"margin12\">
  ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcTelephonePortable", array()), 'row');
        echo "
 </div>

 <div class = \"margin12\">
  ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pcLien", array()), 'row');
        echo "
 </div>

";
        // line 168
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>



 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle:New:etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 168,  367 => 165,  360 => 161,  352 => 156,  348 => 155,  344 => 154,  339 => 152,  335 => 151,  331 => 150,  322 => 144,  313 => 138,  309 => 137,  305 => 136,  299 => 133,  295 => 132,  291 => 131,  282 => 125,  278 => 124,  274 => 123,  268 => 120,  264 => 119,  260 => 118,  244 => 105,  237 => 101,  226 => 93,  222 => 92,  218 => 91,  212 => 88,  208 => 87,  204 => 86,  195 => 80,  191 => 79,  187 => 78,  181 => 75,  177 => 74,  173 => 73,  162 => 65,  153 => 59,  149 => 58,  145 => 57,  139 => 54,  135 => 53,  131 => 52,  122 => 46,  118 => 45,  114 => 44,  108 => 41,  104 => 40,  100 => 39,  92 => 34,  88 => 33,  84 => 32,  73 => 24,  68 => 22,  64 => 20,  56 => 10,  49 => 5,  40 => 4,  11 => 2,);
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
  {% extends \"EspaceUserBundle::layout_register.html.twig\" %}

{% block body %}
 



 <ul class=\"breadcrumb\">
  <li><a href=\"{{ path('espace_user_homepage') }}\">Candidat</a></li>
  <li>MAJ</li>
 
<h3>Candidat</h3>

{#
<div >
  {{ form(form) }}
</div>
#}

<div class=\"margin10\">
{{ form_start(form) }}

    {{ form_errors(form) }}


 



<div>
    {{ form_label(form.civilite) }}
    {{ form_errors(form.civilite) }}
    {{ form_widget(form.civilite) }} 
</div>


<div>
  &nbsp  &nbsp &nbsp   {{ form_label(form.nom) }}  
    {{ form_errors(form.nom) }}
    {{ form_widget(form.nom) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


     {{ form_label(form.prenom) }}  &nbsp &nbsp &nbsp 
    {{ form_errors(form.prenom) }} 
    {{ form_widget(form.prenom) }}
</div>

 
 <div>
 
    {{ form_label(form.adresse) }}  
    {{ form_errors(form.adresse) }}
    {{ form_widget(form.adresse) }}&nbsp &nbsp &nbsp &nbsp &nbsp


     {{ form_label(form.codePostal) }}  
    {{ form_errors(form.codePostal) }}
    {{ form_widget(form.codePostal) }}



 </div>
 <div class = \"margin32\">
  {{ form_row(form.ville) }}
 </div>


<br>


 <div>
  &nbsp  &nbsp  {{ form_label(form.email) }}  
    {{ form_errors(form.email) }}
    {{ form_widget(form.email) }}&nbsp &nbsp &nbsp &nbsp &nbsp


     {{ form_label(form.telephone) }}  &nbsp &nbsp 
    {{ form_errors(form.telephone) }} 
    {{ form_widget(form.telephone) }}
</div>

 <br>
 <div class=\"margin32\">
 
    {{ form_label(form.ddn) }}  
    {{ form_errors(form.ddn) }}
    {{ form_widget(form.ddn) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</div>
<div>
     {{ form_label(form.numIne) }}  
    {{ form_errors(form.numIne) }}
    {{ form_widget(form.numIne) }} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




 </div>
 <br>
 <div >
  {{ form_row(form.niveauFormation) }}
 </div>
<br>
  <div >
  {{ form_row(form.diplome) }}
 </div>



<h4 class=\"subtitle\">
 <b>Personne à contacter en cas d'urgence</b>

</h4>



<div>
  &nbsp  &nbsp &nbsp   {{ form_label(form.pcNom) }}  
    {{ form_errors(form.pcNom) }}
    {{ form_widget(form.pcNom) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


     {{ form_label(form.pcPrenom) }}  &nbsp &nbsp &nbsp 
    {{ form_errors(form.pcPrenom) }} 
    {{ form_widget(form.pcPrenom) }}
</div>

 
 <div>
 
    {{ form_label(form.pcAdresse) }}  
    {{ form_errors(form.pcAdresse) }}
    {{ form_widget(form.pcAdresse) }}&nbsp &nbsp &nbsp &nbsp &nbsp 


     {{ form_label(form.pcCodePostal) }}  
    {{ form_errors(form.pcCodePostal) }}
    {{ form_widget(form.pcCodePostal) }}



 </div>
 <div class = \"margin32\">
  {{ form_row(form.pcVille) }}
 </div>



<div>
{{ form_label(form.pcEmail) }}  
    {{ form_errors(form.pcEmail) }}
    {{ form_widget(form.pcEmail) }}

{{ form_label(form.pcTelephone) }}  
    {{ form_errors(form.pcTelephone) }}
    {{ form_widget(form.pcTelephone) }}


</div>
<div class = \"margin12\">
  {{ form_row(form.pcTelephonePortable) }}
 </div>

 <div class = \"margin12\">
  {{ form_row(form.pcLien) }}
 </div>

{{ form_end(form) }}

</div>



 {% endblock %} ", "EspaceUserBundle:New:etudiant.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/New/etudiant.html.twig");
    }
}
