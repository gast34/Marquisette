<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1109453c193b85f38d06e286d4593b70cd195a32790272b4382435107e9efac1 extends Twig_Template
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
        $__internal_0d7b584bb0d559e5b03c64f8f958bffc2bcd2c782bc009483a6857656852d784 = $this->env->getExtension("native_profiler");
        $__internal_0d7b584bb0d559e5b03c64f8f958bffc2bcd2c782bc009483a6857656852d784->enter($__internal_0d7b584bb0d559e5b03c64f8f958bffc2bcd2c782bc009483a6857656852d784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0d7b584bb0d559e5b03c64f8f958bffc2bcd2c782bc009483a6857656852d784->leave($__internal_0d7b584bb0d559e5b03c64f8f958bffc2bcd2c782bc009483a6857656852d784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
