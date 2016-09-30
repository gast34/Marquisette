<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fb8d028273b67f00d72fd5b3ca40ce62d157ce4bb5fc63b9934985e8777a6149 extends Twig_Template
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
        $__internal_70392938bb7a600c39f0c04ea6b9c5700fb2a803532c74a15e2ea96779a47534 = $this->env->getExtension("native_profiler");
        $__internal_70392938bb7a600c39f0c04ea6b9c5700fb2a803532c74a15e2ea96779a47534->enter($__internal_70392938bb7a600c39f0c04ea6b9c5700fb2a803532c74a15e2ea96779a47534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_70392938bb7a600c39f0c04ea6b9c5700fb2a803532c74a15e2ea96779a47534->leave($__internal_70392938bb7a600c39f0c04ea6b9c5700fb2a803532c74a15e2ea96779a47534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
