<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4551517fa38a4ae921ab8acf1ccb94dd270cc63efbe3c44484c95cef21137ea8 extends Twig_Template
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
        $__internal_4d0ca3d7c22c0b86933e275dd0950c83acb4be495ff8d0ba720682765bcc0eae = $this->env->getExtension("native_profiler");
        $__internal_4d0ca3d7c22c0b86933e275dd0950c83acb4be495ff8d0ba720682765bcc0eae->enter($__internal_4d0ca3d7c22c0b86933e275dd0950c83acb4be495ff8d0ba720682765bcc0eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4d0ca3d7c22c0b86933e275dd0950c83acb4be495ff8d0ba720682765bcc0eae->leave($__internal_4d0ca3d7c22c0b86933e275dd0950c83acb4be495ff8d0ba720682765bcc0eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
