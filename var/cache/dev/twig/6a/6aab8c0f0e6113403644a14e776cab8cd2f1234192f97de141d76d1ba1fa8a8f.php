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
        $__internal_c45ef394cbedf60b890dd3b466339f435ffa7a76e9d12d389b5627a5eee4b053 = $this->env->getExtension("native_profiler");
        $__internal_c45ef394cbedf60b890dd3b466339f435ffa7a76e9d12d389b5627a5eee4b053->enter($__internal_c45ef394cbedf60b890dd3b466339f435ffa7a76e9d12d389b5627a5eee4b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c45ef394cbedf60b890dd3b466339f435ffa7a76e9d12d389b5627a5eee4b053->leave($__internal_c45ef394cbedf60b890dd3b466339f435ffa7a76e9d12d389b5627a5eee4b053_prof);

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
