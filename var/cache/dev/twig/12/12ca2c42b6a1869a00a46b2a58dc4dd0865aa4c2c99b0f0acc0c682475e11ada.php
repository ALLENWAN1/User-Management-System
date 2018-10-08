<?php

/* bundles/FOSUserBundle/Security/login.html.twig */
class __TwigTemplate_75d66ebb788b1aab51ec86a5fcc162feda94435815db235c066720be38397fd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/FOSUserBundle/Security/login.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Security/login.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.title", array(), "ums"), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"body\">
                            <form class=\"form-auth-small\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                ";
        // line 14
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 17
        echo "                                ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                                    <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 18, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 20
        echo "                                <div class=\"form-group\">
                                    <label for=\"username\"
                                           class=\"control-label sr-only\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"
                                           value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"
                                           placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"control-label sr-only\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"
                                           required=\"required\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group clearfix\">
                                    <label class=\"fancy-checkbox element-left\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                        <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
                                    </label>
                                </div>
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                <div class=\"bottom\">
                                    <span class=\"helper-text m-b-10\"><i class=\"fa fa-lock\"></i> <a
                                                href=\"/resetting/request\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", array(), "ums"), "html", null, true);
        echo "</a></span>
                                    <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.have_not_account", array(), "ums"), "html", null, true);
        echo " <a href=\"/registration/user_register\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.register", array(), "ums"), "html", null, true);
        echo "</a></span>
                                </div>
                            </form>
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
        return "bundles/FOSUserBundle/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  132 => 41,  126 => 38,  120 => 35,  112 => 30,  107 => 28,  101 => 25,  97 => 24,  92 => 22,  88 => 20,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 2,);
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
                            <p class=\"lead\">{{ 'login_page.title'|trans({},'ums') }}</p>
                        </div>
                        <div class=\"body\">
                            <form class=\"form-auth-small\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                                {% endif %}
                                {% if error %}
                                    <div class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <div class=\"form-group\">
                                    <label for=\"username\"
                                           class=\"control-label sr-only\">{{ 'security.login.username'|trans }}</label>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"
                                           value=\"{{ last_username }}\" required=\"required\"
                                           placeholder=\"{{ 'security.login.username'|trans }}\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"control-label sr-only\">{{ 'security.login.password'|trans }}</label>
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"
                                           required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\">
                                </div>
                                <div class=\"form-group clearfix\">
                                    <label class=\"fancy-checkbox element-left\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                        <span>{{ 'security.login.remember_me'|trans }}</span>
                                    </label>
                                </div>
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"{{ 'security.login.submit'|trans }}\"/>
                                <div class=\"bottom\">
                                    <span class=\"helper-text m-b-10\"><i class=\"fa fa-lock\"></i> <a
                                                href=\"/resetting/request\">{{ 'login_page.forgot_password'|trans({},'ums') }}</a></span>
                                    <span>{{ 'login_page.have_not_account'|trans({},'ums') }} <a href=\"/registration/user_register\">{{ 'login_page.register'|trans({},'ums') }}</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "bundles/FOSUserBundle/Security/login.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
