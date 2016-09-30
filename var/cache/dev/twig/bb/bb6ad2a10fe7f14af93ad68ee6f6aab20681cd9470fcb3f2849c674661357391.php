<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ed7ad222713ff4ed375419dcddf7d0e2b911f17ce59f3791d8525e23ab38487c extends Twig_Template
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
        $__internal_f64398291324ab6d2c23bd6e780d4ffef808e2eaa1b745387c16f203f6ee5839 = $this->env->getExtension("native_profiler");
        $__internal_f64398291324ab6d2c23bd6e780d4ffef808e2eaa1b745387c16f203f6ee5839->enter($__internal_f64398291324ab6d2c23bd6e780d4ffef808e2eaa1b745387c16f203f6ee5839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f64398291324ab6d2c23bd6e780d4ffef808e2eaa1b745387c16f203f6ee5839->leave($__internal_f64398291324ab6d2c23bd6e780d4ffef808e2eaa1b745387c16f203f6ee5839_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
