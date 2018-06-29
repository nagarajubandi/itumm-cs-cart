<?php

/* __string_template__e8c2bfe9c6bbf970e13b3e00d09daa149429b60a1a2008a742e8665b8cd59f02 */
class __TwigTemplate_07c9b6125154c71ccd4a160ad4e7659999acc4cecc398c2e207b03a298fd99eb extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "update_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__e8c2bfe9c6bbf970e13b3e00d09daa149429b60a1a2008a742e8665b8cd59f02";
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
/* {{ company_name }}: {{ __("update_profile_notification") }}*/
