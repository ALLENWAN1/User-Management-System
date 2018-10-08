<?php

/* user/userList_users.html.twig */
class __TwigTemplate_1ff39ee579bd805175429c9325c3908a6b0c27107b185d41022d87e75be0acf0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/userList_users.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/userList_users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/userList_users.html.twig"));

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
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("", "", "", "", "active", "", "", "", "", "active");
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
        echo "    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.title_users", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.title_users", array(), "ums"), "html", null, true);
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
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-left\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.name", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.username", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.sex.title", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.email", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.user_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_birth", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.id_card", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.phone", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.wechat", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.address", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.region", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.responsible_id", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.enabled.title", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_register", array(), "ums"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("userList_pages.action", array(), "ums"), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 85
            echo "                                        <tr>
                                            <td class=\"text-left\">
                                                <span class=\"font-weight-bold\">";
            // line 87
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastname", array())), "html", null, true);
            echo "</span>
                                            </td>
                                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, $context["user"], "sex", array())) {
                $context["user_sex"] = ("user_infos.sex." . twig_get_attribute($this->env, $this->source, $context["user"], "sex", array()));
                // line 92
                echo "                                                ";
            } else {
                $context["user_sex"] = "user_infos.sex.0";
            }
            // line 93
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_sex"]) || array_key_exists("user_sex", $context) ? $context["user_sex"] : (function () { throw new Twig_Error_Runtime('Variable "user_sex" does not exist.', 93, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datebirth", array()), "Y年m月d日"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "idcard", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "wechat", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 103
            $context["user_region"] = ("region." . twig_get_attribute($this->env, $this->source, $context["user"], "region", array()));
            // line 104
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_region"]) || array_key_exists("user_region", $context) ? $context["user_region"] : (function () { throw new Twig_Error_Runtime('Variable "user_region" does not exist.', 104, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "responsibleid", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array())) {
                $context["user_enabeld"] = ("user_infos.enabled." . twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array()));
                // line 109
                echo "                                                ";
            } else {
                $context["user_enabeld"] = "user_infos.enabled.0";
            }
            // line 110
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_enabeld"]) || array_key_exists("user_enabeld", $context) ? $context["user_enabeld"] : (function () { throw new Twig_Error_Runtime('Variable "user_enabeld" does not exist.', 110, $this->source); })()), array(), "ums"), "html", null, true);
            echo "
                                            </td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateregister", array()), "Y年m月d日"), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"/userList/edit/";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "&Users\"
                                                   class=\"btn btn-info\"><i
                                                            class=\"fa fa-edit\"></i></a>
                                                <a href=\"/userList/delete/";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userid", array()), "html", null, true);
            echo "&Users\"
                                                   class=\"btn btn-danger delete_user_confirm\"><i
                                                            class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.delete_user_confirm').click(function (e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });

            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该用户吗？\",
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/userList_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 143,  406 => 142,  402 => 141,  398 => 140,  394 => 139,  390 => 138,  386 => 137,  382 => 136,  377 => 135,  368 => 134,  349 => 123,  337 => 117,  331 => 114,  326 => 112,  320 => 110,  315 => 109,  312 => 108,  307 => 106,  301 => 104,  299 => 103,  294 => 101,  290 => 100,  286 => 99,  282 => 98,  278 => 97,  274 => 96,  270 => 95,  264 => 93,  259 => 92,  256 => 91,  251 => 89,  246 => 87,  242 => 85,  238 => 84,  231 => 80,  227 => 79,  223 => 78,  219 => 77,  215 => 76,  211 => 75,  207 => 74,  203 => 73,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  179 => 67,  175 => 66,  135 => 29,  129 => 26,  121 => 20,  112 => 19,  99 => 16,  96 => 15,  87 => 14,  75 => 11,  71 => 10,  66 => 8,  61 => 6,  56 => 5,  47 => 4,  15 => 1,);
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
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"\", \"\", \"\", \"\", \"active\", \"\", \"\", \"\", \"\", \"active\" %}
    {{ parent() }}
{% endblock %}

{% block main_content %}
    <div id=\"main-content\" class=\"profilepage_2\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-8 col-sm-12\">
                        <h2><a href=\"javascript:void(0);\" class=\"btn btn-xs btn-link btn-toggle-fullwidth\"><i
                                        class=\"fa fa-arrow-left\"></i></a>{{ 'userList_pages.title_users'|trans }}</h2>
                        <ul class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"icon-home\"></i></a></li>
                            <li class=\"breadcrumb-item active\">{{ 'userList_pages.title_users'|trans }}</li>
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
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable table-custom table-userList text-center\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-left\">{{ 'user_infos.name'|trans }}</th>
                                        <th>{{ 'user_infos.username'|trans }}</th>
                                        <th>{{ 'user_infos.sex.title'|trans }}</th>
                                        <th>{{ 'user_infos.email'|trans }}</th>
                                        <th>{{ 'user_infos.user_id'|trans }}</th>
                                        <th>{{ 'user_infos.date_birth'|trans }}</th>
                                        <th>{{ 'user_infos.id_card'|trans }}</th>
                                        <th>{{ 'user_infos.phone'|trans }}</th>
                                        <th>{{ 'user_infos.wechat'|trans }}</th>
                                        <th>{{ 'user_infos.address'|trans }}</th>
                                        <th>{{ 'user_infos.region'|trans }}</th>
                                        <th>{{ 'user_infos.responsible_id'|trans }}</th>
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
                                            <td>{{ user.username }}</td>
                                            <td>
                                                {% if user.sex %}{% set user_sex = 'user_infos.sex.' ~ user.sex %}
                                                {% else %}{% set user_sex = 'user_infos.sex.0' %}{% endif %}
                                                {{ user_sex|trans }}
                                            </td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.userid }}</td>
                                            <td>{{ user.datebirth|date('Y年m月d日') }}</td>
                                            <td>{{ user.idcard }}</td>
                                            <td>{{ user.phone }}</td>
                                            <td>{{ user.wechat }}</td>
                                            <td>{{ user.address }}</td>
                                            <td>
                                                {% set user_region = 'region.'~user.region %}
                                                {{ user_region|trans }}
                                            </td>
                                            <td>{{ user.responsibleid }}</td>
                                            <td>
                                                {% if user.enabled %}{% set user_enabeld = 'user_infos.enabled.' ~ user.enabled %}
                                                {% else %}{% set user_enabeld = 'user_infos.enabled.0' %}{% endif %}
                                                {{ user_enabeld|trans }}
                                            </td>
                                            <td>{{ user.dateregister|date('Y年m月d日') }}</td>
                                            <td>
                                                <a href=\"/userList/edit/{{ user.userid }}&Users\"
                                                   class=\"btn btn-info\"><i
                                                            class=\"fa fa-edit\"></i></a>
                                                <a href=\"/userList/delete/{{ user.userid }}&Users\"
                                                   class=\"btn btn-danger delete_user_confirm\"><i
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
            \$('.delete_user_confirm').click(function (e) {
                e.preventDefault();
                var linkURL = \$(this).attr(\"href\");
                confirmBeforeRedirect(linkURL);
            });

            function confirmBeforeRedirect(linkURL) {
                swal({
                    title: \"确定删除该用户吗？\",
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
{% endblock %}", "user/userList_users.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/user/userList_users.html.twig");
    }
}
