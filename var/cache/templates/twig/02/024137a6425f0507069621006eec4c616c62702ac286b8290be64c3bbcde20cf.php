<?php

/* __string_template__dceccbf960e339c4f03da56fe774ca0b017979b995241965a80dd1c98f4c886c */
class __TwigTemplate_dbfe2cf3815fb64be540462564eba73df5091626f7521f6c952e9ff1fd05cc0f extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_f_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__dceccbf960e339c4f03da56fe774ca0b017979b995241965a80dd1c98f4c886c";
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
/* {{ company_name }}: {{ __("change_order_status_f_subj", {"[order]": order_info.order_id}) }}*/
