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
        $__internal_e9a214e83ed6c592a071c90660f80aa3fd3f99e28b084af1d116b64294ac17cf = $this->env->getExtension("native_profiler");
        $__internal_e9a214e83ed6c592a071c90660f80aa3fd3f99e28b084af1d116b64294ac17cf->enter($__internal_e9a214e83ed6c592a071c90660f80aa3fd3f99e28b084af1d116b64294ac17cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e9a214e83ed6c592a071c90660f80aa3fd3f99e28b084af1d116b64294ac17cf->leave($__internal_e9a214e83ed6c592a071c90660f80aa3fd3f99e28b084af1d116b64294ac17cf_prof);

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
