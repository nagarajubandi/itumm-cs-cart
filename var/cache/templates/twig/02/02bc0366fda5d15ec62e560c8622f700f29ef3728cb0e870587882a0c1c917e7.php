<?php

/* __string_template__80aec92e0e07461522c7f05a565fb14b6006c36a661fa3b4c5e48e51c392cd58 */
class __TwigTemplate_73980e0df9ac36fd12f4039ad9272a5b662bf3b35d56dcf8a29bbec73f0ff7bf extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_o_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())))));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
        echo " ";
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())) {
            echo $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array());
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        echo ",
    <br />
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_text", array("[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__80aec92e0e07461522c7f05a565fb14b6006c36a661fa3b4c5e48e51c392cd58";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 6,  37 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("change_order_status_o_subj", {"[order]": order_info.order_id}) } ) }}*/
/*     {{ __("dear") }} {% if order_info.firstname %}{{ order_info.firstname }} {% else %} {{ __("customer") }} {% endif %},*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
