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
        $__internal_42de2173e47584b2b6faf4e98956cc3e008f0ed319f5f4b8fa040e342dfbbbeb = $this->env->getExtension("native_profiler");
        $__internal_42de2173e47584b2b6faf4e98956cc3e008f0ed319f5f4b8fa040e342dfbbbeb->enter($__internal_42de2173e47584b2b6faf4e98956cc3e008f0ed319f5f4b8fa040e342dfbbbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_42de2173e47584b2b6faf4e98956cc3e008f0ed319f5f4b8fa040e342dfbbbeb->leave($__internal_42de2173e47584b2b6faf4e98956cc3e008f0ed319f5f4b8fa040e342dfbbbeb_prof);

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
