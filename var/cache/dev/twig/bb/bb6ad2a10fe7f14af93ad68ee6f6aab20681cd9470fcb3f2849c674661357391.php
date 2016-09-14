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
        $__internal_0c50d4d4b34b85df2bdea1f71ccdc5ee1fecd0a90065016b3e13cde6590ff2db = $this->env->getExtension("native_profiler");
        $__internal_0c50d4d4b34b85df2bdea1f71ccdc5ee1fecd0a90065016b3e13cde6590ff2db->enter($__internal_0c50d4d4b34b85df2bdea1f71ccdc5ee1fecd0a90065016b3e13cde6590ff2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c50d4d4b34b85df2bdea1f71ccdc5ee1fecd0a90065016b3e13cde6590ff2db->leave($__internal_0c50d4d4b34b85df2bdea1f71ccdc5ee1fecd0a90065016b3e13cde6590ff2db_prof);

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
