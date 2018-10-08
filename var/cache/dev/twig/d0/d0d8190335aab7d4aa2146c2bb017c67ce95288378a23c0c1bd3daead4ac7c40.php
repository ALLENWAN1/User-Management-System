<?php

/* user/confirm_email.html.twig */
class __TwigTemplate_b99ad96e98e6fee77330870d4a8402c2e341164168d1e6d22b2d077758937beb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/confirm_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/confirm_email.html.twig"));

        // line 2
        echo "<h2>UMS TEST</h2>
<br>
<h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.email_to_send.message1", array("%username%" => (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 4, $this->source); })())), "ums"), "html", null, true);
        echo "</h4>
<br>
";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.email_to_send.message2", array("%confirmationUrl%" => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 6, $this->source); })())), "ums"), "html", null, true);
        echo "
<br>
<br>
";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.email_to_send.message3", array(), "ums"), "html", null, true);
        echo "
<br>
";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.email_to_send.message4", array(), "ums"), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/confirm_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  38 => 6,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'ums' %}
<h2>UMS TEST</h2>
<br>
<h4>{{ 'registration_page.email_to_send.message1'|trans({'%username%': username}) }}</h4>
<br>
{{ 'registration_page.email_to_send.message2'|trans({'%confirmationUrl%': url}) }}
<br>
<br>
{{ 'registration_page.email_to_send.message3'|trans() }}
<br>
{{ 'registration_page.email_to_send.message4'|trans() }}", "user/confirm_email.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/user/confirm_email.html.twig");
    }
}
