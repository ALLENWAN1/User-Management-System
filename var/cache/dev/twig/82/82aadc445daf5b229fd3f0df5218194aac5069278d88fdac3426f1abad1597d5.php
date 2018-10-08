<?php

/* product/product_register.html.twig */
class __TwigTemplate_f0401ecfdc0745f10d61564b5100dca466b385a38c379b36207401a8f8e5711a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "product/product_register.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product_register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/product_register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "", "", "", "", "", "active", "", "active");
        // line 5
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 8
        echo "    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"auth-box\">
                <div class=\"card\">
                    <div class=\"header\">
                        <p class=\"lead\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.title", array(), "ums"), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"body\">
                        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', array("attr" => array("class" => "form-auth-small")));
        echo "
                        <div class=\"form-group\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "product_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "product_id", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">

                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "product_name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-phone")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "barcode", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "barcode", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "image_path", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "image_path", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "category", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "category", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "shelf_life", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "shelf_life", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "promotion", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "promotion", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "stock", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "stock", array()), 'errors');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "description", array()), 'errors');
        echo "
                        </div>
                        <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.btn", array(), "ums"), "html", null, true);
        echo "\">
                        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
                        <p></p>
                        <a href=\"/product\"  class=\"btn btn-primary btn-lg btn-block\">
                            <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.return", array(), "ums"), "html", null, true);
        echo "
                        </a>
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
        return "product/product_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 57,  187 => 54,  183 => 53,  178 => 51,  174 => 50,  168 => 47,  164 => 46,  158 => 43,  154 => 42,  148 => 39,  144 => 38,  138 => 35,  134 => 34,  128 => 31,  124 => 30,  118 => 27,  114 => 26,  108 => 23,  101 => 19,  97 => 18,  92 => 16,  86 => 13,  79 => 8,  70 => 7,  57 => 5,  54 => 4,  45 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'ums' %}
{% extends 'layout.html.twig' %}
{% block sidebar %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\", \"active\" %}
    {{ parent() }}
{% endblock %}
{% block main_content %}
    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"auth-box\">
                <div class=\"card\">
                    <div class=\"header\">
                        <p class=\"lead\">{{ 'product_page.title'|trans }}</p>
                    </div>
                    <div class=\"body\">
                        {{ form_start(form, {'attr': {'class': 'form-auth-small'}}) }}
                        <div class=\"form-group\">
                            {{ form_widget(form.product_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.product_id) }}
                        </div>
                        <div class=\"form-group\">

                            {{ form_widget(form.product_name, {'attr': {'class': 'form-control', 'id': 'signup-phone'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.barcode, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.barcode) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.image_path, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.image_path) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.category, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.category) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.shelf_life, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.shelf_life) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.promotion, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.promotion) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.stock, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.stock) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                            {{ form_errors(form.description) }}
                        </div>
                        <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"{{ 'product_page.btn'|trans }}\">
                        {{ form_end(form) }}
                        <p></p>
                        <a href=\"/product\"  class=\"btn btn-primary btn-lg btn-block\">
                            <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>{{ 'product_page.return'|trans }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "product/product_register.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/product/product_register.html.twig");
    }
}
