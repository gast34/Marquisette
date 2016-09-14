<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a924933c1a3200e38422f8eeb53805b10dd1a2019892e4b13bbcf5ca927aec6b extends Twig_Template
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
        $__internal_1e0da49e09bbaffa6f7b4e50326bbbd765111bb101118eb73dd161d63206a27b = $this->env->getExtension("native_profiler");
        $__internal_1e0da49e09bbaffa6f7b4e50326bbbd765111bb101118eb73dd161d63206a27b->enter($__internal_1e0da49e09bbaffa6f7b4e50326bbbd765111bb101118eb73dd161d63206a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1e0da49e09bbaffa6f7b4e50326bbbd765111bb101118eb73dd161d63206a27b->leave($__internal_1e0da49e09bbaffa6f7b4e50326bbbd765111bb101118eb73dd161d63206a27b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
