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
        $__internal_786ab58829f84808ac2dff56e2c44c25b6cd228ad49a302e8631e709f75f34fb = $this->env->getExtension("native_profiler");
        $__internal_786ab58829f84808ac2dff56e2c44c25b6cd228ad49a302e8631e709f75f34fb->enter($__internal_786ab58829f84808ac2dff56e2c44c25b6cd228ad49a302e8631e709f75f34fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_786ab58829f84808ac2dff56e2c44c25b6cd228ad49a302e8631e709f75f34fb->leave($__internal_786ab58829f84808ac2dff56e2c44c25b6cd228ad49a302e8631e709f75f34fb_prof);

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
