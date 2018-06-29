<?php

/* __string_template__7592afaf58724a7138903614c9910262b572d195c2dac314061e8cad1d3edec1 */
class __TwigTemplate_1260de5fc6bf30567f952059783578b202ef7cb68e1375b8205b8f1a130a396a extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_b_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__7592afaf58724a7138903614c9910262b572d195c2dac314061e8cad1d3edec1";
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
/* {{ company_name }}: {{ __("change_order_status_b_subj", {"[order]": order_info.order_id}) }}*/
