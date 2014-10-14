<?php

namespace MaisonLigues\CroisiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MaisonLigues\CroisiereBundle\Entity\Secteur;
use MaisonLigues\CroisiereBundle\Entity\Bateau;
use MaisonLigues\CroisiereBundle\Entity\Liaison;
use MaisonLigues\CroisiereBundle\Entity\Port;
use MaisonLigues\CroisiereBundle\Entity\Traversee;
use MaisonLigues\CroisiereBundle\Form\BateauType;
use MaisonLigues\CroisiereBundle\Form\SecteurType;
use MaisonLigues\CroisiereBundle\Form\LiaisonType;
use MaisonLigues\CroisiereBundle\Form\PortType;
use MaisonLigues\CroisiereBundle\Form\TraverseeType;

class DefaultController extends Controller
{
	public function indexAction()
    {
		 return $this->render('MaisonLiguesCroisiereBundle:Default:index.html.twig');
	}
	public function ajoutbateauAction()
    {
	    
		$request = $this->get('request');
		$unBateau=new Bateau();
		$form=$this->createForm(new BateauType,$unBateau);
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutbateau.html.twig',array('form'=>$form->createView()));
	}
	public function ajoutliaisonAction()
    {
		$request = $this->get('request');
		$unLiaison=new Liaison();
		$form=$this->createForm(new LiaisonType,$unLiaison);
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutliaison.html.twig',array('form'=>$form->createView()));
	}
	public function ajoutportAction()
    {
		$request = $this->get('request');
		$unPort=new Port();
		$form=$this->createForm(new PortType,$unPort);
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutport.html.twig',array('form'=>$form->createView()));
	}
	public function ajoutsecteurAction()
    {
		$request = $this->get('request');
		$unSecteur=new Secteur();
		$form=$this->createForm(new SecteurType,$unSecteur);
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajoutsecteur.html.twig',array('form'=>$form->createView()));
	}
	public function ajouttraverseeAction()
    {
		$request = $this->get('request');
		$unTraversee=new Traversee();
		$form=$this->createForm(new TraverseeType,$unTraversee);
        return $this->render('MaisonLiguesCroisiereBundle:Default:ajouttraversee.html.twig',array('form'=>$form->createView()));
	}
	public function inscriptioncroisiereAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:inscriptioncroisiere.html.twig');
	}
	public function modifbateauAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:modifbateau.html.twig');
	}
	public function modifliaisonAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:modifliaison.html.twig');
	}
	public function modifportAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:modifport.html.twig');
	}
	public function modifsecteurAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:modifsecteur.html.twig');
	}
	public function modiftraverseeAction()
    {
        return $this->render('MaisonLiguesCroisiereBundle:Default:modiftraversee.html.twig');
    }
}