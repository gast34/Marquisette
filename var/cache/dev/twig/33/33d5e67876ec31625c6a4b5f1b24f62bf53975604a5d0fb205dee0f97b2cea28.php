<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0fcfb20a000c93a34f2f4dcae320958d6d9d8b0b5d1563194b6bc944a476e0d7 extends Twig_Template
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
        $__internal_14f42fad2bd7fb6cab47675dde732bd4e40860bb4e7d7dbe7d60b00da9271b97 = $this->env->getExtension("native_profiler");
        $__internal_14f42fad2bd7fb6cab47675dde732bd4e40860bb4e7d7dbe7d60b00da9271b97->enter($__internal_14f42fad2bd7fb6cab47675dde732bd4e40860bb4e7d7dbe7d60b00da9271b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_14f42fad2bd7fb6cab47675dde732bd4e40860bb4e7d7dbe7d60b00da9271b97->leave($__internal_14f42fad2bd7fb6cab47675dde732bd4e40860bb4e7d7dbe7d60b00da9271b97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
