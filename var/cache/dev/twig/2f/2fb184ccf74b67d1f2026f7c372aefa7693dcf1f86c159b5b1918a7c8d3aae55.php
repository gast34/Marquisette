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
        $__internal_38922f7e543f45b3656ea4c739bdfbbb848046bdf5ee0b05e9c88f2808585c25 = $this->env->getExtension("native_profiler");
        $__internal_38922f7e543f45b3656ea4c739bdfbbb848046bdf5ee0b05e9c88f2808585c25->enter($__internal_38922f7e543f45b3656ea4c739bdfbbb848046bdf5ee0b05e9c88f2808585c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_38922f7e543f45b3656ea4c739bdfbbb848046bdf5ee0b05e9c88f2808585c25->leave($__internal_38922f7e543f45b3656ea4c739bdfbbb848046bdf5ee0b05e9c88f2808585c25_prof);

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
