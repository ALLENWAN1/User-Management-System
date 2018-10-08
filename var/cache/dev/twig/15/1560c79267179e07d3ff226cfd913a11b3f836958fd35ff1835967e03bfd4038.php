<?php

/* bundles/FOSUserBundle/ChangePassword/change_password.html.twig */
class __TwigTemplate_5165b49e1ef0b68b91628798eb580997b70e4c0973083e40334bd658d2505d3b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bundles/FOSUserBundle/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/ChangePassword/change_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/FOSUserBundle/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "active", "", "", "", "", "", "", "active", "");
        // line 6
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 10
        echo "    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.title", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.action.changepwd", array(), "ums"), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-4 col-sm-12 text-right\">
                        <div class=\"bh_chart hidden-xs\">
                            <div class=\"float-left m-r-15\">
                                <small>Visitors</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-user\"></i> 1,784</h6>
                            </div>
                            <span class=\"bh_visitors float-right\">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class=\"bh_chart hidden-sm\">
                            <div class=\"float-left m-r-15\">
                                <small>Visits</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-globe\"></i> 325</h6>
                            </div>
                            <span class=\"bh_visits float-right\">10,8,9,3,5,8,5</span>
                        </div>
                        <div class=\"bh_chart hidden-sm\">
                            <div class=\"float-left m-r-15\">
                                <small>Chats</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-bubbles\"></i> 13</h6>
                            </div>
                            <span class=\"bh_chats float-right\">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 col-md-12\" style=\"margin:auto\">
                <div class=\"card\">
                    <div class=\"body\">
                        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted \">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "current_password", array()), 'label');
        echo ":</small>
                            <p> ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                            <p> ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "current_password", array()), 'errors');
        echo " </p>
                        </div>
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "plainPassword", array()), "first", array()), 'label');
        echo ":</small>
                            <p> ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                            <p> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "plainPassword", array()), "first", array()), 'errors');
        echo " </p>
                        </div>
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "plainPassword", array()), "second", array()), 'label');
        echo ":</small>
                            <p> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                            <p> ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "plainPassword", array()), "second", array()), 'errors');
        echo " </p>
                            <hr>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.btn", array(), "ums"), "html", null, true);
        echo "\">&nbsp;&nbsp;
                            <a href=\"/profile\" class=\"btn btn-default\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.cancel", array(), "ums"), "html", null, true);
        echo "</a>
                        </div>
                        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
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
        return "bundles/FOSUserBundle/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 72,  180 => 70,  176 => 69,  169 => 65,  165 => 64,  161 => 63,  155 => 60,  151 => 59,  147 => 58,  141 => 55,  137 => 54,  133 => 53,  128 => 51,  93 => 19,  87 => 16,  79 => 10,  70 => 9,  57 => 6,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% trans_default_domain 'ums' %}

{% block sidebar %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"active\", \"\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\" %}
    {{ parent() }}
{% endblock %}

{% block main_content %}
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>{{ 'profile_page.title'|trans }}</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">{{ 'profile_page.action.changepwd'|trans }}</li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-4 col-sm-12 text-right\">
                        <div class=\"bh_chart hidden-xs\">
                            <div class=\"float-left m-r-15\">
                                <small>Visitors</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-user\"></i> 1,784</h6>
                            </div>
                            <span class=\"bh_visitors float-right\">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class=\"bh_chart hidden-sm\">
                            <div class=\"float-left m-r-15\">
                                <small>Visits</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-globe\"></i> 325</h6>
                            </div>
                            <span class=\"bh_visits float-right\">10,8,9,3,5,8,5</span>
                        </div>
                        <div class=\"bh_chart hidden-sm\">
                            <div class=\"float-left m-r-15\">
                                <small>Chats</small>
                                <h6 class=\"mb-0 mt-1\"><i class=\"icon-bubbles\"></i> 13</h6>
                            </div>
                            <span class=\"bh_chats float-right\">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-8 col-md-12\" style=\"margin:auto\">
                <div class=\"card\">
                    <div class=\"body\">
                        {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted \">{{ form_label(form.current_password) }}:</small>
                            <p> {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}</p>
                            <p> {{ form_errors(form.current_password) }} </p>
                        </div>
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted\">{{ form_label(form.plainPassword.first) }}:</small>
                            <p> {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}</p>
                            <p> {{ form_errors(form.plainPassword.first) }} </p>
                        </div>
                        <div class=\"form-control-errors\">
                            <small class=\"text-muted\">{{ form_label(form.plainPassword.second) }}:</small>
                            <p> {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}</p>
                            <p> {{ form_errors(form.plainPassword.second) }} </p>
                            <hr>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile_page.btn'|trans }}\">&nbsp;&nbsp;
                            <a href=\"/profile\" class=\"btn btn-default\">{{ 'profile_page.cancel'|trans }}</a>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}", "bundles/FOSUserBundle/ChangePassword/change_password.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/FOSUserBundle/ChangePassword/change_password.html.twig");
    }
}
