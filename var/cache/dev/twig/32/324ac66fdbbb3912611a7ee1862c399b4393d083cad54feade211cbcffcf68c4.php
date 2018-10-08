<?php

/* tracking/index.html.twig */
class __TwigTemplate_af7286c47d86e094fed47c4354d20c5b36a19e60579a7f07c5549f9b4f7aaa83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "tracking/index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tracking/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tracking/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/popup_box.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 14
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "", "active", "", "", "", "", "", "active");
        // line 15
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 18
        echo "<div id=\"overlay\"></div>
    <div id=\"popupBox\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <p class=\"lead\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.title", array(), "ums"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"body\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', array("attr" => array("class" => "form-auth-small")));
        echo "
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "product_id", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "product_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-phone")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "production_date", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "production_date", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "production_date", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "batch_id", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "batch_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "batch_id", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "starting_time", array()), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "starting_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "starting_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "ranch_id", array()), 'label');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "ranch_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "ranch_id", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "milk_collection_time", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "milk_collection_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "milk_collection_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "ranch_responsible", array()), 'label');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "ranch_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "ranch_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "factory", array()), 'label');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "factory", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "factory", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "factory_processing_time", array()), 'label');
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "factory_processing_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "factory_processing_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "factory_responsible", array()), 'label');
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "factory_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "factory_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "factory_delivery_time", array()), 'label');
        echo "
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "factory_delivery_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "factory_delivery_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "factory_delivery_responsible", array()), 'label');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "factory_delivery_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "factory_delivery_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "export_time", array()), 'label');
        echo "
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "export_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "export_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "export_responsible", array()), 'label');
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "export_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), "export_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->source); })()), "import_time", array()), 'label');
        echo "
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "import_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "import_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "import_responsible", array()), 'label');
        echo "
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "import_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), "import_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "center_arrival_time", array()), 'label');
        echo "
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), "center_arrival_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), "center_arrival_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "arrival_responsible", array()), 'label');
        echo "
                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "arrival_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->source); })()), "arrival_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->source); })()), "site_1", array()), 'label');
        echo "
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->source); })()), "site_1", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "site_1", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->source); })()), "site_1_delivery_time", array()), 'label');
        echo "
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "site_1_delivery_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "site_1_delivery_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "site_1_responsible", array()), 'label');
        echo "
                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->source); })()), "site_1_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "site_1_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->source); })()), "site_2", array()), 'label');
        echo "
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "site_2", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "site_2", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->source); })()), "site_2_delivery_time", array()), 'label');
        echo "
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), "site_2_delivery_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "site_2_delivery_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "site_2_responsible", array()), 'label');
        echo "
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->source); })()), "site_2_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->source); })()), "site_2_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->source); })()), "site_3", array()), 'label');
        echo "
                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->source); })()), "site_3", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->source); })()), "site_3", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 151, $this->source); })()), "site_3_delivery_time", array()), 'label');
        echo "
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 152, $this->source); })()), "site_3_delivery_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->source); })()), "site_3_delivery_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->source); })()), "site_3_responsible", array()), 'label');
        echo "
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "site_3_responsible", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->source); })()), "site_3_responsible", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->source); })()), "client_id", array()), 'label');
        echo "
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 162, $this->source); })()), "client_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->source); })()), "client_id", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->source); })()), "purchase_time", array()), 'label');
        echo "
                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), "purchase_time", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->source); })()), "purchase_time", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->source); })()), "seller_id", array()), 'label');
        echo "
                    ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->source); })()), "seller_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->source); })()), "seller_id", array()), 'errors');
        echo "
                </div>
                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.btn", array(), "ums"), "html", null, true);
        echo "\">
                ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->source); })()), 'form_end');
        echo "
                <p></p>
                <a href=\"/tracking/data\"  class=\"btn btn-primary btn-lg btn-block\">
                    <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.return", array(), "ums"), "html", null, true);
        echo "
                </a>
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
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.page_title", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.page_title", array(), "ums"), "html", null, true);
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
                        <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15\">
                            <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.add_row", array(), "ums"), "html", null, true);
        echo "
                        </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                <thead>
                                <tr>
                                    <th>";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.tracking_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.production_date", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.batch_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.starting_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.ranch_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.milk_collection_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.ranch_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_processing_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_delivery_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.export_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.export_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.import_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.import_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.center_arrival_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.arrival_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.client_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.purchase_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.seller_id", array(), "ums"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.tracking_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.production_date", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.batch_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.starting_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.ranch_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.milk_collection_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.ranch_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_processing_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.factory_delivery_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.export_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.export_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.import_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.import_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.center_arrival_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.arrival_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_1_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_2_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3_delivery_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.site_3_responsible", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.client_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.purchase_time", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tracking_page.seller_id", array(), "ums"), "html", null, true);
        echo "</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracking"]) || array_key_exists("tracking", $context) ? $context["tracking"] : (function () { throw new Twig_Error_Runtime('Variable "tracking" does not exist.', 302, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 303
            echo "                                    <tr class=\"gradeA\">
                                        <td><a href=\"/tracking/";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "TrackingId", array()), "html", null, true);
            echo "&product\" >
                                        ";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "TrackingId", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ProductId", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 307
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ProductionDate", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "BatchId", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 309
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "StartingTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "RanchId", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 311
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "MilkCollectionTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "RanchResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Factory", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 314
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "FactoryProcessingTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "FactoryResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 316
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "FactoryDeliveryTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "FactoryDeliveryResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 318
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ExportTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ExportResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 320
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ImportTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 321
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ImportResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 322
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "CenterArrivalTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ArrivalResponsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site1", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 325
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site1DeliveryTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site1Responsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site2", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 328
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site2DeliveryTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site2Responsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site3", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 331
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site3DeliveryTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Site3Responsible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 333
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "ClientId", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 334
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "PurchaseTime", array()), "Y年m月d日h:m:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "SellerId", array()), "html", null, true);
            echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"/tracking/edit/";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "TrackingId", array()), "html", null, true);
            echo "&product\" class=\"btn btn-info\" title=\"edit\">
                                                <i class=\"fa fa-edit\"></i></a>
                                            <a href=\"/tracking/delete/";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "TrackingId", array()), "html", null, true);
            echo "&product\" class=\"btn btn-danger delete_product_confirm\" title=\"Delete\">
                                                <i class=\"fa fa-trash-o\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                </tbody>
                            </table>
                            </button>
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

    // line 354
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 355
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {
            \$('.delete_product_confirm').click(function (e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });

            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该记录吗？\",
                    text: \"该操作无法恢复！\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#dc3545\",
                    confirmButtonText: \"确定删除\",
                    cancelButtonText: \"取消\"
                }, function () {
                    window.location.href = linkURL;
                });
            };
        })
    </script>

    <script>
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

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tracking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1099 => 363,  1095 => 362,  1091 => 361,  1087 => 360,  1083 => 359,  1079 => 358,  1075 => 357,  1071 => 356,  1066 => 355,  1057 => 354,  1038 => 344,  1027 => 339,  1022 => 337,  1017 => 335,  1013 => 334,  1009 => 333,  1005 => 332,  1001 => 331,  997 => 330,  993 => 329,  989 => 328,  985 => 327,  981 => 326,  977 => 325,  973 => 324,  969 => 323,  965 => 322,  961 => 321,  957 => 320,  953 => 319,  949 => 318,  945 => 317,  941 => 316,  937 => 315,  933 => 314,  929 => 313,  925 => 312,  921 => 311,  917 => 310,  913 => 309,  909 => 308,  905 => 307,  901 => 306,  897 => 305,  893 => 304,  890 => 303,  886 => 302,  879 => 298,  875 => 297,  871 => 296,  867 => 295,  863 => 294,  859 => 293,  855 => 292,  851 => 291,  847 => 290,  843 => 289,  839 => 288,  835 => 287,  831 => 286,  827 => 285,  823 => 284,  819 => 283,  815 => 282,  811 => 281,  807 => 280,  803 => 279,  799 => 278,  795 => 277,  791 => 276,  787 => 275,  783 => 274,  779 => 273,  775 => 272,  771 => 271,  767 => 270,  763 => 269,  759 => 268,  751 => 263,  747 => 262,  743 => 261,  739 => 260,  735 => 259,  731 => 258,  727 => 257,  723 => 256,  719 => 255,  715 => 254,  711 => 253,  707 => 252,  703 => 251,  699 => 250,  695 => 249,  691 => 248,  687 => 247,  683 => 246,  679 => 245,  675 => 244,  671 => 243,  667 => 242,  663 => 241,  659 => 240,  655 => 239,  651 => 238,  647 => 237,  643 => 236,  639 => 235,  635 => 234,  631 => 233,  622 => 227,  585 => 193,  579 => 190,  565 => 179,  559 => 176,  555 => 175,  550 => 173,  546 => 172,  542 => 171,  536 => 168,  532 => 167,  528 => 166,  522 => 163,  518 => 162,  514 => 161,  508 => 158,  504 => 157,  500 => 156,  494 => 153,  490 => 152,  486 => 151,  480 => 148,  476 => 147,  472 => 146,  466 => 143,  462 => 142,  458 => 141,  452 => 138,  448 => 137,  444 => 136,  438 => 133,  434 => 132,  430 => 131,  424 => 128,  420 => 127,  416 => 126,  410 => 123,  406 => 122,  402 => 121,  396 => 118,  392 => 117,  388 => 116,  382 => 113,  378 => 112,  374 => 111,  368 => 108,  364 => 107,  360 => 106,  354 => 103,  350 => 102,  346 => 101,  340 => 98,  336 => 97,  332 => 96,  326 => 93,  322 => 92,  318 => 91,  312 => 88,  308 => 87,  304 => 86,  298 => 83,  294 => 82,  290 => 81,  284 => 78,  280 => 77,  276 => 76,  270 => 73,  266 => 72,  262 => 71,  256 => 68,  252 => 67,  248 => 66,  242 => 63,  238 => 62,  234 => 61,  228 => 58,  224 => 57,  220 => 56,  214 => 53,  210 => 52,  206 => 51,  200 => 48,  196 => 47,  192 => 46,  186 => 43,  182 => 42,  178 => 41,  172 => 38,  168 => 37,  164 => 36,  158 => 33,  154 => 32,  150 => 31,  144 => 28,  140 => 27,  135 => 25,  129 => 22,  123 => 18,  114 => 17,  101 => 15,  98 => 14,  89 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  56 => 6,  47 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'ums' %}
{% extends 'layout.html.twig' %}


{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/sweetalert/sweetalert.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/popup_box.css') }}\"/>
{% endblock %}
{% block sidebar %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"\", \"active\", \"\", \"\", \"\", \"\", \"\", \"active\" %}
    {{ parent() }}
{% endblock %}
{% block main_content %}
<div id=\"overlay\"></div>
    <div id=\"popupBox\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <p class=\"lead\">{{ 'tracking_page.title'|trans }}</p>
            </div>
            <div class=\"body\">
                {{ form_start(form, {'attr': {'class': 'form-auth-small'}}) }}
                <div class=\"form-group\">
                    {{ form_label(form.product_id) }}
                    {{ form_widget(form.product_id, {'attr': {'class': 'form-control', 'id': 'signup-phone'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.production_date) }}
                    {{ form_widget(form.production_date, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.production_date) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.batch_id) }}
                    {{ form_widget(form.batch_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.batch_id) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.starting_time) }}
                    {{ form_widget(form.starting_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.starting_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.ranch_id) }}
                    {{ form_widget(form.ranch_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.ranch_id) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.milk_collection_time) }}
                    {{ form_widget(form.milk_collection_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.milk_collection_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.ranch_responsible) }}
                    {{ form_widget(form.ranch_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.ranch_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.factory) }}
                    {{ form_widget(form.factory, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.factory) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.factory_processing_time) }}
                    {{ form_widget(form.factory_processing_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.factory_processing_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.factory_responsible) }}
                    {{ form_widget(form.factory_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.factory_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.factory_delivery_time) }}
                    {{ form_widget(form.factory_delivery_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.factory_delivery_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.factory_delivery_responsible) }}
                    {{ form_widget(form.factory_delivery_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.factory_delivery_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.export_time) }}
                    {{ form_widget(form.export_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.export_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.export_responsible) }}
                    {{ form_widget(form.export_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.export_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.import_time) }}
                    {{ form_widget(form.import_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.import_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.import_responsible) }}
                    {{ form_widget(form.import_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.import_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.center_arrival_time) }}
                    {{ form_widget(form.center_arrival_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.center_arrival_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.arrival_responsible) }}
                    {{ form_widget(form.arrival_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.arrival_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_1) }}
                    {{ form_widget(form.site_1, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_1) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_1_delivery_time) }}
                    {{ form_widget(form.site_1_delivery_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_1_delivery_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_1_responsible) }}
                    {{ form_widget(form.site_1_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_1_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_2) }}
                    {{ form_widget(form.site_2, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_2) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_2_delivery_time) }}
                    {{ form_widget(form.site_2_delivery_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_2_delivery_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_2_responsible) }}
                    {{ form_widget(form.site_2_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_2_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_3) }}
                    {{ form_widget(form.site_3, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_3) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_3_delivery_time) }}
                    {{ form_widget(form.site_3_delivery_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_3_delivery_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.site_3_responsible) }}
                    {{ form_widget(form.site_3_responsible, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.site_3_responsible) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.client_id) }}
                    {{ form_widget(form.client_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.client_id) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.purchase_time) }}
                    {{ form_widget(form.purchase_time, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.purchase_time) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.seller_id) }}
                    {{ form_widget(form.seller_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.seller_id) }}
                </div>
                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"{{ 'tracking_page.btn'|trans }}\">
                {{ form_end(form) }}
                <p></p>
                <a href=\"/tracking/data\"  class=\"btn btn-primary btn-lg btn-block\">
                    <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>{{ 'tracking_page.return'|trans }}
                </a>
            </div>
        </div>
    </div>
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>{{ 'tracking_page.page_title'|trans }}</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">{{ 'tracking_page.page_title'|trans }}</li>
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
                        <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15\">
                            <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>{{ 'tracking_page.add_row'|trans }}
                        </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                <thead>
                                <tr>
                                    <th>{{ 'tracking_page.tracking_id' | trans }}</th>
                                    <th>{{ 'tracking_page.product_id' | trans }}</th>
                                    <th>{{ 'tracking_page.production_date' | trans }}</th>
                                    <th>{{ 'tracking_page.batch_id' | trans }}</th>
                                    <th>{{ 'tracking_page.starting_time' | trans }}</th>
                                    <th>{{ 'tracking_page.ranch_id' | trans }}</th>
                                    <th>{{ 'tracking_page.milk_collection_time' | trans }}</th>
                                    <th>{{ 'tracking_page.ranch_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.factory' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_processing_time' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_delivery_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.export_time' | trans }}</th>
                                    <th>{{ 'tracking_page.export_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.import_time' | trans }}</th>
                                    <th>{{ 'tracking_page.import_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.center_arrival_time' | trans }}</th>
                                    <th>{{ 'tracking_page.arrival_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.client_id' | trans }}</th>
                                    <th>{{ 'tracking_page.purchase_time' | trans }}</th>
                                    <th>{{ 'tracking_page.seller_id' | trans }}</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>{{ 'tracking_page.tracking_id' | trans }}</th>
                                    <th>{{ 'tracking_page.product_id' | trans }}</th>
                                    <th>{{ 'tracking_page.production_date' | trans }}</th>
                                    <th>{{ 'tracking_page.batch_id' | trans }}</th>
                                    <th>{{ 'tracking_page.starting_time' | trans }}</th>
                                    <th>{{ 'tracking_page.ranch_id' | trans }}</th>
                                    <th>{{ 'tracking_page.milk_collection_time' | trans }}</th>
                                    <th>{{ 'tracking_page.ranch_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.factory' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_processing_time' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.factory_delivery_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.export_time' | trans }}</th>
                                    <th>{{ 'tracking_page.export_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.import_time' | trans }}</th>
                                    <th>{{ 'tracking_page.import_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.center_arrival_time' | trans }}</th>
                                    <th>{{ 'tracking_page.arrival_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_1_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_2_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3_delivery_time' | trans }}</th>
                                    <th>{{ 'tracking_page.site_3_responsible' | trans }}</th>
                                    <th>{{ 'tracking_page.client_id' | trans }}</th>
                                    <th>{{ 'tracking_page.purchase_time' | trans }}</th>
                                    <th>{{ 'tracking_page.seller_id' | trans }}</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                {% for t in tracking %}
                                    <tr class=\"gradeA\">
                                        <td><a href=\"/tracking/{{ t.TrackingId }}&product\" >
                                        {{ t.TrackingId }}</a></td>
                                        <td>{{ t.ProductId }}</td>
                                        <td>{{ t.ProductionDate|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.BatchId }}</td>
                                        <td>{{ t.StartingTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.RanchId }}</td>
                                        <td>{{ t.MilkCollectionTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.RanchResponsible }}</td>
                                        <td>{{ t.Factory }}</td>
                                        <td>{{ t.FactoryProcessingTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.FactoryResponsible }}</td>
                                        <td>{{ t.FactoryDeliveryTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.FactoryDeliveryResponsible }}</td>
                                        <td>{{ t.ExportTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.ExportResponsible }}</td>
                                        <td>{{ t.ImportTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.ImportResponsible }}</td>
                                        <td>{{ t.CenterArrivalTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.ArrivalResponsible }}</td>
                                        <td>{{ t.Site1 }}</td>
                                        <td>{{ t.Site1DeliveryTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.Site1Responsible }}</td>
                                        <td>{{ t.Site2 }}</td>
                                        <td>{{ t.Site2DeliveryTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.Site2Responsible }}</td>
                                        <td>{{ t.Site3 }}</td>
                                        <td>{{ t.Site3DeliveryTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.Site3Responsible }}</td>
                                        <td>{{ t.ClientId }}</td>
                                        <td>{{ t.PurchaseTime|date('Y年m月d日h:m:s') }}</td>
                                        <td>{{ t.SellerId }}</td>
                                        <td class=\"actions\">
                                            <a href=\"/tracking/edit/{{ t.TrackingId }}&product\" class=\"btn btn-info\" title=\"edit\">
                                                <i class=\"fa fa-edit\"></i></a>
                                            <a href=\"/tracking/delete/{{ t.TrackingId }}&product\" class=\"btn btn-danger delete_product_confirm\" title=\"Delete\">
                                                <i class=\"fa fa-trash-o\"></i></a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            </button>
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
            \$('.delete_product_confirm').click(function (e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });

            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该记录吗？\",
                    text: \"该操作无法恢复！\",
                    type: \"warning\",
                    showCancelButton: true,
                    confirmButtonColor: \"#dc3545\",
                    confirmButtonText: \"确定删除\",
                    cancelButtonText: \"取消\"
                }, function () {
                    window.location.href = linkURL;
                });
            };
        })
    </script>

    <script>
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

    </script>
{% endblock %}", "tracking/index.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/tracking/index.html.twig");
    }
}
