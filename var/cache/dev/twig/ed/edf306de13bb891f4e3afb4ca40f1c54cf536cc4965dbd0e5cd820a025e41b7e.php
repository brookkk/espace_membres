<?php

/* EspaceUserBundle:Show:user.html.twig */
class __TwigTemplate_daafba4074064375082712280c84829a7224c06cf8de7de83add4a29754360e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspacePlatformBundle::layout.html.twig", "EspaceUserBundle:Show:user.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Show:user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Show:user.html.twig"));

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
        echo "\">Users</a></li>
  <li>Liste</li>
 
</ul>

<h3>Liste des Utilisateurs</h3>



 
  
   <table class=\"data\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>Email</th>
        <th>Profil</th>

        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "     <th>Statut</th>
     <th>Action</th>
     <th>Details</th>

      ";
        }
        // line 32
        echo "
         
      </tr>
    </thead>

    <tfoot>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>Email</th>
        <th>Profil</th>

        ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "     <th>Statut</th>
     <th>Action</th>
     <th>Details</th>


      ";
        }
        // line 51
        echo "
      

      </tr>
    </tfoot>  
    <tbody>

  ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "
  <tr>
  <td>   ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " </td> 
  <td>   ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo " </td> 
  <td> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo " </td>
  <td> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "profil", array()), "html", null, true);
            echo " </td>
  
    

";
            // line 68
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 69
                echo "

<td> ";
                // line 71
                if (($this->getAttribute($context["user"], "valide", array()) == 1)) {
                    echo " Valide ";
                } else {
                    echo " Invalide ";
                }
                echo " </td>
<td>
      


 ";
                // line 76
                if (($this->getAttribute($context["user"], "valide", array()) == 0)) {
                    // line 77
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_valider_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> </a> &nbsp 
      ";
                } else {
                    // line 79
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_devalider_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" onclick='return confirm(\"Etes vous sûr de vouloir dévalider cet utilisateur? cette action l empêchera de se connecter à l espace par la suite\")'><span class=\"glyphicon glyphicon-thumbs-down\" style=\"color:red\"></span> </a> &nbsp 

      ";
                }
                // line 81
                echo " 
";
                // line 87
                echo "     
</td>

<td>
";
                // line 91
                if (($this->getAttribute($context["user"], "profil", array()) == "ENTREPRISE")) {
                    // line 92
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_details_entreprise", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-zoom-in\"></span> </a> &nbsp 
      ";
                } else {
                    // line 94
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("espace_details_candidat", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\" ><span class=\"glyphicon glyphicon-zoom-in\" ></span> </a> &nbsp 

      ";
                }
                // line 97
                echo "</td>
      ";
            }
            // line 99
            echo "   
  
       

    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo " 
 </tbody>
 </table>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle:Show:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 105,  205 => 99,  201 => 97,  194 => 94,  188 => 92,  186 => 91,  180 => 87,  177 => 81,  170 => 79,  164 => 77,  162 => 76,  150 => 71,  146 => 69,  144 => 68,  137 => 64,  133 => 63,  129 => 62,  125 => 61,  121 => 59,  117 => 58,  108 => 51,  100 => 45,  98 => 44,  84 => 32,  77 => 27,  75 => 26,  53 => 7,  49 => 5,  40 => 4,  11 => 2,);
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
  <li><a href=\"{{ path('espace_show_user') }}\">Users</a></li>
  <li>Liste</li>
 
</ul>

<h3>Liste des Utilisateurs</h3>



 
  
   <table class=\"data\" class=\"display\" cellspacing=\"0\" width=\"100%\">
    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>Email</th>
        <th>Profil</th>

        {% if is_granted('ROLE_ADMIN') %}
     <th>Statut</th>
     <th>Action</th>
     <th>Details</th>

      {% endif %}

         
      </tr>
    </thead>

    <tfoot>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>Email</th>
        <th>Profil</th>

        {% if is_granted('ROLE_ADMIN') %}
     <th>Statut</th>
     <th>Action</th>
     <th>Details</th>


      {% endif %}

      

      </tr>
    </tfoot>  
    <tbody>

  {% for user in listUsers %}

  <tr>
  <td>   {{ user.nom }} </td> 
  <td>   {{ user.prenom }} </td> 
  <td> {{ user.email }} </td>
  <td> {{ user.profil }} </td>
  
    

{% if is_granted('ROLE_ADMIN') %}


<td> {% if  user.valide == 1 %} Valide {%else %} Invalide {%endif%} </td>
<td>
      


 {%  if user.valide==0   %}
<a href=\"{{ path('EU_valider_user',{'id': user.id}) }}\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> </a> &nbsp 
      {% else %}
<a href=\"{{ path('EU_devalider_user',{'id': user.id}) }}\" onclick='return confirm(\"Etes vous sûr de vouloir dévalider cet utilisateur? cette action l empêchera de se connecter à l espace par la suite\")'><span class=\"glyphicon glyphicon-thumbs-down\" style=\"color:red\"></span> </a> &nbsp 

      {% endif %} 
{#
{% if user.cv %}
<a href=\"{{ path('EU_new_etudiantCV',{'id': user.id}) }}\"><span class=\"fa fa-file\"></span> </a> &nbsp 
{%endif%}
#}
     
</td>

<td>
{%  if user.profil=='ENTREPRISE'   %}
<a href=\"{{ path('espace_details_entreprise',{'id': user.id}) }}\" target=\"_blank\"><span class=\"glyphicon glyphicon-zoom-in\"></span> </a> &nbsp 
      {% else %}
<a href=\"{{ path('espace_details_candidat',{'id': user.id}) }}\" target=\"_blank\" ><span class=\"glyphicon glyphicon-zoom-in\" ></span> </a> &nbsp 

      {% endif %}
</td>
      {% endif %}
   
  
       

    </tr>
  {% endfor %}
 
 </tbody>
 </table>






{% endblock %}", "EspaceUserBundle:Show:user.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/Show/user.html.twig");
    }
}
