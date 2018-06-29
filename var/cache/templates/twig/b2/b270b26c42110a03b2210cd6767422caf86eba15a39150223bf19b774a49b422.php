<?php

/* __string_template__7447071af2149e4bb7c320980b182156254ae1a2f27a737eb7f1cd77bf392b6e */
class __TwigTemplate_656cc288963f332094ace9c5a29e8873c7e2947eb283311f6449d2ba00f799b3 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_approval_pending");
    }

    public function getTemplateName()
    {
        return "__string_template__7447071af2149e4bb7c320980b182156254ae1a2f27a737eb7f1cd77bf392b6e";
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
/* {{ __("vendor_approval_pending") }}*/
