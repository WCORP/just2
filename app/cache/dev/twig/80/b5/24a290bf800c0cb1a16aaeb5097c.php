<?php

/* Just2FrontendBundle:VenueJust:venuesearch.html.twig */
class __TwigTemplate_80b524a290bf800c0cb1a16aaeb5097c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("Just2FrontendBundle:Theme:base.html.twig");

        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Just2FrontendBundle:Theme:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_script($context, array $blocks = array())
    {
        // line 4
        echo "
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Venue Search - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<form method=\"POST\" action=\"/app_dev.php/venue\">
\t
\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "

\t<fieldset>
        <div class=\"form-actions\">
            
            <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "Just2FrontendBundle:VenueJust:venuesearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 13,  47 => 12,  40 => 9,  33 => 4,  30 => 3,);
    }
}
