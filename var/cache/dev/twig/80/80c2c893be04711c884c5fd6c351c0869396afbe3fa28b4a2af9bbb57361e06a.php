<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4e0de9f361e267ae0f091fb0fa6ddc28e238756ea3512a7b4519520de795b553 extends Twig_Template
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
        $__internal_428b867d026fe6532a25943b65bac308c78c2bb203eee7561dc192e102699dde = $this->env->getExtension("native_profiler");
        $__internal_428b867d026fe6532a25943b65bac308c78c2bb203eee7561dc192e102699dde->enter($__internal_428b867d026fe6532a25943b65bac308c78c2bb203eee7561dc192e102699dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_428b867d026fe6532a25943b65bac308c78c2bb203eee7561dc192e102699dde->leave($__internal_428b867d026fe6532a25943b65bac308c78c2bb203eee7561dc192e102699dde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
