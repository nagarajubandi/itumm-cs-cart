<?php

/* __string_template__9baed73f04b2ff53a3f1ba5124f3a4fd4f295b668db5dab570168ba73a07b985 */
class __TwigTemplate_ba7cdb3099ab78fac2ca819710c3e61227040624429e2cb946d1a6d1a555cbcf extends Twig_Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "bill_to");
        echo "</h2>
\t<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
\t\t<strong>";
        // line 3
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_lastname", array());
        echo "</strong>
\t</p>
\t<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
\t\t";
        // line 6
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address", array());
        echo " <br>";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address_2", array());
        echo "
\t</p>
\t<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
\t\t";
        // line 9
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_city", array());
        echo ", ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_zipcode", array());
        echo "
\t</p>
\t<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
\t\t";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_country_descr", array());
        echo "
\t</p>
\t<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
\t\t";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_phone", array());
        echo "
\t</p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9baed73f04b2ff53a3f1ba5124f3a4fd4f295b668db5dab570168ba73a07b985";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 12,  41 => 9,  33 => 6,  25 => 3,  19 => 1,);
    }
}
/* <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;">{{__("bill_to")}}</h2>*/
/* 	<p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/* 		<strong>{{u.b_firstname}} {{u.b_lastname}}</strong>*/
/* 	</p>*/
/* 	<p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/* 		{{u.b_address}} <br>{{u.b_address_2}}*/
/* 	</p>*/
/* 	<p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/* 		{{u.b_city}}, {{u.b_state_descr}} {{u.b_zipcode}}*/
/* 	</p>*/
/* 	<p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/* 		{{u.b_country_descr}}*/
/* 	</p>*/
/* 	<p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/* 		{{u.b_phone}}*/
/* 	</p>*/
/* */
