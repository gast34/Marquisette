<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_328db8081652e9797d9a91d2215512462bd99457f26d557bee6c6d3bbfe4914c extends Twig_Template
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
        $__internal_267e4bf415c2e40149f0eda3dd9939bc93654de1f42e8c27bf81b052ad70191b = $this->env->getExtension("native_profiler");
        $__internal_267e4bf415c2e40149f0eda3dd9939bc93654de1f42e8c27bf81b052ad70191b->enter($__internal_267e4bf415c2e40149f0eda3dd9939bc93654de1f42e8c27bf81b052ad70191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_267e4bf415c2e40149f0eda3dd9939bc93654de1f42e8c27bf81b052ad70191b->leave($__internal_267e4bf415c2e40149f0eda3dd9939bc93654de1f42e8c27bf81b052ad70191b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
