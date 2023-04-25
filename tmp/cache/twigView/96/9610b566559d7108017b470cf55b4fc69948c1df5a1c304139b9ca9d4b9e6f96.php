<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\cakephpinitial\vendor\cakephp\bake\src\Template\Bake\\Plugin\.gitignore.twig */
class __TwigTemplate_68fce213f9511809f24834e0fc43b9e30b99ecb43b65c2a53bcd8a5adb26a0e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\.gitignore.twig"));

        // line 1
        echo "/composer.lock
/phpunit.xml
/vendor
config/Migrations/schema-dump-default.lock
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\.gitignore.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("/composer.lock
/phpunit.xml
/vendor
config/Migrations/schema-dump-default.lock
", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\.gitignore.twig", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\.gitignore.twig");
    }
}
