<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f597a42e8116c30de8c0de38c00a4f3c80b97fe4a58bb6a4b61271f6372daf30 extends Twig_Template
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
        $__internal_a880dad8ebc6c82905eceb85ec30140b9e4a3ea29e632132680f6e44b890c5eb = $this->env->getExtension("native_profiler");
        $__internal_a880dad8ebc6c82905eceb85ec30140b9e4a3ea29e632132680f6e44b890c5eb->enter($__internal_a880dad8ebc6c82905eceb85ec30140b9e4a3ea29e632132680f6e44b890c5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a880dad8ebc6c82905eceb85ec30140b9e4a3ea29e632132680f6e44b890c5eb->leave($__internal_a880dad8ebc6c82905eceb85ec30140b9e4a3ea29e632132680f6e44b890c5eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
