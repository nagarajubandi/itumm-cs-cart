<?php

/* __string_template__6d3b6b5640bdff4caec0dbd9a98ed699c177e07d94f6b9cdc617b771639d0b09 */
class __TwigTemplate_4b62b7d81c475812fdf4d65f7c90021f1b31847e854d2d710403cb17a7f8b18b extends Twig_Template
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
        if ((((((isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D")) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P")))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_disable_subj");
        } elseif ((((isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif (((((isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A")) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A")))) {
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__6d3b6b5640bdff4caec0dbd9a98ed699c177e07d94f6b9cdc617b771639d0b09";
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
/* {% if (status_from == "A" and status_to == "D") or (status_from == "P" and status_to == "D") or (status_from == "D" and status_to == "P") %}    {{ __("text_company_status_disabled_subj") }}{% elseif status_from == "A" and status_to == "P" %}    {{ __("text_company_status_pending_subj") }}{% elseif status_from == "N" and status_to == "A" %}    {{ __("text_company_status_new_to_active_subj") }}{% elseif status_from == "N" and status_to == "D" %}    {{ __("text_company_status_new_to_disable_subj") }}{% elseif status_from == "N" and status_to == "P" %}    {{ __("text_company_status_new_to_active_subj") }}{% elseif (status_from == "P" and status_to == "A") or (status_from == "D" and status_to == "A") %}    {{ __("text_company_status_active_subj") }}{% endif %}*/
