<?php

/* bundles/TwigBundle/Exception/error403.html.twig */
class __TwigTemplate_e423c27f9c43bc61cdd3424098a34f4919f6f1a604ccd519a5438efd9f0ccae1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/TwigBundle/Exception/error403.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bundles/TwigBundle/Exception/error403.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

    ";
        // line 9
        echo "    <title>403 会员管理系统</title>
    <!-- VENDOR CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color_skins.css"), "html", null, true);
        echo "\"/>
</head>

<body class=\"theme-orange\">
<!-- WRAPPER -->
<div id=\"wrapper\">
    <div class=\"vertical-align-wrap\">
        <div class=\"vertical-align-middle auth-main\">
            <div class=\"auth-box\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h3>
                            <span class=\"clearfix title\">
                                <span class=\"number left\">错误</span> <span class=\"text\">403 <br/>禁止访问当前页面</span>
                            </span>
                        </h3>
                    </div>
                    <div class=\"body\">
                        <p>你没有权限访问当前页面。</p>
                        <div class=\"margin-top-30\">
                            <a href=\"javascript:history.go(-1)\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i>
                                <span>返回</span></a>
                            <a href=\"index.html\" class=\"btn btn-primary\"><i class=\"fa fa-home\"></i>
                                <span>主页</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  51 => 14,  46 => 12,  42 => 11,  38 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

    {#<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">#}
    <title>403 会员管理系统</title>
    <!-- VENDOR CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\"/>
    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/color_skins.css') }}\"/>
</head>

<body class=\"theme-orange\">
<!-- WRAPPER -->
<div id=\"wrapper\">
    <div class=\"vertical-align-wrap\">
        <div class=\"vertical-align-middle auth-main\">
            <div class=\"auth-box\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h3>
                            <span class=\"clearfix title\">
                                <span class=\"number left\">错误</span> <span class=\"text\">403 <br/>禁止访问当前页面</span>
                            </span>
                        </h3>
                    </div>
                    <div class=\"body\">
                        <p>你没有权限访问当前页面。</p>
                        <div class=\"margin-top-30\">
                            <a href=\"javascript:history.go(-1)\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i>
                                <span>返回</span></a>
                            <a href=\"index.html\" class=\"btn btn-primary\"><i class=\"fa fa-home\"></i>
                                <span>主页</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
</html>

", "bundles/TwigBundle/Exception/error403.html.twig", "/Users/yuxiangwang/Desktop/User-Management-system/templates/bundles/TwigBundle/Exception/error403.html.twig");
    }
}
