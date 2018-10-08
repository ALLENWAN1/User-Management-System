<?php

/* user/userList_admins.html.twig */
class __TwigTemplate_1ddc44c4575dca3baa91a943cd81d7885aab053a4dabcd8ed3f77198cfc6feee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/userList_admins.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_content' => array($this, 'block_main_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/userList_admins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/userList_admins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 15
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "", "", "", "", "active", "", "", "active");
        // line 16
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 20
        echo "    <div id=\"overlay\"></div>
    <div id=\"popupBox\" class=\"animated flipInY\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.add_seller_admin", array(), "ums"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"body\">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                <small class=\"text-muted\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "username", array()), 'label');
        echo " *</small>
                <p>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\" id=\"error_username\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "username", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "firstname", array()), 'label');
        echo "</small>
                <p>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <hr>
                <small class=\"text-muted\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "lastname", array()), 'label');
        echo " *</small>
                <p>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "lastname", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "sex", array()), 'label');
        echo " *</small>
                <p>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "sex", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <hr>
                <small class=\"text-muted\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "email", array()), 'label');
        echo " *</small>
                <p>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\" id=\"error_email\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "email", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "id_card", array()), 'label');
        echo " *</small>
                <p>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "id_card", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "id_card", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "date_birth", array()), 'label');
        echo "</small>
                <p>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "date_birth", array()), 'widget');
        echo "</p>
                <hr>
                <small class=\"text-muted\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "phone", array()), 'label');
        echo " *</small>
                <p>";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\" id=\"error_phone\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "phone", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "wechat", array()), 'label');
        echo "</small>
                <p>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "wechat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <hr>
                <small class=\"text-muted\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "address", array()), 'label');
        echo " *</small>
                <p>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "address", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "region", array()), 'label');
        echo " *</small>
                <p>";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "region", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "plainPassword", array()), 'label');
        echo " *</small>
                <p>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "plainPassword", array()), 'errors');
        echo "</div>
                <hr>
                <small class=\"text-muted\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "enabled", array()), 'label');
        echo " *</small>
                <p>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "enabled", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <hr>
                <small class=\"text-muted\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "roles", array()), 'label');
        echo " *</small>
                <p>";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
                <div class=\"form-control-errors\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "roles", array()), 'errors');
        echo "</div>
                <hr>
                <div class=\"text-center\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.btn.submit", array(), "ums"), "html", null, true);
        echo "\">&nbsp;&nbsp;
                    <a href=\"javascript:void(0)\" id=\"popupCancel\" class=\"btn btn-default\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.btn.cancel", array(), "ums"), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.title_admins", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.title_admins", array(), "ums"), "html", null, true);
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

            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15 text-white\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.add_admin", array(), "ums"), "html", null, true);
        echo "</a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-left\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.name", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.username", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.sex.title", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.email", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.employee_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_birth", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.id_card", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.phone", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.wechat", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.address", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.region", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.responsible_region", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.enabled.title", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_register", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.action", array(), "ums"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 153
            echo "                                        <tr>
                                            <td class=\"text-left\">
                                                <span class=\"font-weight-bold\">";
            // line 155
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastname", array())), "html", null, true);
            echo "</span>
                                            </td>
                                            <td>
                                                ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, $context["user"], "sex", array())) {
                $context["user_sex"] = ("user_infos.sex." . twig_get_attribute($this->env, $this->source, $context["user"], "sex", array()));
                // line 162
                echo "                                                ";
            } else {
                $context["user_sex"] = "user_infos.sex.0";
            }
            // line 163
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_sex"]) || array_key_exists("user_sex", $context) ? $context["user_sex"] : (function () { throw new Twig_Error_Runtime('Variable "user_sex" does not exist.', 163, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datebirth", array()), "Y年m月d日"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "idcard", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "wechat", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", array()), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 187
            $context["user_region"] = ("region." . twig_get_attribute($this->env, $this->source, $context["user"], "region", array()));
            // line 188
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_region"]) || array_key_exists("user_region", $context) ? $context["user_region"] : (function () { throw new Twig_Error_Runtime('Variable "user_region" does not exist.', 188, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "responsibleregion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 192
                echo "                                                    ";
                if ( !twig_test_empty($context["r"])) {
                    // line 193
                    echo "                                                        ";
                    $context["rt"] = ("region." . $context["r"]);
                    // line 194
                    echo "                                                        [<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["rt"]) || array_key_exists("rt", $context) ? $context["rt"] : (function () { throw new Twig_Error_Runtime('Variable "rt" does not exist.', 194, $this->source); })()), array(), "ums"), "html", null, true);
                    echo "</span>]
                                                    ";
                }
                // line 196
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                            </td>
                                            <td>
                                                ";
            // line 199
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array())) {
                $context["user_enabeld"] = ("user_infos.enabled." . twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array()));
                // line 200
                echo "                                                ";
            } else {
                $context["user_enabeld"] = "user_infos.enabled.0";
            }
            // line 201
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_enabeld"]) || array_key_exists("user_enabeld", $context) ? $context["user_enabeld"] : (function () { throw new Twig_Error_Runtime('Variable "user_enabeld" does not exist.', 201, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 204
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateregister", array()), "Y年m月d日"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <a href=\"/userList/edit/";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "&Admins\" class=\"btn btn-info\" title=\"Edit\"><i
                                                            class=\"fa fa-edit\"></i></a>
                                                <a href=\"/userList/delete/";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "&Admins\" class=\"btn btn-danger delete_user_confirm\" title=\"Delete\"><i
                                                            class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                                    </tbody>
                                </table>
                            </div>
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

    // line 225
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 226
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#app_userList_add_roles').removeAttr(\"multiple\");
            \$('.delete_user_confirm').click(function(e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });
            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该管理员吗？\",
                    text: \"该操作无法恢复！\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#dc3545\",
                    confirmButtonText: \"确定删除！\",
                    cancelButtonText: \"取消\"
                }, function() {
                    window.location.href = linkURL;
                });
            };
            \$('#addRow').click(function () {
                \$('#overlay').fadeIn('fast');
                \$('#popupBox').fadeIn('fast');
                \$('#popupContent').fadeIn('fast');
            });

            \$('#overlay, #popupCancel').click(function () {
                \$('#overlay').fadeOut('fast');
                \$('#popupBox').fadeOut('fast');
                \$('#popupContent').fadeOut('fast');
            });

            if ( \$('#error_username').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该用户名已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
            if ( \$('#error_email').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该邮箱已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
            if ( \$('#error_phone').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该手机号已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/userList_admins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 234,  641 => 233,  637 => 232,  633 => 231,  629 => 230,  625 => 229,  621 => 228,  617 => 227,  612 => 226,  603 => 225,  584 => 214,  573 => 209,  568 => 207,  562 => 204,  555 => 201,  550 => 200,  547 => 199,  543 => 197,  537 => 196,  531 => 194,  528 => 193,  525 => 192,  521 => 191,  514 => 188,  512 => 187,  506 => 184,  500 => 181,  494 => 178,  488 => 175,  482 => 172,  476 => 169,  470 => 166,  463 => 163,  458 => 162,  455 => 161,  449 => 158,  443 => 155,  439 => 153,  435 => 152,  428 => 148,  424 => 147,  420 => 146,  416 => 145,  412 => 144,  408 => 143,  404 => 142,  400 => 141,  396 => 140,  392 => 139,  388 => 138,  384 => 137,  380 => 136,  376 => 135,  372 => 134,  364 => 129,  328 => 96,  322 => 93,  309 => 83,  304 => 81,  300 => 80,  294 => 77,  290 => 76,  286 => 75,  281 => 73,  277 => 72,  272 => 70,  268 => 69,  264 => 68,  259 => 66,  255 => 65,  251 => 64,  246 => 62,  242 => 61,  238 => 60,  233 => 58,  229 => 57,  224 => 55,  220 => 54,  216 => 53,  211 => 51,  207 => 50,  202 => 48,  198 => 47,  194 => 46,  189 => 44,  185 => 43,  181 => 42,  176 => 40,  172 => 39,  167 => 37,  163 => 36,  159 => 35,  154 => 33,  150 => 32,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  127 => 24,  121 => 20,  112 => 19,  99 => 16,  96 => 15,  87 => 14,  75 => 11,  71 => 10,  66 => 8,  61 => 6,  56 => 5,  47 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% trans_default_domain 'ums' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/sweetalert/sweetalert.css') }}\"/>
{% endblock %}

{% block sidebar %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\", \"\", \"active\" %}
    {{ parent() }}
{% endblock %}

{% block main_content %}
    <div id=\"overlay\"></div>
    <div id=\"popupBox\" class=\"animated flipInY\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <h2>{{ 'userList_pages.add_seller_admin'|trans }}</h2>
            </div>
            <div class=\"body\">
                {{ form_start(form) }}
                <small class=\"text-muted\">{{ form_label(form.username) }} *</small>
                <p>{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\" id=\"error_username\">{{ form_errors(form.username) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.firstname) }}</small>
                <p>{{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}</p>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.lastname) }} *</small>
                <p>{{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.lastname) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.sex) }} *</small>
                <p>{{ form_widget(form.sex, {'attr': {'class': 'form-control'}}) }}</p>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.email) }} *</small>
                <p>{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\" id=\"error_email\">{{ form_errors(form.email) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.id_card) }} *</small>
                <p>{{ form_widget(form.id_card, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.id_card) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.date_birth) }}</small>
                <p>{{ form_widget(form.date_birth) }}</p>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.phone) }} *</small>
                <p>{{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\" id=\"error_phone\">{{ form_errors(form.phone) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.wechat) }}</small>
                <p>{{ form_widget(form.wechat, {'attr': {'class': 'form-control'}}) }}</p>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.address) }} *</small>
                <p>{{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.address) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.region) }} *</small>
                <p>{{ form_widget(form.region, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.region) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.plainPassword) }} *</small>
                <p>{{ form_widget(form.plainPassword, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.plainPassword) }}</div>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.enabled) }} *</small>
                <p>{{ form_widget(form.enabled, {'attr': {'class': 'form-control'}}) }}</p>
                <hr>
                <small class=\"text-muted\">{{ form_label(form.roles) }} *</small>
                <p>{{ form_widget(form.roles, {'attr': {'class': 'form-control'}}) }}</p>
                <div class=\"form-control-errors\">{{ form_errors(form.roles) }}</div>
                <hr>
                <div class=\"text-center\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'user_infos.btn.submit'|trans }}\">&nbsp;&nbsp;
                    <a href=\"javascript:void(0)\" id=\"popupCancel\" class=\"btn btn-default\">{{ 'user_infos.btn.cancel'|trans }}</a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>{{ 'userList_pages.title_admins'|trans }}</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">{{ 'userList_pages.title_admins'|trans }}</li>
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

            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15 text-white\">{{ 'userList_pages.add_admin'|trans }}</a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-left\">{{ 'user_infos.name'|trans }}</th>
                                        <th>{{ 'user_infos.username'|trans }}</th>
                                        <th>{{ 'user_infos.sex.title'|trans }}</th>
                                        <th>{{ 'user_infos.email'|trans }}</th>
                                        <th>{{ 'user_infos.employee_id'|trans }}</th>
                                        <th>{{ 'user_infos.date_birth'|trans }}</th>
                                        <th>{{ 'user_infos.id_card'|trans }}</th>
                                        <th>{{ 'user_infos.phone'|trans }}</th>
                                        <th>{{ 'user_infos.wechat'|trans }}</th>
                                        <th>{{ 'user_infos.address'|trans }}</th>
                                        <th>{{ 'user_infos.region'|trans }}</th>
                                        <th>{{ 'user_infos.responsible_region'|trans }}</th>
                                        <th>{{ 'user_infos.enabled.title'|trans }}</th>
                                        <th>{{ 'user_infos.date_register'|trans }}</th>
                                        <th>{{ 'userList_pages.action'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for user in users %}
                                        <tr>
                                            <td class=\"text-left\">
                                                <span class=\"font-weight-bold\">{{ user.firstname ~ \" \" ~ user.lastname }}</span>
                                            </td>
                                            <td>
                                                {{ user.username }}
                                            </td>
                                            <td>
                                                {% if user.sex %}{% set user_sex = 'user_infos.sex.' ~ user.sex %}
                                                {% else %}{% set user_sex = 'user_infos.sex.0' %}{% endif %}
                                                {{ user_sex|trans }}
                                            </td>
                                            <td>
                                                {{ user.email }}
                                            </td>
                                            <td>
                                                {{ user.userid }}
                                            </td>
                                            <td>
                                                {{ user.datebirth|date('Y年m月d日') }}
                                            </td>
                                            <td>
                                                {{ user.idcard }}
                                            </td>
                                            <td>
                                                {{ user.phone }}
                                            </td>
                                            <td>
                                                {{ user.wechat }}
                                            </td>
                                            <td>
                                                {{ user.address }}
                                            </td>
                                            <td>
                                                {% set user_region = 'region.'~user.region %}
                                                {{ user_region|trans }}
                                            </td>
                                            <td>
                                                {% for r in user.responsibleregion %}
                                                    {% if r is not empty %}
                                                        {% set rt = 'region.' ~ r %}
                                                        [<span>{{ rt|trans }}</span>]
                                                    {% endif %}
                                                {% endfor %}
                                            </td>
                                            <td>
                                                {% if user.enabled %}{% set user_enabeld = 'user_infos.enabled.' ~ user.enabled %}
                                                {% else %}{% set user_enabeld = 'user_infos.enabled.0' %}{% endif %}
                                                {{ user_enabeld|trans }}
                                            </td>
                                            <td>
                                                {{ user.dateregister|date('Y年m月d日') }}
                                            </td>
                                            <td>
                                                <a href=\"/userList/edit/{{ user.userid }}&Admins\" class=\"btn btn-info\" title=\"Edit\"><i
                                                            class=\"fa fa-edit\"></i></a>
                                                <a href=\"/userList/delete/{{ user.userid }}&Admins\" class=\"btn btn-danger delete_user_confirm\" title=\"Delete\"><i
                                                            class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles_js/datatablescripts.bundle.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-datatable/buttons/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/jquery-datatable/buttons/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/sweetalert/sweetalert.min.js') }}\"></script>
    <script src=\"{{ asset('js/pages/tables/jquery-datatable.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('#app_userList_add_roles').removeAttr(\"multiple\");
            \$('.delete_user_confirm').click(function(e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });
            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该管理员吗？\",
                    text: \"该操作无法恢复！\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#dc3545\",
                    confirmButtonText: \"确定删除！\",
                    cancelButtonText: \"取消\"
                }, function() {
                    window.location.href = linkURL;
                });
            };
            \$('#addRow').click(function () {
                \$('#overlay').fadeIn('fast');
                \$('#popupBox').fadeIn('fast');
                \$('#popupContent').fadeIn('fast');
            });

            \$('#overlay, #popupCancel').click(function () {
                \$('#overlay').fadeOut('fast');
                \$('#popupBox').fadeOut('fast');
                \$('#popupContent').fadeOut('fast');
            });

            if ( \$('#error_username').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该用户名已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
            if ( \$('#error_email').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该邮箱已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
            if ( \$('#error_phone').html().length > 0 ) {
                swal({
                    title: \"出错啦\",
                    text: \"该手机号已被注册！\",
                    type: \"error\"
                });
                \$('.sweet-alert p').attr('style', 'display:block;color:#de4848');
            }
        })
    </script>
{% endblock %}", "user/userList_admins.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/user/userList_admins.html.twig");
    }
}
