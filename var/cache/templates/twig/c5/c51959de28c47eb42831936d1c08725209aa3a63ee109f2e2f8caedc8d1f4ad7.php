<?php

/* __string_template__5e348f8f936b8fae68c8a66a1cb2a001b62b5e6f1128de529a192a07db51c0f2 */
class __TwigTemplate_ea0bacbfb358329bb17029403ec753fd7e479d1ec243441ccc4ace86bf00ac95 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()), "[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__5e348f8f936b8fae68c8a66a1cb2a001b62b5e6f1128de529a192a07db51c0f2";
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
/* {{ company_name }}: {{ __("change_order_status_default_subj", {"[order]": order_info.order_id, "[status]": order_status.description}) }}*/
