<?php

/* bundles/FOSUserBundle/Resetting/request.html.twig */
class __TwigTemplate_defc23be8a1f2b8e2fee5a35c11798ed2ced0967908ce63c6e0937ec3a9b382f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/FOSUserBundle/Resetting/request.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Resetting/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/Resetting/request.html.twig"));

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
                            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.msg", array(), "ums"), "html", null, true);
        echo "</p>
                            <form class=\"form-auth-small\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\"
                                  method=\"POST\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
                                           required=\"required\"
                                           placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                </div>
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\"/>
                                </div>
                                <div class=\"bottom\">
                                    <span class=\"helper-text\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.got_psw", array(), "ums"), "html", null, true);
        echo " <a
                                                href=\"/login\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.login", array(), "ums"), "html", null, true);
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
        return "bundles/FOSUserBundle/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  91 => 25,  85 => 22,  79 => 19,  71 => 14,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 2,);
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
                            <p>{{ 'resetting.msg'|trans({},'ums') }}</p>
                            <form class=\"form-auth-small\" action=\"{{ path('fos_user_resetting_send_email') }}\"
                                  method=\"POST\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
                                           required=\"required\"
                                           placeholder=\"{{ 'resetting.request.username'|trans }}\">
                                </div>
                                <div>
                                    <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" class=\"btn btn-primary btn-lg btn-block\"/>
                                </div>
                                <div class=\"bottom\">
                                    <span class=\"helper-text\">{{ 'resetting.got_psw'|trans({},'ums') }} <a
                                                href=\"/login\">{{ 'resetting.login'|trans({},'ums') }}</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "bundles/FOSUserBundle/Resetting/request.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/FOSUserBundle/Resetting/request.html.twig");
    }
}
