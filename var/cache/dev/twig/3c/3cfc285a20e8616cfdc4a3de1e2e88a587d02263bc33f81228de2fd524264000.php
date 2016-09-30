<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fc40122430ea8468527aecd7ae9d9b70bb7a1b54c74de9cce1e58555f208dd55 extends Twig_Template
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
        $__internal_9f06ed0d277e9d082c9c5ee175d1886389f834c1c6ada669a8be008eaf6882a7 = $this->env->getExtension("native_profiler");
        $__internal_9f06ed0d277e9d082c9c5ee175d1886389f834c1c6ada669a8be008eaf6882a7->enter($__internal_9f06ed0d277e9d082c9c5ee175d1886389f834c1c6ada669a8be008eaf6882a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9f06ed0d277e9d082c9c5ee175d1886389f834c1c6ada669a8be008eaf6882a7->leave($__internal_9f06ed0d277e9d082c9c5ee175d1886389f834c1c6ada669a8be008eaf6882a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
