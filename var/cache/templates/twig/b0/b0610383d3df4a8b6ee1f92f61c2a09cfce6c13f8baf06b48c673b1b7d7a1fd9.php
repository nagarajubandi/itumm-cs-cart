<?php

/* __string_template__23e4a014875f2f13adec752f5c2bdd71d0d31e2492be4c2b47dfaa984b54b7e0 */
class __TwigTemplate_ce091f5f5f5520869ffdaacd6dde4c6ef0e54f7e66904a6d5f4fd9c580f7885d extends Twig_Template
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
        if ($this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array())) {
            // line 4
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
            echo " ";
            echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "firstname", array());
            echo ",
";
        } else {
            // line 6
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",
";
        }
        // line 8
        echo "<br><br>
";
        // line 9
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hybrid_auth.password_generated");
        echo ": ";
        echo $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "password", array());
        echo "<br> <br />
";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hybrid_auth.change_password");
        echo ": <br>
<a href=\"";
        // line 11
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\">";
        echo $this->env->getExtension('tygh.core')->punyDecodeFilter((isset($context["url"]) ? $context["url"] : null));
        echo "</a>
<br />

";
        // line 14
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__23e4a014875f2f13adec752f5c2bdd71d0d31e2492be4c2b47dfaa984b54b7e0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  51 => 11,  47 => 10,  41 => 9,  38 => 8,  33 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/* {% if user_data.firstname %}*/
/* {{ __("dear") }} {{ user_data.firstname }},*/
/* {% else %}*/
/* {{ __("hello") }},*/
/* {% endif %}*/
/* <br><br>*/
/* {{ __("hybrid_auth.password_generated") }}: {{ user_data.password }}<br> <br />*/
/* {{ __("hybrid_auth.change_password") }}: <br>*/
/* <a href="{{ url }}">{{ url|puny_decode }}</a>*/
/* <br />*/
/* */
/* {{ snippet("footer") }}*/
