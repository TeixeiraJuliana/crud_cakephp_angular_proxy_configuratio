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

/* C:\wamp64\www\cakephpinitial\vendor\cakephp\bake\src\Template\Bake\\Plugin\src\Plugin.php.twig */
class __TwigTemplate_1a943d630687d97728876cb5a5cae159e76de66d3cb9d3557ea6a29ccf239f17 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\src\\Plugin.php.twig"));

        // line 16
        echo "<?php

namespace ";
        // line 18
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo ";

use Cake\\Core\\BasePlugin;

/**
 * Plugin for ";
        // line 23
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "
 */
class Plugin extends BasePlugin
{
}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\src\\Plugin.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 23,  37 => 18,  33 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         1.7.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php

namespace {{ namespace }};

use Cake\\Core\\BasePlugin;

/**
 * Plugin for {{ namespace }}
 */
class Plugin extends BasePlugin
{
}
", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\src\\Plugin.php.twig", "C:\\wamp64\\www\\cakephpinitial\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Plugin\\src\\Plugin.php.twig");
    }
}
