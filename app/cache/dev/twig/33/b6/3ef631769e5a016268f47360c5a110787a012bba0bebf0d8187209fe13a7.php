<?php

/* MaisonLiguesCroisiereBundle:Default:ajoutsecteur.html.twig */
class __TwigTemplate_33b63ef631769e5a016268f47360c5a110787a012bba0bebf0d8187209fe13a7 extends Twig_Template
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
        echo "\t<h2>Ajouter secteur</h2>
\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutsecteur");
        echo "\"method=\"post\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" value=\"Modifier le secteur\"/>
\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:ajoutsecteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
