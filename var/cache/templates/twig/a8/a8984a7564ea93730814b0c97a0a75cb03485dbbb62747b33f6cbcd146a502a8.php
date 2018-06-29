<?php

/* __string_template__fad5809f88a93dcefda93d893813bd103aa4a7b1473b506c2b5334bfbbb32f0f */
class __TwigTemplate_dd2db9a2cd0dc327f6e13e930df0994cbeb3742c083ddc35c8c8b3d7d1c21f7d extends Twig_Template
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
\t<td rowspan=\"2\" style=\"padding-right: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 4
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "image", array());
        echo "
\t</td>
\t<td style=\"vertical-align: middle; text-align: left;\"><span style=\"font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; \"><strong style=\"font-weight: 600;\">";
        // line 6
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</strong></span>
\t</td>
</tr>
<tr>
\t<td style=\"vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;\"><span style=\"font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; \">";
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
        return "__string_template__fad5809f88a93dcefda93d893813bd103aa4a7b1473b506c2b5334bfbbb32f0f";
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
/* 	<td rowspan="2" style="padding-right: 20px; font-family: Helvetica, Arial, sans-serif;">{{ p.image }}*/
/* 	</td>*/
/* 	<td style="vertical-align: middle; text-align: left;"><span style="font-family: Helvetica, Arial, sans-serif; text-transfrom: uppercase; "><strong style="font-weight: 600;">{{ p.name }}</strong></span>*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* 	<td style="vertical-align: top; text-align: left; font-family: Helvetica, Arial, sans-serif;"><span style="font-size: 11px; font-weight: 400; font-family: Helvetica, Arial, sans-serif; color: #a8a8a8; ">{% if p.product_code %}{{ p.product_code }}<br> {% endif %}{% if p.options %}{{ p.options }}{%  endif %}</span>*/
/* 	</td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
