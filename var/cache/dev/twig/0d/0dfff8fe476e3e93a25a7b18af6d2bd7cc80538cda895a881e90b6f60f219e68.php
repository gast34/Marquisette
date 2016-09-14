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
        $__internal_4536b0a62eb9ca4b45da2b61f0158dcb1d39b0bce6d946c7d1e0c5fa43caf111 = $this->env->getExtension("native_profiler");
        $__internal_4536b0a62eb9ca4b45da2b61f0158dcb1d39b0bce6d946c7d1e0c5fa43caf111->enter($__internal_4536b0a62eb9ca4b45da2b61f0158dcb1d39b0bce6d946c7d1e0c5fa43caf111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4536b0a62eb9ca4b45da2b61f0158dcb1d39b0bce6d946c7d1e0c5fa43caf111->leave($__internal_4536b0a62eb9ca4b45da2b61f0158dcb1d39b0bce6d946c7d1e0c5fa43caf111_prof);

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
