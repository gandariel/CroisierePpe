<?php

/* MaisonLiguesCroisiereBundle:Default:index.html.twig */
class __TwigTemplate_38fa0ee6269ea1cc7cf689c80852fa157c9164300d3fbd0e930f5b6191298aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MaisonLiguesCroisiereBundle:Default:base.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MaisonLiguesCroisiereBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>Partie adherent</h2>
\t<table>
\t<tr><th>nom</th><th>prenom</th><th>date de naissance</th></tr>
</table>\t
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
