<?php

/* EspaceUserBundle:New:etudiantNF.html.twig */
class __TwigTemplate_e01bfc5acac73e8dc9fbd0037078692640ca64db7413d63c1218c7ea6aec56d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspacePlatformBundle::layout.html.twig", "EspaceUserBundle:New:etudiantNF.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:New:etudiantNF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:New:etudiantNF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " 



 <ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_user_homepage");
        echo "\">Candidat</a></li>
  <li>MAJ</li>
 
<h3>CV</h3>

";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "




<div><br>
  &nbsp    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profilTitre", array()), 'label');
        echo "  
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profilTitre", array()), 'errors');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profilTitre", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeContratRecherche", array()), 'label');
        echo "  &nbsp 
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeContratRecherche", array()), 'errors');
        echo " 
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeContratRecherche", array()), 'widget');
        echo "

    <br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experience", array()), 'label');
        echo "  &nbsp 
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experience", array()), 'errors');
        echo " 
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experience", array()), 'widget');
        echo "
</div>





";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobilite", array()), 'row');
        echo "



<div>
  &nbsp    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebookLink", array()), 'label');
        echo "  
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebookLink", array()), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebookLink", array()), 'widget');
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "linkedinLink", array()), 'label');
        echo "  &nbsp 
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "linkedinLink", array()), 'errors');
        echo " 
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "linkedinLink", array()), 'widget');
        echo "

<br>
   &nbsp &nbsp   ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viadeoLink", array()), 'label');
        echo "  &nbsp 
    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viadeoLink", array()), 'errors');
        echo " 
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viadeoLink", array()), 'widget');
        echo "
</div>


<br>
";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domaineCompetence", array()), 'row');
        echo "
 


<h3>Experiences</h3>

    <div class=\"experiences\" data-prototype=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiences", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        ";
        // line 71
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 72
            echo "           <div class=\"expp\" >


<div >
  &nbsp    ";
            // line 76
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeDebut", array()), 'label');
            echo "  
    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeDebut", array()), 'errors');
            echo "
    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeDebut", array()), 'widget');
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     ";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeFin", array()), 'label');
            echo "  &nbsp 
    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeFin", array()), 'errors');
            echo " 
    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "anneeFin", array()), 'widget');
            echo "

<br>
   &nbsp &nbsp   ";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "entreprise", array()), 'label');
            echo "  &nbsp 
    ";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "entreprise", array()), 'errors');
            echo " 
    ";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "entreprise", array()), 'widget');
            echo "&nbsp &nbsp &nbsp

       ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "posteOccupe", array()), 'label');
            echo "  &nbsp 
    ";
            // line 90
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "posteOccupe", array()), 'errors');
            echo " 
    ";
            // line 91
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "posteOccupe", array()), 'widget');
            echo "
</div>

<br>
<div >
  &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  ";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "ville", array()), 'label');
            echo "  
    ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "ville", array()), 'errors');
            echo "
    ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "ville", array()), 'widget');
            echo "&nbsp &nbsp &nbsp &nbsp

     ";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "codePostal", array()), 'label');
            echo "  &nbsp 
    ";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "codePostal", array()), 'errors');
            echo " 
    ";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "codePostal", array()), 'widget');
            echo "


<br><br>
  

    
    &nbsp &nbsp &nbsp  ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "missions", array()), 'label');
            echo "  &nbsp 
    ";
            // line 110
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "missions", array()), 'errors');
            echo " 
    ";
            // line 111
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["exp"], "missions", array()), 'widget');
            echo "

</div>


           
       


            </div>



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        
    </div>











<h3>Langues</h3>

    <div class=\"langues\" data-prototype=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langues", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        ";
        // line 142
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langues", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 143
            echo "           <div class=\"langg\" >


<div >
  &nbsp    ";
            // line 147
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "langue", array()), 'label');
            echo "  
    ";
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "langue", array()), 'errors');
            echo "
    ";
            // line 149
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "langue", array()), 'widget');
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     ";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "niveau", array()), 'label');
            echo "  &nbsp 
    ";
            // line 152
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "niveau", array()), 'errors');
            echo " 
    ";
            // line 153
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["lang"], "niveau", array()), 'widget');
            echo "


</div>


            </div>



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "        
    </div>





















";
        // line 187
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


  

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle:New:etudiantNF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 187,  383 => 164,  366 => 153,  362 => 152,  358 => 151,  353 => 149,  349 => 148,  345 => 147,  339 => 143,  334 => 142,  330 => 140,  313 => 125,  293 => 111,  289 => 110,  285 => 109,  275 => 102,  271 => 101,  267 => 100,  262 => 98,  258 => 97,  254 => 96,  246 => 91,  242 => 90,  238 => 89,  233 => 87,  229 => 86,  225 => 85,  219 => 82,  215 => 81,  211 => 80,  206 => 78,  202 => 77,  198 => 76,  192 => 72,  187 => 71,  183 => 69,  174 => 63,  166 => 58,  162 => 57,  158 => 56,  152 => 53,  148 => 52,  144 => 51,  139 => 49,  135 => 48,  131 => 47,  123 => 42,  113 => 35,  109 => 34,  105 => 33,  99 => 30,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  69 => 18,  64 => 16,  56 => 11,  49 => 6,  40 => 5,  11 => 2,);
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
  <li><a href=\"{{ path('espace_user_homepage') }}\">Candidat</a></li>
  <li>MAJ</li>
 
<h3>CV</h3>

{{ form_start(form) }}

    {{ form_errors(form) }}




<div><br>
  &nbsp    {{ form_label(form.profilTitre) }}  
    {{ form_errors(form.profilTitre) }}
    {{ form_widget(form.profilTitre) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     {{ form_label(form.typeContratRecherche) }}  &nbsp 
    {{ form_errors(form.typeContratRecherche) }} 
    {{ form_widget(form.typeContratRecherche) }}

    <br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   {{ form_label(form.experience) }}  &nbsp 
    {{ form_errors(form.experience) }} 
    {{ form_widget(form.experience) }}
</div>





{{ form_row(form.mobilite) }}



<div>
  &nbsp    {{ form_label(form.facebookLink) }}  
    {{ form_errors(form.facebookLink) }}
    {{ form_widget(form.facebookLink) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     {{ form_label(form.linkedinLink) }}  &nbsp 
    {{ form_errors(form.linkedinLink) }} 
    {{ form_widget(form.linkedinLink) }}

<br>
   &nbsp &nbsp   {{ form_label(form.viadeoLink) }}  &nbsp 
    {{ form_errors(form.viadeoLink) }} 
    {{ form_widget(form.viadeoLink) }}
</div>


<br>
{{ form_row(form.domaineCompetence) }}
 


<h3>Experiences</h3>

    <div class=\"experiences\" data-prototype=\"{{ form_widget(form.experiences.vars.prototype)|e('html_attr') }}\">
        {# iterate over each existing tag and render its only field: name #}
        {% for exp in form.experiences %}
           <div class=\"expp\" >


<div >
  &nbsp    {{ form_label(exp.anneeDebut) }}  
    {{ form_errors(exp.anneeDebut) }}
    {{ form_widget(exp.anneeDebut) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     {{ form_label(exp.anneeFin) }}  &nbsp 
    {{ form_errors(exp.anneeFin) }} 
    {{ form_widget(exp.anneeFin) }}

<br>
   &nbsp &nbsp   {{ form_label(exp.entreprise) }}  &nbsp 
    {{ form_errors(exp.entreprise) }} 
    {{ form_widget(exp.entreprise) }}&nbsp &nbsp &nbsp

       {{ form_label(exp.posteOccupe) }}  &nbsp 
    {{ form_errors(exp.posteOccupe) }} 
    {{ form_widget(exp.posteOccupe) }}
</div>

<br>
<div >
  &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  {{ form_label(exp.ville) }}  
    {{ form_errors(exp.ville) }}
    {{ form_widget(exp.ville) }}&nbsp &nbsp &nbsp &nbsp

     {{ form_label(exp.codePostal) }}  &nbsp 
    {{ form_errors(exp.codePostal) }} 
    {{ form_widget(exp.codePostal) }}


<br><br>
  

    
    &nbsp &nbsp &nbsp  {{ form_label(exp.missions) }}  &nbsp 
    {{ form_errors(exp.missions) }} 
    {{ form_widget(exp.missions) }}

</div>


           
       


            </div>



        {% endfor %}
        
    </div>











<h3>Langues</h3>

    <div class=\"langues\" data-prototype=\"{{ form_widget(form.langues.vars.prototype)|e('html_attr') }}\">
        {# iterate over each existing tag and render its only field: name #}
        {% for lang in form.langues %}
           <div class=\"langg\" >


<div >
  &nbsp    {{ form_label(lang.langue) }}  
    {{ form_errors(lang.langue) }}
    {{ form_widget(lang.langue) }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

     {{ form_label(lang.niveau) }}  &nbsp 
    {{ form_errors(lang.niveau) }} 
    {{ form_widget(lang.niveau) }}


</div>


            </div>



        {% endfor %}
        
    </div>





















{{ form_end(form) }}


  

 {% endblock %} ", "EspaceUserBundle:New:etudiantNF.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/New/etudiantNF.html.twig");
    }
}
