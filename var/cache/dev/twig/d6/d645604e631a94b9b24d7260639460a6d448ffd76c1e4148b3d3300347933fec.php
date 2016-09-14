<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9698f82148f213f97a2f0b8ca6080d11c9967004838b185c3b26efa49a1dbc5c extends Twig_Template
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
        $__internal_edea746c0dbdaac0b7d46ef3af7985652db8b2d262c31e0116ef43de7c72dfcf = $this->env->getExtension("native_profiler");
        $__internal_edea746c0dbdaac0b7d46ef3af7985652db8b2d262c31e0116ef43de7c72dfcf->enter($__internal_edea746c0dbdaac0b7d46ef3af7985652db8b2d262c31e0116ef43de7c72dfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_edea746c0dbdaac0b7d46ef3af7985652db8b2d262c31e0116ef43de7c72dfcf->leave($__internal_edea746c0dbdaac0b7d46ef3af7985652db8b2d262c31e0116ef43de7c72dfcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
