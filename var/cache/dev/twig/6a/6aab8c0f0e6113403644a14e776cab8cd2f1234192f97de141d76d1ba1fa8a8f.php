<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6aae3895ed7cf95ab008a17960e4f30cfd4298970c372cec7f713951cb838e13 extends Twig_Template
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
        $__internal_63b1b7052130c13a8b261928a552f62068c1a4487f3a864eb6a14e3563b50dc4 = $this->env->getExtension("native_profiler");
        $__internal_63b1b7052130c13a8b261928a552f62068c1a4487f3a864eb6a14e3563b50dc4->enter($__internal_63b1b7052130c13a8b261928a552f62068c1a4487f3a864eb6a14e3563b50dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63b1b7052130c13a8b261928a552f62068c1a4487f3a864eb6a14e3563b50dc4->leave($__internal_63b1b7052130c13a8b261928a552f62068c1a4487f3a864eb6a14e3563b50dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
