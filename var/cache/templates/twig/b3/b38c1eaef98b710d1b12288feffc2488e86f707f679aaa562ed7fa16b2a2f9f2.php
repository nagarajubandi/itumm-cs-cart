<?php

/* __string_template__2e74f4ddaed13b8cc995c011c4bf2a68879de5bc670e2146252fb9e0c5a9ca5c */
class __TwigTemplate_83eeaeeebfa75b30fa5097421e852ccb6e1e5bbbb18a501033c82e662e2c320b extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__2e74f4ddaed13b8cc995c011c4bf2a68879de5bc670e2146252fb9e0c5a9ca5c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ company_name }}: {{ __("new_profile_notification") }}*/
