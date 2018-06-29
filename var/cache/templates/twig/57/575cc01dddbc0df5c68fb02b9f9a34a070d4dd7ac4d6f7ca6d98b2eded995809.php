<?php

/* __string_template__61977786b68075279570c507f19716ca3498c75e40773798abd6b9d6c6446ba6 */
class __TwigTemplate_71103e17c585689b8adfc7b0d30e06089c193829cf37a0aa2edc1c0082cb7898 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "

  ";
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        if (((((((isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D")) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A"))) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) || (((isset($context["status_from"]) ? $context["status_from"] : null) == "D") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P")))) {
            // line 6
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_changed", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array()), "[status]" => (isset($context["status"]) ? $context["status"] : null)));
            echo "
";
        } elseif (((        // line 7
(isset($context["status_from"]) ? $context["status_from"] : null) == "A") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_active_to_pending", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array())));
            echo "
";
        } elseif (((        // line 9
(isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A"))) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array())));
            echo "
";
        } elseif (((        // line 11
(isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "D"))) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_disable", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array())));
            echo "
";
        } elseif (((        // line 13
(isset($context["status_from"]) ? $context["status_from"] : null) == "N") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "P"))) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_pending", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array())));
            echo "
";
        } elseif (((        // line 15
(isset($context["status_from"]) ? $context["status_from"] : null) == "P") && ((isset($context["status_to"]) ? $context["status_to"] : null) == "A"))) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_pending_to_active", array("[company]" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array())));
            echo "
";
        }
        // line 18
        echo "
<br /><br />

";
        // line 21
        if ((isset($context["reason"]) ? $context["reason"] : null)) {
            // line 22
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo (isset($context["reason"]) ? $context["reason"] : null);
            echo "
<br /><br />
";
        }
        // line 25
        echo "
";
        // line 26
        if (((isset($context["e_account"]) ? $context["e_account"] : null) == "updated")) {
            // line 27
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_updated", array("[link]" => (isset($context["vendor_url"]) ? $context["vendor_url"] : null), "[link_text]" => $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["vendor_url"]) ? $context["vendor_url"] : null)), "[login]" => (isset($context["e_username"]) ? $context["e_username"] : null)));
            echo "
";
        } elseif ((        // line 28
(isset($context["e_account"]) ? $context["e_account"] : null) == "new")) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_created", array("[link]" => (isset($context["vendor_url"]) ? $context["vendor_url"] : null), "[link_text]" => $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["vendor_url"]) ? $context["vendor_url"] : null)), "[login]" => (isset($context["e_username"]) ? $context["e_username"] : null), "[password]" => (isset($context["e_password"]) ? $context["e_password"] : null)));
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__61977786b68075279570c507f19716ca3498c75e40773798abd6b9d6c6446ba6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  105 => 31,  99 => 29,  97 => 28,  92 => 27,  90 => 26,  87 => 25,  79 => 22,  77 => 21,  72 => 18,  66 => 16,  64 => 15,  59 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 10,  43 => 9,  38 => 8,  36 => 7,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*   {{ __("hello") }},<br /><br />*/
/* */
/* {% if (status_from == "A" and status_to == "D") or (status_from == "D" and status_to == "A") or (status_from == "P" and status_to == "D") or (status_from == "D" and status_to == "P") %}*/
/*     {{ __("text_company_status_changed", {"[company]": company.company_name, "[status]": status}) }}*/
/* {% elseif status_from == "A" and status_to == "P" %}*/
/*     {{ __("text_company_status_active_to_pending", {"[company]": company.company_name}) }}*/
/* {% elseif status_from == "N" and status_to == "A" %}*/
/*     {{ __("text_company_status_new_to_active", {"[company]": company.company_name}) }}*/
/* {% elseif status_from == "N" and status_to == "D" %}*/
/*     {{ __("text_company_status_new_to_disable", {"[company]": company.company_name}) }}*/
/* {% elseif status_from == "N" and status_to == "P" %}*/
/*     {{ __("text_company_status_new_to_pending", {"[company]": company.company_name}) }}*/
/* {% elseif status_from == "P" and status_to == "A" %}*/
/*     {{ __("text_company_status_pending_to_active", {"[company]": company.company_name}) }}*/
/* {% endif %}*/
/* */
/* <br /><br />*/
/* */
/* {% if reason %}*/
/* {{ __("reason") }}: {{ reason }}*/
/* <br /><br />*/
/* {% endif %}*/
/* */
/* {% if e_account == 'updated' %}*/
/*     {{ __("text_company_status_new_to_active_administrator_updated", {"[link]": vendor_url, "[link_text]": vendor_url|puny_decode, "[login]": e_username}) }}*/
/* {% elseif e_account == 'new' %}*/
/*     {{ __("text_company_status_new_to_active_administrator_created", {"[link]": vendor_url, "[link_text]": vendor_url|puny_decode, "[login]": e_username, "[password]": e_password}) }}*/
/* {% endif %}*/
/* */
/* {{ snippet("footer") }}*/
