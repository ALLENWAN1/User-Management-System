<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9dc74bb58ec4d30b10f743966b5e167c4a7757decfffb591a6bf301725009888 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.title", array(), "ums"), "html", null, true);
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


            <div class=\"col-lg-8 col-md-12 m-auto\">
                <div class=\"card profile-header\">
                    <div class=\"body\">
                        <div class=\"profile-image\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"rounded-circle\"
                                                        alt=\"\"></div>
                        <div>
                            <h4 class=\"m-b-0\"><strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "firstname", array()), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "lastname", array()), "html", null, true);
        echo "</h4>
                            <h5 class=\"m-b-0\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->source); })()), "username", array()), "html", null, true);
        echo "</h5>
                            ";
        // line 57
        $context["user_role"] = ("user_infos.roles." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "roles", array()), 0, array(), "array"));
        // line 58
        echo "                            <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_role"]) || array_key_exists("user_role", $context) ? $context["user_role"] : (function () { throw new Twig_Error_Runtime('Variable "user_role" does not exist.', 58, $this->source); })()), array(), "ums"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"header\">
                        <h2>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.title", array(), "ums"), "html", null, true);
        echo "</h2>
                        <ul class=\"header-dropdown\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
                                <ul class=\"dropdown-menu dropdown-menu-right animated bounceIn\">
                                    <li><a href=\"./edit\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.action.edit", array(), "ums"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"./change-password\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile_page.action.changepwd", array(), "ums"), "html", null, true);
        echo "</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"body\">
                        <small class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.user_id", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 79, $this->source); })()), "UserId", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.sex.title", array(), "ums"), "html", null, true);
        echo ":</small>
                        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->source); })()), "sex", array())) {
            $context["user_sex"] = ("user_infos.sex." . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->source); })()), "sex", array()));
            // line 83
            echo "                        ";
        } else {
            $context["user_sex"] = "user_infos.sex.0";
        }
        // line 84
        echo "                        <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_sex"]) || array_key_exists("user_sex", $context) ? $context["user_sex"] : (function () { throw new Twig_Error_Runtime('Variable "user_sex" does not exist.', 84, $this->source); })()), array(), "ums"), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.email", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.phone", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 90, $this->source); })()), "phone", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_birth", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p class=\"m-b-0\">";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 93, $this->source); })()), "DateBirth", array()), "Y年m月d日"), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.id_card", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 96, $this->source); })()), "IdCard", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.wechat", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 99, $this->source); })()), "wechat", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.address", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 102, $this->source); })()), "address", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <small class=\"text-muted\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.region", array(), "ums"), "html", null, true);
        echo ":</small>
                        ";
        // line 105
        $context["user_region"] = ("region." . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 105, $this->source); })()), "region", array()));
        // line 106
        echo "                        <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_region"]) || array_key_exists("user_region", $context) ? $context["user_region"] : (function () { throw new Twig_Error_Runtime('Variable "user_region" does not exist.', 106, $this->source); })()), array(), "ums"), "html", null, true);
        echo "</p>
                        <hr>
                        ";
        // line 108
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false)) {
            // line 109
            echo "                        <small class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.responsible_id", array(), "ums"), "html", null, true);
            echo ":</small>
                        <p>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 110, $this->source); })()), "ResponsibleId", array()), "html", null, true);
            echo "</p>
                        <hr>
                        ";
        }
        // line 113
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SELLER")) {
            // line 114
            echo "                            <small class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.region", array(), "ums"), "html", null, true);
            echo ":</small>
                            <br>
                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 116, $this->source); })()), "responsibleregion", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 117
                echo "                                ";
                if ( !twig_test_empty($context["r"])) {
                    // line 118
                    echo "                                    ";
                    $context["rt"] = ("region." . $context["r"]);
                    // line 119
                    echo "                                    [<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["rt"]) || array_key_exists("rt", $context) ? $context["rt"] : (function () { throw new Twig_Error_Runtime('Variable "rt" does not exist.', 119, $this->source); })()), array(), "ums"), "html", null, true);
                    echo "</span>]&nbsp;
                                ";
                }
                // line 121
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                            <hr>
                        ";
        }
        // line 124
        echo "                        <small class=\"text-muted\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_infos.date_register", array(), "ums"), "html", null, true);
        echo ":</small>
                        <p>";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 125, $this->source); })()), "DateRegister", array()), "Y年m月d日"), "html", null, true);
        echo "</p>
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
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 125,  321 => 124,  317 => 122,  311 => 121,  305 => 119,  302 => 118,  299 => 117,  295 => 116,  289 => 114,  286 => 113,  280 => 110,  275 => 109,  273 => 108,  267 => 106,  265 => 105,  261 => 104,  256 => 102,  252 => 101,  247 => 99,  243 => 98,  238 => 96,  234 => 95,  229 => 93,  225 => 92,  220 => 90,  216 => 89,  211 => 87,  207 => 86,  201 => 84,  196 => 83,  193 => 82,  189 => 81,  184 => 79,  180 => 78,  171 => 72,  167 => 71,  158 => 65,  147 => 58,  145 => 57,  141 => 56,  135 => 55,  129 => 52,  93 => 19,  87 => 16,  79 => 10,  70 => 9,  57 => 6,  54 => 5,  45 => 4,  15 => 1,);
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
                            <li class=\"breadcrumb-item active\">{{ 'profile_page.title'|trans }}</li>
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


            <div class=\"col-lg-8 col-md-12 m-auto\">
                <div class=\"card profile-header\">
                    <div class=\"body\">
                        <div class=\"profile-image\"><img src=\"{{ asset('images/user.png') }}\" class=\"rounded-circle\"
                                                        alt=\"\"></div>
                        <div>
                            <h4 class=\"m-b-0\"><strong>{{ user.firstname }}</strong> {{ user.lastname }}</h4>
                            <h5 class=\"m-b-0\">{{ user.username }}</h5>
                            {% set user_role = 'user_infos.roles.' ~ user.roles[0] %}
                            <span>{{ user_role|trans }}</span>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"header\">
                        <h2>{{ 'profile_page.title'|trans }}</h2>
                        <ul class=\"header-dropdown\">
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                   role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
                                <ul class=\"dropdown-menu dropdown-menu-right animated bounceIn\">
                                    <li><a href=\"./edit\">{{ 'profile_page.action.edit'|trans }}</a></li>
                                    <li><a href=\"./change-password\">{{ 'profile_page.action.changepwd'|trans }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"body\">
                        <small class=\"text-muted\">{{ 'user_infos.user_id'|trans }}:</small>
                        <p>{{ user.UserId }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.sex.title'|trans }}:</small>
                        {% if user.sex %}{% set user_sex = 'user_infos.sex.' ~ user.sex %}
                        {% else %}{% set user_sex = 'user_infos.sex.0' %}{% endif %}
                        <p>{{ user_sex|trans }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.email'|trans }}:</small>
                        <p>{{ user.email }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.phone'|trans }}:</small>
                        <p>{{ user.phone }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.date_birth'|trans }}:</small>
                        <p class=\"m-b-0\">{{ user.DateBirth|date('Y年m月d日') }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.id_card'|trans }}:</small>
                        <p>{{ user.IdCard }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.wechat'|trans }}:</small>
                        <p>{{ user.wechat }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.address'|trans }}:</small>
                        <p>{{ user.address }}</p>
                        <hr>
                        <small class=\"text-muted\">{{ 'user_infos.region'|trans }}:</small>
                        {% set user_region = 'region.'~user.region %}
                        <p>{{ user_region|trans }}</p>
                        <hr>
                        {% if is_granted('ROLE_ADMIN') == false %}
                        <small class=\"text-muted\">{{ 'user_infos.responsible_id'|trans }}:</small>
                        <p>{{ user.ResponsibleId }}</p>
                        <hr>
                        {% endif %}
                        {% if is_granted('ROLE_SELLER') %}
                            <small class=\"text-muted\">{{ 'user_infos.region'|trans }}:</small>
                            <br>
                            {% for r in user.responsibleregion %}
                                {% if r is not empty %}
                                    {% set rt = 'region.' ~ r %}
                                    [<span>{{ rt|trans }}</span>]&nbsp;
                                {% endif %}
                            {% endfor %}
                            <hr>
                        {% endif %}
                        <small class=\"text-muted\">{{ 'user_infos.date_register'|trans }}:</small>
                        <p>{{ user.DateRegister|date('Y年m月d日') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@FOSUser/Profile/show.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/FOSUserBundle/Profile/show.html.twig");
    }
}
