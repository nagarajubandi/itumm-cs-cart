<?php

/* __string_template__fe73504566e525fd9ef12dd097aecd002b7afa8ded21e2ca6c64e5cae9d7f212 */
class __TwigTemplate_bc6fa5c1b7edeba287b8669a4c611eee05c65f5e7828378efaa57b2ed147ac0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "display_subtotal", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__fe73504566e525fd9ef12dd097aecd002b7afa8ded21e2ca6c64e5cae9d7f212";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p><strong style="font-weight:600;">{{ p.display_subtotal }}</strong></p>*/
