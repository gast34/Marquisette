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
        $__internal_1056117ec594290780a4aa3c103907599b65885dbaacd3d817d86696c8c70aaf = $this->env->getExtension("native_profiler");
        $__internal_1056117ec594290780a4aa3c103907599b65885dbaacd3d817d86696c8c70aaf->enter($__internal_1056117ec594290780a4aa3c103907599b65885dbaacd3d817d86696c8c70aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1056117ec594290780a4aa3c103907599b65885dbaacd3d817d86696c8c70aaf->leave($__internal_1056117ec594290780a4aa3c103907599b65885dbaacd3d817d86696c8c70aaf_prof);

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
