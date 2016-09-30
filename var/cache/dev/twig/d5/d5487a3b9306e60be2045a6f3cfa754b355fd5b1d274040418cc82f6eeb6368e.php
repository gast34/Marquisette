<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1286ee6b885dd4c4b1592d4de63c7064c68bd2f9db51c9361e6cc531a4b867c9 extends Twig_Template
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
        $__internal_d3986db6d156757b5390a8a5be4b2390cbc5232f85d588271ceb8cd6fe61bb76 = $this->env->getExtension("native_profiler");
        $__internal_d3986db6d156757b5390a8a5be4b2390cbc5232f85d588271ceb8cd6fe61bb76->enter($__internal_d3986db6d156757b5390a8a5be4b2390cbc5232f85d588271ceb8cd6fe61bb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d3986db6d156757b5390a8a5be4b2390cbc5232f85d588271ceb8cd6fe61bb76->leave($__internal_d3986db6d156757b5390a8a5be4b2390cbc5232f85d588271ceb8cd6fe61bb76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
