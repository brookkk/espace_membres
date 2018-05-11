<?php

/* EspaceUserBundle:Security:login.html.twig */
class __TwigTemplate_0df6445b325821564b87a1a8b88908cbd03f1633b8de433772b076c8826349c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspaceUserBundle::layout.html.twig", "EspaceUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspaceUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EspaceUserBundle:Security:login.html.twig"));

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

  ";
        // line 9
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "










<form class=\"form-signin\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
      <div class=\"text-center mb-4\">
        
      </div>

      <div class=\"form-label-group\">
        <input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <label for=\"username\">Email</label>
      </div>

      <div class=\"form-label-group\">
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
        <label for=\"password\">Mot de passe</label>
      </div>

      <div class=\"checkbox mb-3\">
       <!-- <label>
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>-->
      </div>
      <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>

<br>
       <div class=\"dropdown\">
  <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Créér un compte
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" target=\"_blank\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_new_entreprise");
        echo "\">Entreprise</a>
     <a class=\"dropdown-item\" target=\"_blank\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EU_new_etudiant");
        echo "\">Candidat</a>

    
    
  </div>
</div>



    </form>

















  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EspaceUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 52,  106 => 51,  75 => 23,  62 => 12,  56 => 10,  53 => 9,  49 => 6,  40 => 5,  11 => 2,);
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
 {% extends \"EspaceUserBundle::layout.html.twig\" %}


{% block body %}


  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}











<form class=\"form-signin\" action=\"{{ path('login_check') }}\" method=\"post\">
      <div class=\"text-center mb-4\">
        
      </div>

      <div class=\"form-label-group\">
        <input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Email\" required autofocus>
        <label for=\"username\">Email</label>
      </div>

      <div class=\"form-label-group\">
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
        <label for=\"password\">Mot de passe</label>
      </div>

      <div class=\"checkbox mb-3\">
       <!-- <label>
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>-->
      </div>
      <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>

<br>
       <div class=\"dropdown\">
  <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Créér un compte
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" target=\"_blank\" href=\"{{ path('EU_new_entreprise') }}\">Entreprise</a>
     <a class=\"dropdown-item\" target=\"_blank\" href=\"{{ path('EU_new_etudiant') }}\">Candidat</a>

    
    
  </div>
</div>



    </form>

















  

{% endblock %}", "EspaceUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/espace_membres/src/Espace/UserBundle/Resources/views/Security/login.html.twig");
    }
}
