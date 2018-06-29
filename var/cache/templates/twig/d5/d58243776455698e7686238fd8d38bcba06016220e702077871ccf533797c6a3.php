<?php

/* __string_template__84e442ca445ad6932cfd968197fa4e0c3cd959f4baa7bb5124077b146fe51086 */
class __TwigTemplate_7a866b61649c5793e191a988483b0593baf44c14a3c00acb236cfe289f4872fd extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_i_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__84e442ca445ad6932cfd968197fa4e0c3cd959f4baa7bb5124077b146fe51086";
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
/* {{ company_name }}: {{ __("change_order_status_i_subj", {"[order]": order_info.order_id}) }}*/
