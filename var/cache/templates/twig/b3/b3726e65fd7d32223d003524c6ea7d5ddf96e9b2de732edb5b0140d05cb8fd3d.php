<?php

/* __string_template__09562c93f8884b7e83dd978a6ef79f93048d41d595bac21faf5046794ef9bd68 */
class __TwigTemplate_952aa2af456968575f6b2958e9ae0f31a4d223f7f77d2d2d5f6b2b043af7aa54 extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_p_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__09562c93f8884b7e83dd978a6ef79f93048d41d595bac21faf5046794ef9bd68";
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
/* {{ company_name }}: {{ __("change_order_status_p_subj", {"[order]": order_info.order_id}) }}*/
