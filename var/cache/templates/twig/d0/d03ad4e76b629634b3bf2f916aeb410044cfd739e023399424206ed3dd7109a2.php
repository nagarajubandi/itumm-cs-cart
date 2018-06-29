<?php

/* __string_template__203c43bc4a91d9b6e650ae2fab3292926743a260442cde5eadd943a39bf97756 */
class __TwigTemplate_25702c69a9a947bae0568247c7401e98ebaf13d09d40e0d2413e8c98f24d470b extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification")));
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
    <strong>
      ";
        // line 7
        if (((isset($context["api_access_status"]) ? $context["api_access_status"] : null) == "enabled")) {
            // line 8
            echo "        <br>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "api_access_has_been_enabled");
            echo "<br>
      ";
        } elseif ((        // line 9
(isset($context["api_access_status"]) ? $context["api_access_status"] : null) == "disabled")) {
            // line 10
            echo "        <br>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "api_access_has_been_disabled");
            echo "<br>
      ";
        }
        // line 12
        echo "    </strong>
    <br>
    <h4 class=\"with-subline\">";
        // line 14
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 17
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 18
        echo (isset($context["login_url"]) ? $context["login_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["login_url"]) ? $context["login_url"] : null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 21
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 22
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "email", array());
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 25
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 26
        echo (isset($context["forgot_pass_url"]) ? $context["forgot_pass_url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
  ";
        // line 29
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__203c43bc4a91d9b6e650ae2fab3292926743a260442cde5eadd943a39bf97756";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  95 => 26,  91 => 25,  85 => 22,  81 => 21,  73 => 18,  69 => 17,  63 => 14,  59 => 12,  53 => 10,  51 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("update_profile_notification")} ) }}*/
/*     {% if user_data.firstname %} {{ __("dear") }} {{ user_data.firstname }}, {% else %} {{ __("hello") }}, {% endif %}*/
/*     <br>*/
/*     {{ __("update_profile_notification_header") }}*/
/*     <br>*/
/*     <strong>*/
/*       {% if api_access_status == "enabled" %}*/
/*         <br>{{ __("api_access_has_been_enabled") }}<br>*/
/*       {% elseif api_access_status == "disabled" %}*/
/*         <br>{{ __("api_access_has_been_disabled") }}<br>*/
/*       {% endif %}*/
/*     </strong>*/
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
/*   {{ snippet("footer") }}*/
