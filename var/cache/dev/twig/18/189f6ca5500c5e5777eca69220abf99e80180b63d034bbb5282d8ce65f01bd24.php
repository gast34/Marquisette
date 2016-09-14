<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_498b61b230e66d60e6fdbdff893c7920d310b620c4bfca7056ac8773a2a90dc2 extends Twig_Template
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
        $__internal_83bdbdfc5580e5ed4dea48c2c28785da86bb3427806fb809ed7f368c5c0b8295 = $this->env->getExtension("native_profiler");
        $__internal_83bdbdfc5580e5ed4dea48c2c28785da86bb3427806fb809ed7f368c5c0b8295->enter($__internal_83bdbdfc5580e5ed4dea48c2c28785da86bb3427806fb809ed7f368c5c0b8295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_83bdbdfc5580e5ed4dea48c2c28785da86bb3427806fb809ed7f368c5c0b8295->leave($__internal_83bdbdfc5580e5ed4dea48c2c28785da86bb3427806fb809ed7f368c5c0b8295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
