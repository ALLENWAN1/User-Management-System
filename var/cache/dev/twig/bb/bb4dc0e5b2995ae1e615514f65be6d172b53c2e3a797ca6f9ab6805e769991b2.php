<?php

/* bundles/FOSUserBundle/Resetting/reset.html.twig */
class __TwigTemplate_9972af103cd7fb9cd1530a1d96c1fa53e10e9ba29916dc3514012412dbc60234 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/FOSUserBundle/Resetting/reset.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Resetting/reset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Resetting/reset.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset", array(), "ums"), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"body\">
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->source); })()))), "attr" => array("class" => "form-auth-small")));
        echo "
                            <div class=\"form-group\">
                                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "name" => "username", "required" => "required", "placeholder" => "form.new_password")));
        echo "
                            </div>
                            <div>
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "username", "name" => "username", "required" => "required", "placeholder" => "form.new_password_confirmation")));
        echo "
                                <input type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                                       class=\"btn btn-primary btn-lg btn-block\"/>
                            </div>
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
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
        return "bundles/FOSUserBundle/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  82 => 19,  78 => 18,  72 => 15,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends \"base.html.twig\" %}
{% block body %}
    <div id=\"wrapper\">
        <div class=\"vertical-align-wrap\">
            <div class=\"vertical-align-middle auth-main\">
                <div class=\"auth-box\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <p class=\"lead\">{{ 'resetting.reset'|trans({},'ums') }}</p>
                        </div>
                        <div class=\"body\">
                            {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'form-auth-small' } }) }}
                            <div class=\"form-group\">
                                {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'id': 'username', 'name': 'username', 'required': 'required', 'placeholder': 'form.new_password' }}) }}
                            </div>
                            <div>
                                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'id': 'username', 'name': 'username', 'required': 'required', 'placeholder': 'form.new_password_confirmation' }}) }}
                                <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\"
                                       class=\"btn btn-primary btn-lg btn-block\"/>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


", "bundles/FOSUserBundle/Resetting/reset.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/FOSUserBundle/Resetting/reset.html.twig");
    }
}
