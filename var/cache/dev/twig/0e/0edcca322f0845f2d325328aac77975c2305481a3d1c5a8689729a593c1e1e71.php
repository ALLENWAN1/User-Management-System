<?php

/* layout.html.twig */
class __TwigTemplate_4b5087d668e87f9d6a6d511b06cfa2b0097c9771b94d211218b8435fc0538b9f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'loader' => array($this, 'block_loader'),
            'navbar_top' => array($this, 'block_navbar_top'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_content' => array($this, 'block_main_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta name=\"author\" content=\"Yun WU, Jie LU, Yuxiang WANG\">
    ";
        // line 10
        echo "    <title>
        ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    </title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body class=\"theme-orange\">

<!-- Page Loader -->
";
        // line 27
        $this->displayBlock('loader', $context, $blocks);
        // line 35
        echo "<div id=\"wrapper\">
    ";
        // line 36
        $this->displayBlock('navbar_top', $context, $blocks);
        // line 147
        echo "    ";
        list($context["tab_menu_index"], $context["tab_menu_profile"], $context["tab_menu_histo"], $context["tab_menu_source"], $context["tab_admin_users"], $context["tab_admin_sellers"], $context["tab_admin_admins"], $context["tab_admin_products"], $context["nav_menu"], $context["nav_admin"]) =         array("active", "", "", "", "", "", "", "", "active", "");
        // line 148
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 262
        echo "    ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 263
        echo "</div>

";
        // line 265
        $this->displayBlock('footer', $context, $blocks);
        // line 266
        echo "
<!-- Javascript -->
";
        // line 268
        $this->displayBlock('javascripts', $context, $blocks);
        // line 274
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("base.title", array(), "ums"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <!-- VENDOR CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>

        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color_skins.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_loader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loader"));

        // line 28
        echo "    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"m-t-30\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-icon.svg"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"Logo\"></div>
            <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("base.loader", array(), "ums"), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_navbar_top($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_top"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_top"));

        // line 37
        echo "        <nav class=\"navbar navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-btn\">
                    <button type=\"button\" class=\"btn-toggle-offcanvas\"><i class=\"lnr lnr-menu fa fa-bars\"></i></button>
                </div>

                <div class=\"navbar-brand\">
                    <a href=\"/\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"img-responsive logo\"></a>
                </div>

                <div class=\"navbar-right\">
                    <div id=\"navbar-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 51
        echo "                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle icon-menu\" data-toggle=\"dropdown\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"notification-dot\"></span>
                                </a>
                                <ul class=\"dropdown-menu notifications animated shake\">
                                    <li class=\"header\"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-info text-warning\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Campaign <strong>Holiday Sale</strong> is nearly
                                                        reach budget limit.</p>
                                                    <span class=\"timestamp\">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-like text-success\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Your New Campaign <strong>Holiday Sale</strong> is
                                                        approved.</p>
                                                    <span class=\"timestamp\">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-pie-chart text-info\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Website visits from Twitter is 27% higher than last
                                                        week.</p>
                                                    <span class=\"timestamp\">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-info text-danger\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Error on website analytics configurations</p>
                                                    <span class=\"timestamp\">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"footer\"><a href=\"javascript:void(0);\" class=\"more\">See all
                                            notifications</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle icon-menu\"
                                   data-toggle=\"dropdown\"><i class=\"icon-equalizer\"></i></a>
                                <ul class=\"dropdown-menu user-menu menu-icon animated bounceIn\">
                                    <li class=\"menu-heading\">ACCOUNT SETTINGS</li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-note\"></i> <span>Basic</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-equalizer\"></i>
                                            <span>Preferences</span></a></li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-lock\"></i> <span>Privacy</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-bell\"></i>
                                            <span>Notifications</span></a></li>
                                    <li class=\"menu-heading\">BILLING</li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-credit-card\"></i>
                                            <span>Payments</span></a></li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-printer\"></i> <span>Invoices</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-refresh\"></i> <span>Renewals</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"/logout\" class=\"icon-menu\"><i class=\"icon-login\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 149
        echo "        <div id=\"left-sidebar\" class=\"sidebar\">
            <div class=\"sidebar-scroll\">
                <div class=\"user-account\">
                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" class=\"rounded-circle user-photo\"
                         alt=\"User Profile Picture\">
                    <div class=\"dropdown\">
                        ";
        // line 155
        $context["user_role"] = ("user_infos.roles." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 155, $this->source); })()), "user", array()), "roles", array()), 0, array(), "array"));
        // line 156
        echo "                        ";
        $context["user_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 156, $this->source); })()), "user", array()), "firstname", array()) . "  ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 156, $this->source); })()), "user", array()), "lastname", array()));
        // line 157
        echo "                        <span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["user_role"]) || array_key_exists("user_role", $context) ? $context["user_role"] : (function () { throw new Twig_Error_Runtime('Variable "user_role" does not exist.', 157, $this->source); })()), array(), "ums"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.welcome", array(), "ums"), "html", null, true);
        echo "</span>
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle user-name\"
                           data-toggle=\"dropdown\"><strong>";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new Twig_Error_Runtime('Variable "user_name" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "</strong></a>
                        <ul class=\"dropdown-menu dropdown-menu-right account animated flipInY\">
                            <li><a href=\"/profile\"><i class=\"icon-user\"></i>";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.profile", array(), "ums"), "html", null, true);
        echo "</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"/logout\"><i class=\"icon-power\"></i>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.logout", array(), "ums"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\"><a class=\"nav-link ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["nav_menu"]) || array_key_exists("nav_menu", $context) ? $context["nav_menu"] : (function () { throw new Twig_Error_Runtime('Variable "nav_menu" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"tab\" href=\"#menu\"><i
                                    class=\"icon-grid\"></i></a>
                    </li>
                    ";
        // line 173
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 174
            echo "                        <li class=\"nav-item\"><a class=\"nav-link ";
            echo twig_escape_filter($this->env, (isset($context["nav_admin"]) || array_key_exists("nav_admin", $context) ? $context["nav_admin"] : (function () { throw new Twig_Error_Runtime('Variable "nav_admin" does not exist.', 174, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"tab\"
                                                href=\"#admin_menu\">";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.admin", array(), "ums"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 177
        echo "                    ";
        // line 180
        echo "                </ul>

                <!-- Tab panes -->
                <div class=\"tab-content p-l-0 p-r-0\">
                    <div class=\"tab-pane animated fadeIn ";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["nav_menu"]) || array_key_exists("nav_menu", $context) ? $context["nav_menu"] : (function () { throw new Twig_Error_Runtime('Variable "nav_menu" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "\" id=\"menu\">
                        <nav class=\"sidebar-nav\">
                            <ul class=\"main-menu metismenu\">
                                <li class=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["tab_menu_index"]) || array_key_exists("tab_menu_index", $context) ? $context["tab_menu_index"] : (function () { throw new Twig_Error_Runtime('Variable "tab_menu_index" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "\"><a href=\"/\"><i
                                                class=\"icon-home\"></i><span>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.index", array(), "ums"), "html", null, true);
        echo "</span></a>
                                </li>
                                <li class=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["tab_menu_profile"]) || array_key_exists("tab_menu_profile", $context) ? $context["tab_menu_profile"] : (function () { throw new Twig_Error_Runtime('Variable "tab_menu_profile" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "\"><a href=\"/profile\"><i class=\"icon-user\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.profile", array(), "ums"), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["tab_menu_histo"]) || array_key_exists("tab_menu_histo", $context) ? $context["tab_menu_histo"] : (function () { throw new Twig_Error_Runtime('Variable "tab_menu_histo" does not exist.', 192, $this->source); })()), "html", null, true);
        echo "\"><a href=\"/purchasehistory\"><i
                                                class=\"icon-basket-loaded\"></i>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.buy_histo", array(), "ums"), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["tab_menu_source"]) || array_key_exists("tab_menu_source", $context) ? $context["tab_menu_source"] : (function () { throw new Twig_Error_Runtime('Variable "tab_menu_source" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "\"><a href=\"/tracking/data\" class=\"has-arrow\"><i
                                                class=\"icon-plane\"></i><span>";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.menu.product_source", array(), "ums"), "html", null, true);
        echo "</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    ";
        // line 201
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 202
            echo "                        <div class=\"tab-pane animated fadeIn ";
            echo twig_escape_filter($this->env, (isset($context["nav_admin"]) || array_key_exists("nav_admin", $context) ? $context["nav_admin"] : (function () { throw new Twig_Error_Runtime('Variable "nav_admin" does not exist.', 202, $this->source); })()), "html", null, true);
            echo "\" id=\"admin_menu\">
                            <nav class=\"sidebar-nav\">
                                <ul class=\"main-menu metismenu\">
                                    <li class=\"";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["tab_admin_users"]) || array_key_exists("tab_admin_users", $context) ? $context["tab_admin_users"] : (function () { throw new Twig_Error_Runtime('Variable "tab_admin_users" does not exist.', 205, $this->source); })()), "html", null, true);
            echo "\"><a href=\"/userList/users\"><i
                                                    class=\"icon-users\"></i><span>";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.admin.users", array(), "ums"), "html", null, true);
            echo "</span></a>
                                    </li>
                                    <li class=\"";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["tab_admin_sellers"]) || array_key_exists("tab_admin_sellers", $context) ? $context["tab_admin_sellers"] : (function () { throw new Twig_Error_Runtime('Variable "tab_admin_sellers" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\"><a href=\"/userList/sellers\"><i
                                                    class=\"icon-users\"></i>";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.admin.sellers", array(), "ums"), "html", null, true);
            echo "</a></li>
                                    <li class=\"";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["tab_admin_admins"]) || array_key_exists("tab_admin_admins", $context) ? $context["tab_admin_admins"] : (function () { throw new Twig_Error_Runtime('Variable "tab_admin_admins" does not exist.', 210, $this->source); })()), "html", null, true);
            echo "\"><a href=\"/userList/admins\"><i
                                                    class=\"icon-diamond\"></i>";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.admin.admins", array(), "ums"), "html", null, true);
            echo "</a></li>
                                    <li class=\"";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["tab_admin_products"]) || array_key_exists("tab_admin_products", $context) ? $context["tab_admin_products"] : (function () { throw new Twig_Error_Runtime('Variable "tab_admin_products" does not exist.', 212, $this->source); })()), "html", null, true);
            echo "\"><a href=\"/product\"><i
                                                    class=\"icon-basket-loaded\"></i>";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.admin.products", array(), "ums"), "html", null, true);
            echo "
                                        </a></li>
                                    ";
            // line 223
            echo "                                </ul>
                            </nav>
                        </div>
                    ";
        }
        // line 227
        echo "                    ";
        // line 258
        echo "                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_main_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 269
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/libscripts.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/vendorscripts.bundle.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles_js/mainscripts.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 272,  555 => 270,  550 => 269,  541 => 268,  524 => 265,  507 => 262,  494 => 258,  492 => 227,  486 => 223,  481 => 213,  477 => 212,  473 => 211,  469 => 210,  465 => 209,  461 => 208,  456 => 206,  452 => 205,  445 => 202,  443 => 201,  435 => 196,  431 => 195,  426 => 193,  422 => 192,  415 => 190,  410 => 188,  406 => 187,  400 => 184,  394 => 180,  392 => 177,  387 => 175,  382 => 174,  380 => 173,  374 => 170,  364 => 163,  359 => 161,  354 => 159,  346 => 157,  343 => 156,  341 => 155,  335 => 152,  330 => 149,  321 => 148,  216 => 51,  207 => 44,  198 => 37,  189 => 36,  175 => 31,  171 => 30,  167 => 28,  158 => 27,  146 => 21,  142 => 20,  136 => 17,  132 => 16,  129 => 15,  120 => 14,  102 => 11,  91 => 274,  89 => 268,  85 => 266,  83 => 265,  79 => 263,  76 => 262,  73 => 148,  70 => 147,  68 => 36,  65 => 35,  63 => 27,  57 => 23,  55 => 14,  51 => 12,  49 => 11,  46 => 10,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'ums' %}
<!DOCTYPE html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta name=\"author\" content=\"Yun WU, Jie LU, Yuxiang WANG\">
    {#<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">#}
    <title>
        {% block title %}{{ 'base.title'|trans }}{% endblock %}
    </title>

    {% block stylesheets %}
        <!-- VENDOR CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\"/>

        <!-- MAIN CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/color_skins.css') }}\"/>
    {% endblock %}
</head>
<body class=\"theme-orange\">

<!-- Page Loader -->
{% block loader %}
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"m-t-30\"><img src=\"{{ asset('images/logo-icon.svg') }}\" width=\"48\" height=\"48\" alt=\"Logo\"></div>
            <p>{{ 'base.loader'|trans }}</p>
        </div>
    </div>
{% endblock %}
<div id=\"wrapper\">
    {% block navbar_top %}
        <nav class=\"navbar navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-btn\">
                    <button type=\"button\" class=\"btn-toggle-offcanvas\"><i class=\"lnr lnr-menu fa fa-bars\"></i></button>
                </div>

                <div class=\"navbar-brand\">
                    <a href=\"/\"><img src=\"{{ asset('images/logo.svg') }}\" alt=\"Logo\" class=\"img-responsive logo\"></a>
                </div>

                <div class=\"navbar-right\">
                    <div id=\"navbar-menu\">
                        <ul class=\"nav navbar-nav\">
                            {#<li><a href=\"app-events.html\" class=\"icon-menu d-none d-sm-block d-md-none d-lg-block\"><i class=\"icon-calendar\"></i></a></li>#}
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle icon-menu\" data-toggle=\"dropdown\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"notification-dot\"></span>
                                </a>
                                <ul class=\"dropdown-menu notifications animated shake\">
                                    <li class=\"header\"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-info text-warning\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Campaign <strong>Holiday Sale</strong> is nearly
                                                        reach budget limit.</p>
                                                    <span class=\"timestamp\">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-like text-success\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Your New Campaign <strong>Holiday Sale</strong> is
                                                        approved.</p>
                                                    <span class=\"timestamp\">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-pie-chart text-info\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Website visits from Twitter is 27% higher than last
                                                        week.</p>
                                                    <span class=\"timestamp\">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <i class=\"icon-info text-danger\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <p class=\"text\">Error on website analytics configurations</p>
                                                    <span class=\"timestamp\">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"footer\"><a href=\"javascript:void(0);\" class=\"more\">See all
                                            notifications</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-toggle icon-menu\"
                                   data-toggle=\"dropdown\"><i class=\"icon-equalizer\"></i></a>
                                <ul class=\"dropdown-menu user-menu menu-icon animated bounceIn\">
                                    <li class=\"menu-heading\">ACCOUNT SETTINGS</li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-note\"></i> <span>Basic</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-equalizer\"></i>
                                            <span>Preferences</span></a></li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-lock\"></i> <span>Privacy</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-bell\"></i>
                                            <span>Notifications</span></a></li>
                                    <li class=\"menu-heading\">BILLING</li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-credit-card\"></i>
                                            <span>Payments</span></a></li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-printer\"></i> <span>Invoices</span></a>
                                    </li>
                                    <li><a href=\"javascript:void(0);\"><i class=\"icon-refresh\"></i> <span>Renewals</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"/logout\" class=\"icon-menu\"><i class=\"icon-login\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    {% endblock %}
    {% set tab_menu_index, tab_menu_profile, tab_menu_histo, tab_menu_source, tab_admin_users, tab_admin_sellers, tab_admin_admins, tab_admin_products, nav_menu, nav_admin = \"active\", \"\", \"\", \"\", \"\", \"\", \"\", \"\", \"active\", \"\" %}
    {% block sidebar %}
        <div id=\"left-sidebar\" class=\"sidebar\">
            <div class=\"sidebar-scroll\">
                <div class=\"user-account\">
                    <img src=\"{{ asset('images/user.png') }}\" class=\"rounded-circle user-photo\"
                         alt=\"User Profile Picture\">
                    <div class=\"dropdown\">
                        {% set user_role = 'user_infos.roles.' ~ app.user.roles[0] %}
                        {% set user_name = app.user.firstname ~ \"  \" ~ app.user.lastname %}
                        <span>{{ user_role|trans }} {{ 'sidebar.menu.welcome'|trans }}</span>
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle user-name\"
                           data-toggle=\"dropdown\"><strong>{{ user_name }}</strong></a>
                        <ul class=\"dropdown-menu dropdown-menu-right account animated flipInY\">
                            <li><a href=\"/profile\"><i class=\"icon-user\"></i>{{ 'sidebar.menu.profile'|trans }}</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"/logout\"><i class=\"icon-power\"></i>{{ 'sidebar.menu.logout'|trans }}</a></li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\"><a class=\"nav-link {{ nav_menu }}\" data-toggle=\"tab\" href=\"#menu\"><i
                                    class=\"icon-grid\"></i></a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\"><a class=\"nav-link {{ nav_admin }}\" data-toggle=\"tab\"
                                                href=\"#admin_menu\">{{ 'sidebar.menu.admin'|trans }}</a></li>
                    {% endif %}
                    {#<li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#setting\"><i
                                    class=\"icon-settings\"></i></a>
                    </li>#}
                </ul>

                <!-- Tab panes -->
                <div class=\"tab-content p-l-0 p-r-0\">
                    <div class=\"tab-pane animated fadeIn {{ nav_menu }}\" id=\"menu\">
                        <nav class=\"sidebar-nav\">
                            <ul class=\"main-menu metismenu\">
                                <li class=\"{{ tab_menu_index }}\"><a href=\"/\"><i
                                                class=\"icon-home\"></i><span>{{ 'sidebar.menu.index'|trans }}</span></a>
                                </li>
                                <li class=\"{{ tab_menu_profile }}\"><a href=\"/profile\"><i class=\"icon-user\"></i>{{ 'sidebar.menu.profile'|trans }}</a>
                                </li>
                                <li class=\"{{ tab_menu_histo }}\"><a href=\"/purchasehistory\"><i
                                                class=\"icon-basket-loaded\"></i>{{ 'sidebar.menu.buy_histo'|trans }}</a>
                                </li>
                                <li class=\"{{ tab_menu_source }}\"><a href=\"/tracking/data\" class=\"has-arrow\"><i
                                                class=\"icon-plane\"></i><span>{{ 'sidebar.menu.product_source'|trans }}</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"tab-pane animated fadeIn {{ nav_admin }}\" id=\"admin_menu\">
                            <nav class=\"sidebar-nav\">
                                <ul class=\"main-menu metismenu\">
                                    <li class=\"{{ tab_admin_users }}\"><a href=\"/userList/users\"><i
                                                    class=\"icon-users\"></i><span>{{ 'sidebar.admin.users'|trans }}</span></a>
                                    </li>
                                    <li class=\"{{ tab_admin_sellers }}\"><a href=\"/userList/sellers\"><i
                                                    class=\"icon-users\"></i>{{ 'sidebar.admin.sellers'|trans }}</a></li>
                                    <li class=\"{{ tab_admin_admins }}\"><a href=\"/userList/admins\"><i
                                                    class=\"icon-diamond\"></i>{{ 'sidebar.admin.admins'|trans }}</a></li>
                                    <li class=\"{{ tab_admin_products }}\"><a href=\"/product\"><i
                                                    class=\"icon-basket-loaded\"></i>{{ 'sidebar.admin.products'|trans }}
                                        </a></li>
                                    {#<li>
                                        <a href=\"javascript:void(0);\" class=\"has-arrow\"><i class=\"icon-list\"></i><span>Projects</span></a>
                                        <ul>
                                            <li><a href=\"project-add.html\">Add Projects</a></li>
                                            <li><a href=\"project-list.html\">Projects List</a></li>
                                            <li><a href=\"project-detail.html\">Projects Detail</a></li>
                                        </ul>
                                    </li>#}
                                </ul>
                            </nav>
                        </div>
                    {% endif %}
                    {#<div class=\"tab-pane animated fadeIn\" id=\"setting\">
                        <div class=\"p-l-15 p-r-15\">
                            <h6>{{ 'sidebar.setting.skins'|trans }}</h6>
                            <ul class=\"choose-skin list-unstyled\">
                                <li data-theme=\"purple\">
                                    <div class=\"purple\"></div>
                                    <span>{{ 'sidebar.setting.purple'|trans }}</span>
                                </li>
                                <li data-theme=\"blue\">
                                    <div class=\"blue\"></div>
                                    <span>{{ 'sidebar.setting.blue'|trans }}</span>
                                </li>
                                <li data-theme=\"cyan\">
                                    <div class=\"cyan\"></div>
                                    <span>{{ 'sidebar.setting.cyan'|trans }}</span>
                                </li>
                                <li data-theme=\"green\">
                                    <div class=\"green\"></div>
                                    <span>{{ 'sidebar.setting.green'|trans }}</span>
                                </li>
                                <li data-theme=\"orange\" class=\"active\">
                                    <div class=\"orange\"></div>
                                    <span>{{ 'sidebar.setting.orange'|trans }}</span>
                                </li>
                                <li data-theme=\"blush\">
                                    <div class=\"blush\"></div>
                                    <span>{{ 'sidebar.setting.blush'|trans }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>#}
                </div>
            </div>
        </div>
    {% endblock %}
    {% block main_content %}{% endblock %}
</div>

{% block footer %}{% endblock %}

<!-- Javascript -->
{% block javascripts %}
    <script src=\"{{ asset('bundles_js/libscripts.bundle.js') }}\"></script>
    <script src=\"{{ asset('bundles_js/vendorscripts.bundle.js') }}\"></script>

    <script src=\"{{ asset('bundles_js/mainscripts.bundle.js') }}\"></script>
{% endblock %}
</body>
</html>", "layout.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/layout.html.twig");
    }
}
