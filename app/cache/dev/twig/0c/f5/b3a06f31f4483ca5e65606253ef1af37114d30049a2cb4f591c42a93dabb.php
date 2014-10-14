<?php

/* MaisonLiguesCroisiereBundle:Default:ajoutliaison.html.twig */
class __TwigTemplate_0cf5b3a06f31f4483ca5e65606253ef1af37114d30049a2cb4f591c42a93dabb extends Twig_Template
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
        echo "\t<h2>Ajouter liaison</h2>
\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutliaison");
        echo "\"method=\"post\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" value=\"Modifier le liaison\"/>
\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:ajoutliaison.html.twig";
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
