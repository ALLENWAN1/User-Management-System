<?php

/* purchase/index.html.twig */
class __TwigTemplate_a6fbe6704163368e9fe0e3f93e39be7cd2204f8a00b70d32f259d34bd8966118 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "purchase/index.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "active", "", "", "", "", "", "active", "");
        // line 13
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        // line 16
        echo "    <div id=\"overlay\"></div>
    <div id=\"popupBox\" class=\"animated flipInY\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <p class=\"lead\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.title", array(), "ums"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"body\">
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', array("attr" => array("class" => "form-auth-small")));
        echo "
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "user_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-firstname")));
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "user_id", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "product_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-phone")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "date_purchase", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "date_purchase", array()), 'widget', array("attr" => array("class" => "form-control-select", "id" => "signup-date_birth")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "purchase_tracking_id", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-id_card")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "quantity", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "signup-region")));
        echo "
                </div>
                <hr>
                <div class=\"text-center\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration_page.btn", array(), "ums"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" id=\"popupCancel\"  class=\"btn btn-default\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.return", array(), "ums"), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">

                            <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15\">
                                <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.index.add_row", array(), "ums"), "html", null, true);
        echo "
                            </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\" cellspacing=\"0\" id=\"addrowExample\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.purchase_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.user_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.date_purchase", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.purchase_tracking_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.quantity", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.activity", array(), "ums"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.purchase_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.user_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.product_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.date_purchase", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.purchase_tracking_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.quantity", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("purchase_page.activity", array(), "ums"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new Twig_Error_Runtime('Variable "purchase" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 86
            echo "                                        <tr class=\"gradeA\">
                                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "PurchaseId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "UserId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ProductId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "DatePurchase", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "PurchaseTrackingId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Quantity", array()), "html", null, true);
            echo "</td>
                                            <td class=\"actions\">
                                                <button >
                                                        <a href=\"/purchasehistory/register\"><i class=\"icon-pencil\"></i></a>
                                                </button>
                                                <button class=\"btn btn-sm btn-icon btn-pure btn-default on-default button-remove\"
                                                        data-toggle=\"tooltip\" data-original-title=\"Remove\"><i class=\"icon-trash\" aria-hidden=\"true\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                                    </tbody>
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

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>

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
        return "purchase/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 123,  373 => 122,  369 => 121,  365 => 120,  361 => 119,  357 => 118,  353 => 117,  349 => 116,  344 => 115,  335 => 114,  315 => 103,  298 => 92,  294 => 91,  290 => 90,  286 => 89,  282 => 88,  278 => 87,  275 => 86,  271 => 85,  264 => 81,  260 => 80,  256 => 79,  252 => 78,  248 => 77,  244 => 76,  240 => 75,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  208 => 64,  199 => 58,  184 => 46,  179 => 44,  175 => 43,  168 => 39,  162 => 36,  156 => 33,  152 => 32,  146 => 29,  140 => 26,  136 => 25,  131 => 23,  125 => 20,  119 => 16,  110 => 15,  97 => 13,  94 => 12,  85 => 11,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  56 => 5,  47 => 4,  15 => 2,);
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
{% endblock %}
{% block sidebar %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"active\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\" %}
    {{ parent() }}
{% endblock %}
{% block main_content %}
    <div id=\"overlay\"></div>
    <div id=\"popupBox\" class=\"animated flipInY\">
        <div id=\"popupContent\">
            <div class=\"header\">
                <p class=\"lead\">{{ 'purchase_page.title'|trans }}</p>
            </div>
            <div class=\"body\">
                {{ form_start(form, {'attr': {'class': 'form-auth-small'}}) }}
                <div class=\"form-group\">
                    {{ form_widget(form.user_id, {'attr': {'class': 'form-control', 'id': 'signup-firstname'}}) }}
                    {{ form_errors(form.user_id) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.product_id, {'attr': {'class': 'form-control', 'id': 'signup-phone'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_label(form.date_purchase) }}
                    {{ form_widget(form.date_purchase, {'attr': {'class': 'form-control-select', 'id': 'signup-date_birth'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.purchase_tracking_id, {'attr': {'class': 'form-control', 'id': 'signup-id_card'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.quantity, {'attr': {'class': 'form-control', 'id': 'signup-region'}}) }}
                </div>
                <hr>
                <div class=\"text-center\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'registration_page.btn'|trans }}\">
                    <a href=\"javascript:void(0)\" id=\"popupCancel\"  class=\"btn btn-default\">{{ 'purchase_page.return'|trans }}</a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
    <div id=\"main-content\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">

                            <a href=\"javascript:void(0)\" id=\"addRow\" class=\"btn btn-primary m-b-15\">
                                <i class=\"icon wb-plus\" aria-hidden=\"false\"></i>{{ 'purchase_page.index.add_row'|trans }}
                            </a>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\" cellspacing=\"0\" id=\"addrowExample\">
                                    <thead>
                                    <tr>
                                        <th>{{ 'purchase_page.purchase_id'|trans }}</th>
                                        <th>{{ 'purchase_page.user_id'|trans }}</th>
                                        <th>{{ 'purchase_page.product_id'|trans }}</th>
                                        <th>{{ 'purchase_page.date_purchase'|trans }}</th>
                                        <th>{{ 'purchase_page.purchase_tracking_id'|trans }}</th>
                                        <th>{{ 'purchase_page.quantity'|trans }}</th>
                                        <th>{{ 'purchase_page.activity'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>{{ 'purchase_page.purchase_id'|trans }}</th>
                                        <th>{{ 'purchase_page.user_id'|trans }}</th>
                                        <th>{{ 'purchase_page.product_id'|trans }}</th>
                                        <th>{{ 'purchase_page.date_purchase'|trans }}</th>
                                        <th>{{ 'purchase_page.purchase_tracking_id'|trans }}</th>
                                        <th>{{ 'purchase_page.quantity'|trans }}</th>
                                        <th>{{ 'purchase_page.activity'|trans }}</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    {% for p in purchase %}
                                        <tr class=\"gradeA\">
                                            <td>{{ p.PurchaseId }}</td>
                                            <td>{{ p.UserId }}</td>
                                            <td>{{ p.ProductId }}</td>
                                            <td>{{ p.DatePurchase|date('Y-m-d') }}</td>
                                            <td>{{ p.PurchaseTrackingId }}</td>
                                            <td>{{ p.Quantity }}</td>
                                            <td class=\"actions\">
                                                <button >
                                                        <a href=\"/purchasehistory/register\"><i class=\"icon-pencil\"></i></a>
                                                </button>
                                                <button class=\"btn btn-sm btn-icon btn-pure btn-default on-default button-remove\"
                                                        data-toggle=\"tooltip\" data-original-title=\"Remove\"><i class=\"icon-trash\" aria-hidden=\"true\"></i>
                                                </button>
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
{% endblock %}", "purchase/index.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/purchase/index.html.twig");
    }
}
