<?php

/* __string_template__6cf0ef415636376fd4d91986bb215d4a477796b55344afb43a825b3dc7c00152 */
class __TwigTemplate_938df9ef7906ee7471b3ba1a9950c79d223148126d6976fd2e4dabbc66736409 extends Twig_Template
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
        echo "<table rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr>
\t<td>
\t\t<table width=\"100%;\" cellspacing=\"0\" border=\"0\">
\t\t<tbody>
\t\t<tr>
\t\t\t<td width=\"55%\"><img src=\"http://qa.itumm.com/images/logos/3/iTumm_Final_logo_small-01-color_modified.png\" style=\"width: 300px; height: 73px;\" width=\"300\" height=\"73\" alt=\"itumm\"> <br><br><br>";
        // line 8
        echo $this->getAttribute((isset($context["barcode"]) ? $context["barcode"] : null), "image", array());
        echo "
\t\t\t\t<br><br><br>
\t\t\t</td>
\t\t\t<td width=\"45%\">
\t\t\t\t<p>
\t\t\t\t\t<span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 13
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "invoice_id_text", array());
        echo "</span></p><p><span style=\"background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo ":</span>&nbsp;";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "</p><p><span style=\"background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo ":</span> ";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "</p><p><span style=\"background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo ":</span> \t";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "</p><p>";
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            echo "<span style=\"background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo ":</span>";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "</p><p>";
        }
        echo "</p><br><br>
\t\t\t</td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td colspan=\"2\">
\t\t<table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
\t\t<tbody>
\t\t<tr>
\t\t\t<td width=\"30%\">
\t\t\t\t<h1>";
        // line 26
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "store");
        echo "</h1>
\t\t\t\t<p><strong>";
        // line 27
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name", array());
        echo "</strong></p>
<p><strong>PAN No: ";
        // line 28
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "pan_no", array());
        echo "</strong></p><p><strong>GST No: ";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "gst_reg_no", array());
        echo "</strong></p><p>";
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "company_address");
        echo "<br></p></td>
<td width=\"2%\">&nbsp;</td>
\t\t\t<td width=\"33%\">
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "bill_to");
        echo "
\t\t\t</td>
<td width=\"2%\">&nbsp;</td>
\t\t\t<td width=\"33%\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td>
\t\t";
        // line 44
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
\t</td>
</tr>
<tr>
\t<td>
\t\t<table width=\"100%\">
\t\t<tbody>
\t\t<tr>
\t\t\t<td width=\"55%\">
\t\t\t\t";
        // line 53
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 54
            echo "\t\t\t\t<h2>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
\t\t\t\t";
            // line 55
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
            echo "
                                ";
        }
        // line 57
        echo "\t\t\t\t<br><br><br>";
        echo (isset($context["barcode"]) ? $context["barcode"] : null);
        echo "<br>
\t\t\t</td>
\t\t\t<td width=\"45%\">
\t\t\t\t<p><br>
\t\t\t\t</p>
\t\t\t\t<table width=\"100%;\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 65
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 67
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<!--<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 71
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 73
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>-->
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 77
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 79
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 83
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            // line 84
            echo "\t\t\t\t\t\t<div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo "
\t\t\t\t\t\t</div> ";
        }
        // line 86
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 87
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
            echo " ";
        }
        // line 88
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 91
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            // line 92
            echo "\t\t\t\t\t\t<div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo "
\t\t\t\t\t\t</div> ";
        }
        // line 94
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 95
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
            echo " ";
        }
        // line 96
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 99
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            // line 100
            echo "\t\t\t\t\t\t<div> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo "
\t\t\t\t\t\t</div> ";
        }
        // line 102
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"right\">";
        // line 103
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
            echo " ";
        }
        // line 104
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\">";
        // line 107
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "<br>
<span style=\"font-size: 10px;\">(Inclusive of all Taxes)</span></td>
\t\t\t\t\t<td align=\"right\">";
        // line 109
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total", array());
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t</td>
</tr>
<tr>
<td>
<p><strong>Amount in words:</strong> ";
        // line 122
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total_in_words", array());
        echo " only.</p>
</td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__6cf0ef415636376fd4d91986bb215d4a477796b55344afb43a825b3dc7c00152";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 122,  252 => 109,  247 => 107,  242 => 104,  236 => 103,  233 => 102,  227 => 100,  225 => 99,  220 => 96,  214 => 95,  211 => 94,  205 => 92,  203 => 91,  198 => 88,  192 => 87,  189 => 86,  183 => 84,  181 => 83,  174 => 79,  169 => 77,  162 => 73,  157 => 71,  150 => 67,  145 => 65,  133 => 57,  128 => 55,  123 => 54,  121 => 53,  109 => 44,  97 => 35,  90 => 31,  80 => 28,  76 => 27,  72 => 26,  36 => 13,  28 => 8,  19 => 1,);
    }
}
/* <table rel="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" width="100%;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr>*/
/* 	<td>*/
/* 		<table width="100%;" cellspacing="0" border="0">*/
/* 		<tbody>*/
/* 		<tr>*/
/* 			<td width="55%"><img src="http://qa.itumm.com/images/logos/3/iTumm_Final_logo_small-01-color_modified.png" style="width: 300px; height: 73px;" width="300" height="73" alt="itumm"> <br><br><br>{{ barcode.image }}*/
/* 				<br><br><br>*/
/* 			</td>*/
/* 			<td width="45%">*/
/* 				<p>*/
/* 					<span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;">{{ o.invoice_id_text }}</span></p><p><span style="background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}:</span>&nbsp;{{o.timestamp}}</p><p><span style="background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}:</span> {{p.payment}}</p><p><span style="background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}:</span> 	{{o.shippings_method}}</p><p>{% if o.tracking_number %}<span style="background-color: transparent; color: rgb(0, 0, 0); font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}:</span>{{o.tracking_number}}</p><p>{% endif %}</p><br><br>*/
/* 			</td>*/
/* 		</tr>*/
/* 		</tbody>*/
/* 		</table>*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* 	<td colspan="2">*/
/* 		<table width="100%;" cellspacing="0" cellpadding="0" border="0">*/
/* 		<tbody>*/
/* 		<tr>*/
/* 			<td width="30%">*/
/* 				<h1>{{__("store")}}</h1>*/
/* 				<p><strong>{{c.name}}</strong></p>*/
/* <p><strong>PAN No: {{c.pan_no}}</strong></p><p><strong>GST No: {{c.gst_reg_no}}</strong></p><p>{{ snippet("company_address") }}<br></p></td>*/
/* <td width="2%">&nbsp;</td>*/
/* 			<td width="33%">*/
/* 				{{ snippet("bill_to") }}*/
/* 			</td>*/
/* <td width="2%">&nbsp;</td>*/
/* 			<td width="33%">*/
/* 				{{ snippet("ship_to") }}*/
/* 			</td>*/
/* 		</tr>*/
/* 		</tbody>*/
/* 		</table>*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* 	<td>*/
/* 		{{ snippet("products_table") }}*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* 	<td>*/
/* 		<table width="100%">*/
/* 		<tbody>*/
/* 		<tr>*/
/* 			<td width="55%">*/
/* 				{% if o.notes %}*/
/* 				<h2>{{ __("customer_notes") }}</h2>*/
/* 				{{ o.notes }}*/
/*                                 {% endif %}*/
/* 				<br><br><br>{{ barcode }}<br>*/
/* 			</td>*/
/* 			<td width="45%">*/
/* 				<p><br>*/
/* 				</p>*/
/* 				<table width="100%;">*/
/* 				<tbody>*/
/* 				<tr>*/
/* 					<td align="left">{{ __("subtotal") }}*/
/* 					</td>*/
/* 					<td align="right">{{o.display_subtotal}}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<!--<tr>*/
/* 					<td align="left">{{o.tax_name}}*/
/* 					</td>*/
/* 					<td align="right">{{o.tax_total}}*/
/* 					</td>*/
/* 				</tr>-->*/
/* 				<tr>*/
/* 					<td align="left">{{ __("shipping") }}*/
/* 					</td>*/
/* 					<td align="right">{{ o.display_shipping_cost }}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td align="left">{% if o.coupon_code %}*/
/* 						<div> {{ __("coupon") }}*/
/* 						</div> {% endif %}*/
/* 					</td>*/
/* 					<td align="right">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td align="left">{% if o.raw.discount %}*/
/* 						<div> {{ __("including_discount") }}*/
/* 						</div> {% endif %}*/
/* 					</td>*/
/* 					<td align="right">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td align="left">{% if o.raw.subtotal_discount %}*/
/* 						<div> {{ __("order_discount") }}*/
/* 						</div> {% endif %}*/
/* 					</td>*/
/* 					<td align="right">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td align="left">{{ __("total") }}<br>*/
/* <span style="font-size: 10px;">(Inclusive of all Taxes)</span></td>*/
/* 					<td align="right">{{o.total}}*/
/* 					</td>*/
/* 				</tr>*/
/* 				</tbody>*/
/* 				</table>*/
/* 			</td>*/
/* 		</tr>*/
/* 		</tbody>*/
/* 		</table>*/
/* 	</td>*/
/* </tr>*/
/* <tr>*/
/* <td>*/
/* <p><strong>Amount in words:</strong> {{o.total_in_words}} only.</p>*/
/* </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
