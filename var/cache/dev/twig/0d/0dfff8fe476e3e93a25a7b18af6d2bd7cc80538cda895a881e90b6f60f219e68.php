<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_de474b7ca2135d0b31b29b4a4562fb66bd386e38bf820f4d88945886028db048 extends Twig_Template
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
        $__internal_6d054d93eecab60369261977989f227e10642d712a4acd0f8f09d44fe3a0f9b6 = $this->env->getExtension("native_profiler");
        $__internal_6d054d93eecab60369261977989f227e10642d712a4acd0f8f09d44fe3a0f9b6->enter($__internal_6d054d93eecab60369261977989f227e10642d712a4acd0f8f09d44fe3a0f9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6d054d93eecab60369261977989f227e10642d712a4acd0f8f09d44fe3a0f9b6->leave($__internal_6d054d93eecab60369261977989f227e10642d712a4acd0f8f09d44fe3a0f9b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
