<?php

/* __string_template__f6427f766b8b3a5ee8b8a4ca97cf26d9274a08be2bf39d6079f3cb1ab9531b1e */
class __TwigTemplate_e57dd4d6453eaeab3de17b8b36dbd0daf94a311ce0321f2587336b839835f7fa extends Twig_Template
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
        echo "<table>
<tbody>
<tr>
\t<!--<td rowspan=\"2\" style=\"padding-right: 20px;\">";
        // line 4
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array());
        echo "
\t</td>-->
\t<td style=\"vertical-align: middle; text-align: left;\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: 600;\">";
        // line 6
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</strong></span>
\t</td>
</tr>
<tr>
\t<td style=\"vertical-align: top; text-align: left;\"><span style=\"font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
        // line 10
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array());
            echo "<br> ";
        }
        if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array())) {
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "options", array());
        }
        echo "</span>
\t</td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__f6427f766b8b3a5ee8b8a4ca97cf26d9274a08be2bf39d6079f3cb1ab9531b1e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <table>*/
/* <tbody>*/
/* <tr>*/
/* 	<!--<td rowspan="2" style="padding-right: 20px;">{{ p.image }}*/
/* 	</td>-->*/
/* 	<td style="vertical-align: middle; text-align: left;"><span style="font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; "><strong style="font-weight: 600;">{{ p.name }}</strong></span>*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* 	<td style="vertical-align: top; text-align: left;"><span style="font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; ">{% if p.product_code %}{{ p.product_code }}<br> {% endif %}{% if p.options %}{{ p.options }}{%  endif %}</span>*/
/* 	</td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
