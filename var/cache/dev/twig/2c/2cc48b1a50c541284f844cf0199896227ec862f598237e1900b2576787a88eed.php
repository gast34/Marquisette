<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_381879c52d126197b61eec4b8330de5b6ffe0077ac56961a61bfa0c6847c35dd extends Twig_Template
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
        $__internal_c26efdfbcb31d6b5783fcb89d12bc8daeba55ce74b73f2a03f2cfb530a7fd4bc = $this->env->getExtension("native_profiler");
        $__internal_c26efdfbcb31d6b5783fcb89d12bc8daeba55ce74b73f2a03f2cfb530a7fd4bc->enter($__internal_c26efdfbcb31d6b5783fcb89d12bc8daeba55ce74b73f2a03f2cfb530a7fd4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c26efdfbcb31d6b5783fcb89d12bc8daeba55ce74b73f2a03f2cfb530a7fd4bc->leave($__internal_c26efdfbcb31d6b5783fcb89d12bc8daeba55ce74b73f2a03f2cfb530a7fd4bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
