<?php

/* MaisonLiguesCroisiereBundle:Default:index.html.twig */
class __TwigTemplate_15878dd6996f089984c73f10c350c90049cdddc2ffc83f95ff9770ec0d5bacd2 extends Twig_Template
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
        echo "\t<h2>Accueil </h2></br>
\t<h3>Liste bateau </h3>
\t<table>
\t<tr><th>nom</th></tr>
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesBateaux"]) ? $context["lesBateaux"] : $this->getContext($context, "lesBateaux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unBateau"]) {
            // line 8
            echo "\t<tr>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unBateau"]) ? $context["unBateau"] : $this->getContext($context, "unBateau")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifbateau", array("id" => $this->getAttribute((isset($context["unBateau"]) ? $context["unBateau"] : $this->getContext($context, "unBateau")), "getId", array(), "method"))), "html", null, true);
            echo "\">modifier</a></td>\t
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "<tr><td>Pas d'utilisateur trouve</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unBateau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t
</table>
<h3>Liste Liaison </h3>
\t<table>
\t<tr><th>distance</th><th>secteur</th><th>port depart</th><th>port arrive</th></tr>
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesLiaisons"]) ? $context["lesLiaisons"] : $this->getContext($context, "lesLiaisons")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["uneLiaison"]) {
            // line 21
            echo "\t<tr>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneLiaison"]) ? $context["uneLiaison"] : $this->getContext($context, "uneLiaison")), "getdistance", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneLiaison"]) ? $context["uneLiaison"] : $this->getContext($context, "uneLiaison")), "getlesecteur", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneLiaison"]) ? $context["uneLiaison"] : $this->getContext($context, "uneLiaison")), "getportdepart", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneLiaison"]) ? $context["uneLiaison"] : $this->getContext($context, "uneLiaison")), "getportarrive", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifLiaison", array("id" => $this->getAttribute((isset($context["uneLiaison"]) ? $context["uneLiaison"] : $this->getContext($context, "uneLiaison")), "getId", array(), "method"))), "html", null, true);
            echo "\">modifier</a></td>\t
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "<tr><td>Pas d'utilisateur trouve</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLiaison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t
</table>\t
<h3>Liste port </h3>
\t<table>
\t<tr><th>nom</th></tr>
\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesports"]) ? $context["lesports"] : $this->getContext($context, "lesports")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unport"]) {
            // line 37
            echo "\t<tr>
\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unport"]) ? $context["unport"] : $this->getContext($context, "unport")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifport", array("id" => $this->getAttribute((isset($context["unport"]) ? $context["unport"] : $this->getContext($context, "unport")), "getId", array(), "method"))), "html", null, true);
            echo "\">modifier</a></td>\t
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "<tr><td>Pas d'utilisateur trouve</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t
</table>
<h3>Liste secteur </h3>
\t<table>
\t<tr><th>nom</th></tr>
\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessecteurs"]) ? $context["lessecteurs"] : $this->getContext($context, "lessecteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unsecteur"]) {
            // line 50
            echo "\t<tr>
\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unsecteur"]) ? $context["unsecteur"] : $this->getContext($context, "unsecteur")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifsecteur", array("id" => $this->getAttribute((isset($context["unsecteur"]) ? $context["unsecteur"] : $this->getContext($context, "unsecteur")), "getId", array(), "method"))), "html", null, true);
            echo "\">modifier</a></td>\t
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "<tr><td>Pas d'utilisateur trouve</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unsecteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t
</table>
<h3>Liste Traversee </h3>
\t<table>
\t<tr><th>nom</th></tr>
\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesTraversees"]) ? $context["lesTraversees"] : $this->getContext($context, "lesTraversees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unTraversee"]) {
            // line 63
            echo "\t<tr>
\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unTraversee"]) ? $context["unTraversee"] : $this->getContext($context, "unTraversee")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_modifTraversee", array("id" => $this->getAttribute((isset($context["unTraversee"]) ? $context["unTraversee"] : $this->getContext($context, "unTraversee")), "getId", array(), "method"))), "html", null, true);
            echo "\">modifier</a></td>\t
\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "<tr><td>Pas d'utilisateur trouve</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unTraversee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t
</table>
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
        return array (  212 => 70,  205 => 68,  197 => 65,  193 => 64,  190 => 63,  185 => 62,  178 => 57,  171 => 55,  163 => 52,  159 => 51,  156 => 50,  151 => 49,  144 => 44,  137 => 42,  129 => 39,  125 => 38,  122 => 37,  117 => 36,  110 => 31,  103 => 29,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  76 => 21,  71 => 20,  64 => 15,  57 => 13,  49 => 10,  45 => 9,  42 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
