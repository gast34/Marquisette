<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_08c50953807d326b276b75c3fa73d78023a8f36577dc38b577d7af8496d459b7 extends Twig_Template
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
        $__internal_5e0532ff2262aec8215d3f800598d3e067c59474b9bb483bd4890d80e903ec94 = $this->env->getExtension("native_profiler");
        $__internal_5e0532ff2262aec8215d3f800598d3e067c59474b9bb483bd4890d80e903ec94->enter($__internal_5e0532ff2262aec8215d3f800598d3e067c59474b9bb483bd4890d80e903ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5e0532ff2262aec8215d3f800598d3e067c59474b9bb483bd4890d80e903ec94->leave($__internal_5e0532ff2262aec8215d3f800598d3e067c59474b9bb483bd4890d80e903ec94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
