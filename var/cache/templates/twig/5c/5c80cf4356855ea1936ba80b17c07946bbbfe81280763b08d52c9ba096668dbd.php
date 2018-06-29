<?php

/* __string_template__c09bc828d7b24a16ee9fa43293247262125e1d1591df646d855a13b1e1873f61 */
class __TwigTemplate_357929a4aa24ec89cd1114f9d364e4ce197fba061f2e81091ca5868e5734f02a extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification_header")));
        echo "
    ";
        // line 2
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
            echo " ";
            echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array());
            echo ", ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo (isset($context["login_url"]) ? $context["login_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["login_url"]) ? $context["login_url"] : null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo (isset($context["forgot_pass_url"]) ? $context["forgot_pass_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 26
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "billing_address");
        echo "</h4>
          <strong>";
        // line 27
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_lastname", array());
        echo "</strong><br>
          ";
        // line 28
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_address_2", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_address", array());
        echo "<br>
          ";
        // line 29
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_city", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_country", array());
        echo " <br>
          ";
        // line 30
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "b_phone", array());
        echo " <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 38
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo " ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "address");
        echo "</h4>
          <strong>";
        // line 39
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_lastname", array());
        echo "</strong><br>
          ";
        // line 40
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_address_2", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_address", array());
        echo "<br>
          ";
        // line 41
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_city", array());
        echo " ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_country", array());
        echo " <br>
          ";
        // line 42
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "s_phone", array());
        echo " <br>
        </td>
      </tr>
    </table>

  ";
        // line 47
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c09bc828d7b24a16ee9fa43293247262125e1d1591df646d855a13b1e1873f61";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  145 => 42,  139 => 41,  133 => 40,  127 => 39,  121 => 38,  110 => 30,  104 => 29,  98 => 28,  92 => 27,  88 => 26,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  54 => 11,  50 => 10,  44 => 7,  38 => 4,  35 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("update_profile_notification_header")} ) }}*/
/*     {% if user_data.firstname %} {{ __("dear") }} {{ user_data.firstname }}, {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br>*/
/*     {{ __("update_profile_notification_header") }}*/
/*     <br>*/
/*     <br>*/
/*     <h4 class="with-subline">{{ __("user_account_information") }}</h4>*/
/*     <table border="0" width="100%" class="info">*/
/*       <tr>*/
/*         <td><b>{{ __("login_url") }}:</b></td>*/
/*         <td><a href="{{ login_url }}">{{ login_url|puny_decode }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("email") }}:</b></td>*/
/*         <td><a>{{ user_data.email }}</a></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td><b>{{ __("password") }}:</b></td>*/
/*         <td> *********** (<a href="{{ forgot_pass_url }}">{{ __("forgot_password_question") }}</a>)</td>*/
/*       </tr>*/
/*     </table>*/
/*     <br>*/
/*     <table class="info" width="269" align="left">*/
/*       <tr>*/
/*         <td>*/
/*           <h4 class="with-subline">{{ __("billing_address") }}</h4>*/
/*           <strong>{{ user_data.b_firstname }} {{ user_data.b_lastname }}</strong><br>*/
/*           {{ user_data.b_address_2 }} {{ user_data.b_address }}<br>*/
/*           {{ user_data.b_city }} {{ user_data.b_country }} <br>*/
/*           {{ user_data.b_phone }} <br>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*     <table class="info" width="269" align="left">*/
/*       <tr>*/
/*         <td>*/
/*           <h4 class="with-subline">{{ __("shipping") }} {{ __("address") }}</h4>*/
/*           <strong>{{ user_data.s_firstname }} {{ user_data.s_lastname }}</strong><br>*/
/*           {{ user_data.s_address_2 }} {{ user_data.s_address }}<br>*/
/*           {{ user_data.s_city }} {{ user_data.s_country }} <br>*/
/*           {{ user_data.s_phone }} <br>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*   {{ snippet("footer") }}*/
