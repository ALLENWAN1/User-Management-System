<?php

/* product/index.html.twig */
class __TwigTemplate_c7d76a128935ebfa5ff37416467301fd4d8ad2c6f5accf4448b7d79890e8bf03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "product/index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "", "", "", "", "", "active", "", "active");
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.title", array(), "ums"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "product_name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-phone")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "barcode", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "barcode", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "image_path", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "image_path", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "category", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "category", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "shelf_life", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "shelf_life", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "promotion", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "promotion", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "stock", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "stock", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "description", array()), 'errors');
        echo "
                </div>
                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.btn", array(), "ums"), "html", null, true);
        echo "\">
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
                <p></p>
                <a href=\"/product\"  class=\"btn btn-primary btn-lg btn-block\">
                    <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.return", array(), "ums"), "html", null, true);
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
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.page_title", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.page_title", array(), "ums"), "html", null, true);
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
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.add_row", array(), "ums"), "html", null, true);
        echo "
                        </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                <thead>
                                <tr>
                                    <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.product_name", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.barcode", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.image_path", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.category", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.shelf_life", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.promotion", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.stock", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.description", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.action", array(), "ums"), "html", null, true);
        echo "</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.product_name", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.barcode", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.image_path", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.category", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.shelf_life", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.promotion", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.stock", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.description", array(), "ums"), "html", null, true);
        echo "</th>
                                    <th>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_page.action", array(), "ums"), "html", null, true);
        echo "</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 143
            echo "                                    <tr class=\"gradeA\">
                                        <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ProductId", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ProductName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Barcode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/products/" . twig_get_attribute($this->env, $this->source, $context["p"], "ImagePath", array()))), "html", null, true);
            echo "\" height=\"42\" width=\"42\"/>
                                        </td>
                                        <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Category", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ShelfLife", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Promotion", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Stock", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Description", array()), "html", null, true);
            echo "</td>
                                        <td class=\"actions\">
                                            <a href=\"/product/edit/";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ProductId", array()), "html", null, true);
            echo "&product\" class=\"btn btn-info\" title=\"edit\">
                                                <i class=\"fa fa-edit\"></i></a>
                                            <a href=\"/product/delete/";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ProductId", array()), "html", null, true);
            echo "&product\" class=\"btn btn-danger delete_product_confirm\" title=\"Delete\">
                                                <i class=\"fa fa-trash-o\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
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

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
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
                    title: \"确定删除该产品吗？\",
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
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 182,  497 => 181,  493 => 180,  489 => 179,  485 => 178,  481 => 177,  477 => 176,  473 => 175,  468 => 174,  459 => 173,  440 => 163,  429 => 158,  424 => 156,  419 => 154,  415 => 153,  411 => 152,  407 => 151,  403 => 150,  398 => 148,  393 => 146,  389 => 145,  385 => 144,  382 => 143,  378 => 142,  371 => 138,  367 => 137,  363 => 136,  359 => 135,  355 => 134,  351 => 133,  347 => 132,  343 => 131,  339 => 130,  335 => 129,  327 => 124,  323 => 123,  319 => 122,  315 => 121,  311 => 120,  307 => 119,  303 => 118,  299 => 117,  295 => 116,  291 => 115,  282 => 109,  245 => 75,  239 => 72,  225 => 61,  219 => 58,  215 => 57,  210 => 55,  206 => 54,  200 => 51,  196 => 50,  190 => 47,  186 => 46,  180 => 43,  176 => 42,  170 => 39,  166 => 38,  160 => 35,  156 => 34,  150 => 31,  146 => 30,  140 => 27,  135 => 25,  129 => 22,  123 => 18,  114 => 17,  101 => 15,  98 => 14,  89 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  56 => 6,  47 => 5,  15 => 2,);
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
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\", \"active\" %}
    {{ parent() }}
{% endblock %}
{% block main_content %}
<div id=\"overlay\"></div>
    <div id=\"popupBox\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <p class=\"lead\">{{ 'product_page.title'|trans }}</p>
            </div>
            <div class=\"body\">
                {{ form_start(form, {'attr': {'class': 'form-auth-small'}}) }}
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
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>{{ 'product_page.page_title'|trans }}</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">{{ 'product_page.page_title'|trans }}</li>
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
                            <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>{{ 'product_page.add_row'|trans }}
                        </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                <thead>
                                <tr>
                                    <th>{{ 'product_page.product_id' | trans }}</th>
                                    <th>{{ 'product_page.product_name' | trans }}</th>
                                    <th>{{ 'product_page.barcode' | trans }}</th>
                                    <th>{{ 'product_page.image_path' | trans }}</th>
                                    <th>{{ 'product_page.category' | trans }}</th>
                                    <th>{{ 'product_page.shelf_life' | trans }}</th>
                                    <th>{{ 'product_page.promotion' | trans }}</th>
                                    <th>{{ 'product_page.stock' | trans }}</th>
                                    <th>{{ 'product_page.description' | trans }}</th>
                                    <th>{{ 'product_page.action' | trans }}</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>{{ 'product_page.product_id' | trans }}</th>
                                    <th>{{ 'product_page.product_name' | trans }}</th>
                                    <th>{{ 'product_page.barcode' | trans }}</th>
                                    <th>{{ 'product_page.image_path' | trans }}</th>
                                    <th>{{ 'product_page.category' | trans }}</th>
                                    <th>{{ 'product_page.shelf_life' | trans }}</th>
                                    <th>{{ 'product_page.promotion' | trans }}</th>
                                    <th>{{ 'product_page.stock' | trans }}</th>
                                    <th>{{ 'product_page.description' | trans }}</th>
                                    <th>{{ 'product_page.action' | trans }}</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                {% for p in products %}
                                    <tr class=\"gradeA\">
                                        <td>{{ p.ProductId }}</td>
                                        <td>{{ p.ProductName }}</td>
                                        <td>{{ p.Barcode }}</td>
                                        <td>
                                            <img src=\"{{ asset('/uploads/images/products/' ~ p.ImagePath)}}\" height=\"42\" width=\"42\"/>
                                        </td>
                                        <td>{{ p.Category }}</td>
                                        <td>{{ p.ShelfLife }}</td>
                                        <td>{{ p.Promotion }}</td>
                                        <td>{{ p.Stock }}</td>
                                        <td>{{ p.Description }}</td>
                                        <td class=\"actions\">
                                            <a href=\"/product/edit/{{ p.ProductId }}&product\" class=\"btn btn-info\" title=\"edit\">
                                                <i class=\"fa fa-edit\"></i></a>
                                            <a href=\"/product/delete/{{ p.ProductId }}&product\" class=\"btn btn-danger delete_product_confirm\" title=\"Delete\">
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
                    title: \"确定删除该产品吗？\",
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
{% endblock %}", "product/index.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/product/index.html.twig");
    }
}
