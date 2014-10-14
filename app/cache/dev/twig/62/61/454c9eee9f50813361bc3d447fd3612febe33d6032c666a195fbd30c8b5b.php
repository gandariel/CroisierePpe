<?php

/* MaisonLiguesCroisiereBundle:Default:base.html.twig */
class __TwigTemplate_6261454c9eee9f50813361bc3d447fd3612febe33d6032c666a195fbd30c8b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo " \"rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Ligue de croisiere</h2>
<div id=\"menu\"> <!--ou la balise html5!-->
\t<ul>
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_homepage", array());
        echo "\">Presentation</a></li>
\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutbateau", array());
        echo "\">ajoutbateau</a></li>
\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutliaison", array());
        echo "\">ajoutliaison</li>
\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutport", array());
        echo "\">ajoutport</a></li>
\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutsecteur", array());
        echo "\">ajoutsecteur</a></li>
\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajouttraversee", array());
        echo "\">ajouttraversee</a></li>
\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_inscriptioncroisiere", array());
        echo "\">inscriptioncroisiere</a></li>
\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifbateau", array());
        echo "\">modifbateau</li>
\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifliaison", array());
        echo "\">modifliaison</a></li>
\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifport", array());
        echo "\">modifport</a></li>
\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifsecteur", array());
        echo "\">modifsecteur</a></li>
\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modiftraversee", array());
        echo "\">modiftraversee</a></li>
\t</ul>
</div>
<div id=\"corps\">
\t";
        // line 24
        $this->displayBlock('corps', $context, $blocks);
        // line 25
        echo "</div>
";
    }

    // line 24
    public function block_corps($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  101 => 25,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  31 => 3,  28 => 2,);
    }
}
