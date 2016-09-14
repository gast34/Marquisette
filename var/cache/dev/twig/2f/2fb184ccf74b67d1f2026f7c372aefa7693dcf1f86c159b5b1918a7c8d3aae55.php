<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6579b33cbc3cb8f42bf72b6613abb70a7a256c73d8e983999fb93fce67fde160 extends Twig_Template
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
        $__internal_a2cd98e138b9e79ee0978254c1708e0e78667d84a602269a0a3a62b6c72b3a4c = $this->env->getExtension("native_profiler");
        $__internal_a2cd98e138b9e79ee0978254c1708e0e78667d84a602269a0a3a62b6c72b3a4c->enter($__internal_a2cd98e138b9e79ee0978254c1708e0e78667d84a602269a0a3a62b6c72b3a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a2cd98e138b9e79ee0978254c1708e0e78667d84a602269a0a3a62b6c72b3a4c->leave($__internal_a2cd98e138b9e79ee0978254c1708e0e78667d84a602269a0a3a62b6c72b3a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
