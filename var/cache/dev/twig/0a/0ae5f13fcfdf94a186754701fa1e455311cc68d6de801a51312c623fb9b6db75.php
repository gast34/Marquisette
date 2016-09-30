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
        $__internal_a9e7c22524b4f33980185902bd41844d4e3eab05ed561d176a0e4a7451f91e64 = $this->env->getExtension("native_profiler");
        $__internal_a9e7c22524b4f33980185902bd41844d4e3eab05ed561d176a0e4a7451f91e64->enter($__internal_a9e7c22524b4f33980185902bd41844d4e3eab05ed561d176a0e4a7451f91e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a9e7c22524b4f33980185902bd41844d4e3eab05ed561d176a0e4a7451f91e64->leave($__internal_a9e7c22524b4f33980185902bd41844d4e3eab05ed561d176a0e4a7451f91e64_prof);

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
