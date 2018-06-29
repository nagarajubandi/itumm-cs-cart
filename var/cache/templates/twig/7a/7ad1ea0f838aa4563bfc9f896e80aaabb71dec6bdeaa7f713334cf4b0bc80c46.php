<?php

/* __string_template__86ad5b049200f75ef581826a6f29f2f45eec3e52ef6298ee06fa30e784132773 */
class __TwigTemplate_1631ff14e2c5486191dbd2403ae3a5ef9e0ca415a706c7acfe1c610e11b4f4c5 extends Twig_Template
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
        echo "</td>

</tr>

<tr class=\"message-footer\">
  <td>
    <table class=\"info\" width=\"250\" align=\"left\">
      <tr>
        <th class=\"footer-contact__title\">
          ";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "contact_information");
        echo "
        </th>
      </tr>
      <tr>
        <td>
          <address>";
        // line 15
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_address", array());
        echo ", ";
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_city", array());
        echo "</address>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"250\" align=\"left\">
      <tr>
        <th class=\"footer-social__title\">
          ";
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "get_social");
        echo "
        </th>
      </tr>
      <tr>
        <td class=\"footer-social\">
          <table cellspacing=\"0\" cellpadding=\"0\" align=\"left\">
            <tr>
              <td>
                <a href=\"http://www.facebook.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
              </td>
              <td>
                <a href=\"https://twitter.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/twitter.png\"></a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
";
        // line 43
        if ($this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array())) {
            // line 44
            echo "<tr class=\"message-copyright\">
  <td>
  <table class=\"copyright\" width=\"100%\">
    <tr>
      <td>
        &copy;&nbsp;";
            // line 49
            echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array());
            echo "
      </td>
      <td align=\"right\">
        ";
            // line 52
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_text_letter_footer");
            echo "
      </td>
    </tr>
  </table>
  </td>
</tr>
";
        }
        // line 59
        echo "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__86ad5b049200f75ef581826a6f29f2f45eec3e52ef6298ee06fa30e784132773";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 59,  89 => 52,  83 => 49,  76 => 44,  74 => 43,  51 => 23,  38 => 15,  30 => 10,  19 => 1,);
    }
}
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr class="message-footer">*/
/*   <td>*/
/*     <table class="info" width="250" align="left">*/
/*       <tr>*/
/*         <th class="footer-contact__title">*/
/*           {{ __("contact_information") }}*/
/*         </th>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>*/
/*           <address>{{ company_data.company_address }}, {{ company_data.company_city }}</address>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*     <table class="info" width="250" align="left">*/
/*       <tr>*/
/*         <th class="footer-social__title">*/
/*           {{ __("get_social") }}*/
/*         </th>*/
/*       </tr>*/
/*       <tr>*/
/*         <td class="footer-social">*/
/*           <table cellspacing="0" cellpadding="0" align="left">*/
/*             <tr>*/
/*               <td>*/
/*                 <a href="http://www.facebook.com"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/facebook.png"></a>*/
/*               </td>*/
/*               <td>*/
/*                 <a href="https://twitter.com"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/twitter.png"></a>*/
/*               </td>*/
/*             </tr>*/
/*           </table>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/*   </td>*/
/* </tr>*/
/* {% if company_data.company_name %}*/
/* <tr class="message-copyright">*/
/*   <td>*/
/*   <table class="copyright" width="100%">*/
/*     <tr>*/
/*       <td>*/
/*         &copy;&nbsp;{{ company_data.company_name }}*/
/*       </td>*/
/*       <td align="right">*/
/*         {{ __("customer_text_letter_footer") }}*/
/*       </td>*/
/*     </tr>*/
/*   </table>*/
/*   </td>*/
/* </tr>*/
/* {% endif %}*/
/* </table>*/
/* <!-- content-wrapper -->*/
/* </td>*/
/* </tr>*/
/* </table>*/
/* <!-- main-wrapper -->*/
/* </body>*/
/* </html>*/
