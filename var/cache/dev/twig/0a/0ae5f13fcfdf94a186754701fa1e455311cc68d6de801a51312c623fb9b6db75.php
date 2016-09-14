<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a941fc63aa6e704d4ed81b562ce6d57166525987328556df1a01af8d59698e0c extends Twig_Template
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
        $__internal_21fef92a51653fb453f9e2457f0325b7bab0fb8c6a3348daf81ac8cf9396b9e9 = $this->env->getExtension("native_profiler");
        $__internal_21fef92a51653fb453f9e2457f0325b7bab0fb8c6a3348daf81ac8cf9396b9e9->enter($__internal_21fef92a51653fb453f9e2457f0325b7bab0fb8c6a3348daf81ac8cf9396b9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_21fef92a51653fb453f9e2457f0325b7bab0fb8c6a3348daf81ac8cf9396b9e9->leave($__internal_21fef92a51653fb453f9e2457f0325b7bab0fb8c6a3348daf81ac8cf9396b9e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
