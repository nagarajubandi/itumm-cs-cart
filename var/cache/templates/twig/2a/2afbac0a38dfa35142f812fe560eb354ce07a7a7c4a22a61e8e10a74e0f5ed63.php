<?php

/* __string_template__a0d7512cc4724d5819488ab54ab0475aba32ac15b768e9ea3bc31f335ed802c6 */
class __TwigTemplate_910ba248df36adebcf7a8ae4812df898f7cb9e5c1f044537c324e0e711f17b43 extends Twig_Template
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
        echo "<table width=\"600\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr>
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\">
        <tbody>
        <tr>
            <td width=\"50%\">
                ";
        // line 9
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
        echo "
            </td>
            <td width=\"50%\">
                <p>
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "
                </p>
                <p>
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "
                </p>
                <p>
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "
                </p>
                ";
        // line 21
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            // line 22
            echo "                <p>
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 23
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "
                </p>
                ";
        }
        // line 26
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td>
        ";
        // line 34
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td>
        <table width=\"100%\">
        <tbody>
        <tr>
            <td width=\"66%\">
                ";
        // line 43
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 44
            echo "                <h2>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 45
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
            echo "
                                ";
        }
        // line 47
        echo "            </td>
            <td width=\"34%\">
                <table width=\"100%;\">
                <tbody>
                    <tr>
                        <td align=\"left\">";
        // line 52
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\">";
        // line 54
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 58
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
                        </td>
                        <td align=\"right\">";
        // line 60
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 64
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\">";
        // line 66
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 70
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td align=\"right\">";
        // line 72
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array());
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 76
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " <div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 77
        echo "                        </td>
                        <td align=\"right\">";
        // line 78
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
            echo " ";
        }
        // line 79
        echo "                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 82
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " <div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 83
        echo "                        </td>
                        <td align=\"right\">";
        // line 84
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
            echo " ";
        }
        // line 85
        echo "                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " <div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 89
        echo "                        </td>
                        <td align=\"right\">";
        // line 90
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
            echo " ";
        }
        // line 91
        echo "                        </td>
                    </tr>
                    <tr>
                        <td align=\"left\">";
        // line 94
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\">";
        // line 96
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total", array());
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__a0d7512cc4724d5819488ab54ab0475aba32ac15b768e9ea3bc31f335ed802c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 96,  221 => 94,  216 => 91,  210 => 90,  207 => 89,  201 => 88,  196 => 85,  190 => 84,  187 => 83,  181 => 82,  176 => 79,  170 => 78,  167 => 77,  161 => 76,  154 => 72,  149 => 70,  142 => 66,  137 => 64,  130 => 60,  125 => 58,  118 => 54,  113 => 52,  106 => 47,  101 => 45,  96 => 44,  94 => 43,  82 => 34,  72 => 26,  64 => 23,  61 => 22,  59 => 21,  52 => 19,  44 => 16,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <table width="600" rel="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr>*/
/*     <td>*/
/*         <table width="100%;" cellspacing="0" border="0">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="50%">*/
/*                 {{ snippet("ship_to") }}*/
/*             </td>*/
/*             <td width="50%">*/
/*                 <p>*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}</span>  {{o.timestamp}}*/
/*                 </p>*/
/*                 <p>*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}</span>  {{p.payment}}*/
/*                 </p>*/
/*                 <p>*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}</span>  {{o.shippings_method}}*/
/*                 </p>*/
/*                 {% if o.tracking_number %}*/
/*                 <p>*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}</span>  {{o.tracking_number}}*/
/*                 </p>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td>*/
/*         {{ snippet("products_table") }}*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td>*/
/*         <table width="100%">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="66%">*/
/*                 {% if o.notes %}*/
/*                 <h2>{{ __("customer_notes") }}</h2>*/
/*                 {{ o.notes }}*/
/*                                 {% endif %}*/
/*             </td>*/
/*             <td width="34%">*/
/*                 <table width="100%;">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td align="left">{{ __("subtotal") }}*/
/*                         </td>*/
/*                         <td align="right">{{o.display_subtotal}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{{o.tax_name}}*/
/*                         </td>*/
/*                         <td align="right">{{o.tax_total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{{ __("shipping") }}*/
/*                         </td>*/
/*                         <td align="right">{{ o.display_shipping_cost }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{{ __("payment_surcharge") }}*/
/*                         </td>*/
/*                         <td align="right">{{ o.payment_surcharge }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{% if o.coupon_code %} <div> {{ __("coupon") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{% if o.raw.discount %} <div> {{ __("including_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{% if o.raw.subtotal_discount %} <div> {{ __("order_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td align="left">{{ __("total") }}*/
/*                         </td>*/
/*                         <td align="right">{{o.total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
