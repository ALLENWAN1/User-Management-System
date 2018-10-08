<?php

/* user/register.html.twig */
class __TwigTemplate_39b130bdab6684eb186e5cd27785bd2ffdfa692264f186036cec0c4b4b9c3adb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"vertical-align-wrap\">
            <div class=\"vertical-align-middle auth-main\">
                <div class=\"auth-box\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <p class=\"lead\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.title", array(), "ums"), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"body\">
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', array("attr" => array("class" => "form-auth-small")));
        echo "
                            <div class=\"form-group\">
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-lastname")));
        echo "
                            </div>
                            <div class=\"form-group form-control-errors\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-username")));
        echo "
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "username", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group form-control-errors\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-email")));
        echo "
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "email", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "plainPassword", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-password")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "date_birth", array()), 'label');
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "date_birth", array()), 'widget', array("attr" => array("class" => "form-control-select", "id" => "signup-date_birth")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "sex", array()), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "sex", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-sex")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "id_card", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-id_card")));
        echo "
                            </div>
                            <div class=\"form-group form-control-errors\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-phone")));
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "phone", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "wechat", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-wechat")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "region", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-region")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-address")));
        echo "
                            </div>
                            <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.btn", array(), "ums"), "html", null, true);
        echo "\">
                            <div class=\"bottom\">
                                <span class=\"helper-text\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.have_an_account", array(), "ums"), "html", null, true);
        echo " <a
                                            href=\"/login\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.login", array(), "ums"), "html", null, true);
        echo "</a></span>
                            </div>
                            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  172 => 58,  168 => 57,  163 => 55,  158 => 53,  152 => 50,  146 => 47,  140 => 44,  136 => 43,  130 => 40,  124 => 37,  120 => 36,  114 => 33,  110 => 32,  104 => 29,  98 => 26,  94 => 25,  88 => 22,  84 => 21,  78 => 18,  72 => 15,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'ums' %}
{% extends 'base.html.twig' %}
{% block body %}
    <div id=\"wrapper\">
        <div class=\"vertical-align-wrap\">
            <div class=\"vertical-align-middle auth-main\">
                <div class=\"auth-box\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <p class=\"lead\">{{ 'registration_page.title'|trans }}</p>
                        </div>
                        <div class=\"body\">
                            {{ form_start(form, {'attr': {'class': 'form-auth-small'}}) }}
                            <div class=\"form-group\">
                                {{ form_widget(form.firstname, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.lastname, {'attr': {'class': 'form-control', 'id': 'signup-lastname'}}) }}
                            </div>
                            <div class=\"form-group form-control-errors\">
                                {{ form_widget(form.username, {'attr': {'class': 'form-control', 'id': 'signup-username'}}) }}
                                {{ form_errors(form.username) }}
                            </div>
                            <div class=\"form-group form-control-errors\">
                                {{ form_widget(form.email, {'attr': {'class': 'form-control', 'id': 'signup-email'}}) }}
                                {{ form_errors(form.email) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'id': 'signup-password'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(form.date_birth) }}
                                {{ form_widget(form.date_birth, {'attr': {'class': 'form-control-select', 'id': 'signup-date_birth'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(form.sex) }}
                                {{ form_widget(form.sex, {'attr': {'class': 'form-control', 'id': 'signup-sex'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.id_card, {'attr': {'class': 'form-control', 'id': 'signup-id_card'}}) }}
                            </div>
                            <div class=\"form-group form-control-errors\">
                                {{ form_widget(form.phone, {'attr': {'class': 'form-control', 'id': 'signup-phone'}}) }}
                                {{ form_errors(form.phone) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.wechat, {'attr': {'class': 'form-control', 'id': 'signup-wechat'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.region, {'attr': {'class': 'form-control', 'id': 'signup-region'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.address, {'attr': {'class': 'form-control', 'id': 'signup-address'}}) }}
                            </div>
                            <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"{{ 'registration_page.btn'|trans }}\">
                            <div class=\"bottom\">
                                <span class=\"helper-text\">{{ 'registration_page.have_an_account'|trans }} <a
                                            href=\"/login\">{{ 'registration_page.login'|trans }}</a></span>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user/register.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/user/register.html.twig");
    }
}
