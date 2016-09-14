<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_89a08f9ea482f0367642909583728b8a6377dca79bb9035b240e709a613f693b extends Twig_Template
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
        $__internal_96621bafee97677e75030ef575acf4998e1dd7e7f4beca76da1b656e5686070f = $this->env->getExtension("native_profiler");
        $__internal_96621bafee97677e75030ef575acf4998e1dd7e7f4beca76da1b656e5686070f->enter($__internal_96621bafee97677e75030ef575acf4998e1dd7e7f4beca76da1b656e5686070f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_96621bafee97677e75030ef575acf4998e1dd7e7f4beca76da1b656e5686070f->leave($__internal_96621bafee97677e75030ef575acf4998e1dd7e7f4beca76da1b656e5686070f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
