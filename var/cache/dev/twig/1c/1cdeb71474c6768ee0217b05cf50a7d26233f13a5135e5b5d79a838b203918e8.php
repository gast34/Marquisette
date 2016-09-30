<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3fcdd14bdd6e3cc954df958234ba92e1c4d9c6b7aa3a53f0ba4c83ebf29e69ae extends Twig_Template
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
        $__internal_1775dc23e7ac22f4d62c139fefab332ea6df90e63f57ac07d3f6c7826e3bb09c = $this->env->getExtension("native_profiler");
        $__internal_1775dc23e7ac22f4d62c139fefab332ea6df90e63f57ac07d3f6c7826e3bb09c->enter($__internal_1775dc23e7ac22f4d62c139fefab332ea6df90e63f57ac07d3f6c7826e3bb09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1775dc23e7ac22f4d62c139fefab332ea6df90e63f57ac07d3f6c7826e3bb09c->leave($__internal_1775dc23e7ac22f4d62c139fefab332ea6df90e63f57ac07d3f6c7826e3bb09c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
