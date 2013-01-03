<?php

/* Just2FrontendBundle:Theme:base.html.twig */
class __TwigTemplate_c4cbb9581c0601349e7ba31568e3d8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'advertisement' => array($this, 'block_advertisement'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/just2frontend/css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        // line 6
        $this->displayBlock('script', $context, $blocks);
        // line 7
        echo " 

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>

    <body>
\t    ";
        // line 14
        echo "        <header>
            <div class=\"navbar\">
                <div class=\"navbar-inner\">\t\t\t
                    <div class=\"pull-right\">\t\t\t\t
                        <ul class=\"nav\">
                            <li><a href=\"#\">Categories</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">Jobs</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                            <li><a href=\"#\">Site Map</a></li>
                        </ul>
                    </div>\t\t\t
                </div>
                <div class=\"navbar-inner\">\t\t\t
                    <div class=\"pull-right navbar-text \">
                        ";
        // line 29
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 30
            echo "                        <ul class=\"nav\">
                            <li>
                                <a>Welcome! ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_logout"), "html", null, true);
            echo "\">Logout</a>
                            </li>
                        </ul>
                        ";
        } else {
            // line 39
            echo "                        <ul class=\"nav\">
                            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login"), "html", null, true);
            echo "\">Member Login</a></li>
                            <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_register"), "html", null, true);
            echo "\">Register</a></li>
                        </ul>
                        ";
        }
        // line 44
        echo "                    </div>
                    <div class=\"navbar-text pull-right\">1,129,978 members</div> 
                </div>
            </div>
        </header>
\t    ";
        // line 50
        echo "
\t    ";
        // line 52
        echo "        <div class=\"container\">
            ";
        // line 54
        echo "            <div class=\"row hero-unit\">
                <div class=\"span2\" style=\"text-align: right\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/img/just2_logo.png\" height=\"200\" width=\"200\">
                </div>
                <div class=\"span8\">
                    <div class=\"row\">
                        <div class=\"span9\"><h1>Date someone real Have Fun</h1></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"span8\">
                            <p>&nbsp;</p>
                            <ul class=\"nav nav-pills\">\t\t\t\t\t\t
                                <li><a href=\"index.html\">Home</a></li>
                                <li><a href=\"#\">Date Search</a></li>
                                <li><a href=\"#\">Venue Search</a></li>
                                <li><a href=\"#\">My Account</a></li>
                                <li><a href=\"#\">Dating Service</a></li>\t\t\t\t  \t\t\t
                            </ul>
                        </div>\t
                    </div>
                </div>
            </div>
            ";
        // line 77
        echo "

        \t";
        // line 80
        echo "        \t";
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "        \t";
        // line 82
        echo "
        </div>
\t    ";
        // line 85
        echo "
    \t";
        // line 87
        echo "    \t";
        $this->displayBlock('advertisement', $context, $blocks);
        // line 88
        echo "    \t";
        // line 89
        echo "
\t    ";
        // line 91
        echo "        <div class=\"container\">
            <footer>
                <div class=\"row\">\t\t\t
                    <a href=\"#\">Register</a> | <a href=\"#\">My Account</a> | <a href=\"#\">Community</a> | <a href=\"#\">Terms & Conditions</a> | <a href=\"#\">Profile</a> | <a href=\"#\">Quick date search</a> | <a href=\"#\">Home</a> | <a href=\"#\">Home</a> | <a href=\"#\">Home</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Home</a> | <a href=\"#\">Home</a> | <a href=\"#\">Home</a> | <a href=\"#\">Home</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Search shortlist</a> | <a href=\"#\">Pending Acceptance</a> | <a href=\"#\">Pending Acceptance</a> | <a href=\"#\">Bid Declined</a> | <a href=\"#\">Member Login</a> | <a href=\"#\">id Accepted</a> | <a href=\"#\">Winning bid</a> | <a href=\"#\">Winning bid</a>
                </div>
            </footer>
        </div>
\t    ";
        // line 99
        echo "    </body>
</html>";
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Just2";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 87
    public function block_advertisement($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Just2FrontendBundle:Theme:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 87,  184 => 80,  178 => 9,  173 => 6,  168 => 99,  159 => 91,  156 => 89,  154 => 88,  151 => 87,  148 => 85,  144 => 82,  142 => 81,  139 => 80,  135 => 77,  112 => 56,  108 => 54,  105 => 52,  102 => 50,  95 => 44,  89 => 41,  85 => 40,  82 => 39,  75 => 35,  69 => 32,  65 => 30,  63 => 29,  46 => 14,  39 => 9,  35 => 7,  29 => 5,  23 => 1,  54 => 15,  50 => 13,  47 => 12,  40 => 9,  33 => 6,  30 => 3,);
    }
}
