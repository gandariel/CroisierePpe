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
		$doctrine=$this->getDoctrine();
		$entitiyManager=$doctrine->getEntityManager();
		$repository= $entitiyManager->getRepository('MaisonLiguesCroisiereBundle:bateau');
		$unbateau=$repository->find(1);
		$lesBateaux=$repository->findAll();
		$doctrine=$this->getDoctrine();
		$entitiyManager=$doctrine->getEntityManager();
		$repository= $entitiyManager->getRepository('MaisonLiguesCroisiereBundle:Liaison');
		$uneLiaison=$repository->find(1);
		$lesLiaisons=$repository->findAll();
		$doctrine=$this->getDoctrine();
		$entitiyManager=$doctrine->getEntityManager();
		$repository= $entitiyManager->getRepository('MaisonLiguesCroisiereBundle:port');
		$unport=$repository->find(1);
		$lesports=$repository->findAll();
		$doctrine=$this->getDoctrine();
		$entitiyManager=$doctrine->getEntityManager();
		$repository= $entitiyManager->getRepository('MaisonLiguesCroisiereBundle:secteur');
		$unsecteur=$repository->find(1);
		$lessecteurs=$repository->findAll();
		$doctrine=$this->getDoctrine();
		$entitiyManager=$doctrine->getEntityManager();
		$repository= $entitiyManager->getRepository('MaisonLiguesCroisiereBundle:Traversee');
		$unTraversee=$repository->find(1);
		$lesTraversees=$repository->findAll();
		return $this->render('MaisonLiguesCroisiereBundle:Default:index.html.twig',array('lesBateaux'=>$lesBateaux,'lesLiaisons'=>$lesLiaisons,'lesports'=>$lesports,'lessecteurs'=>$lessecteurs,'lesTraversees'=>$lesTraversees));
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
		$request = $this->get('request');
		$id=$request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$repository=$em->getrepository('MaisonLiguesCroisiereBundle:bateau');
		$unbateau=$repository->find($id);
		$form=$this->createForm(new bateauType,$unbateau);
		return $this->render('MaisonLiguesCroisiereBundle:Default:modifbateau.html.twig',array('form'=>$form->createView()));
	}
	public function modifliaisonAction()
    {
	$request = $this->get('request');
		$id=$request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$repository=$em->getrepository('MaisonLiguesCroisiereBundle:liaison');
		$unliaison=$repository->find($id);
		$form=$this->createForm(new liaisonType,$unliaison);
		return $this->render('MaisonLiguesCroisiereBundle:Default:modifliaison.html.twig',array('form'=>$form->createView()));
	}
	public function modifportAction()
    {
	$request = $this->get('request');
		$id=$request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$repository=$em->getrepository('MaisonLiguesCroisiereBundle:port');
		$unport=$repository->find($id);
		$form=$this->createForm(new portType,$unport);
		return $this->render('MaisonLiguesCroisiereBundle:Default:modifport.html.twig',array('form'=>$form->createView()));
	}
	public function modifsecteurAction()
    {
	$request = $this->get('request');
		$id=$request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$repository=$em->getrepository('MaisonLiguesCroisiereBundle:secteur');
		$unsecteur=$repository->find($id);
		$form=$this->createForm(new secteurType,$unsecteur);
		return $this->render('MaisonLiguesCroisiereBundle:Default:modifsecteur.html.twig',array('form'=>$form->createView()));
	}
	public function modiftraverseeAction()
    {
	$request = $this->get('request');
		$id=$request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$repository=$em->getrepository('MaisonLiguesCroisiereBundle:traversee');
		$untraversee=$repository->find($id);
		$form=$this->createForm(new traverseeType,$untraversee);
		return $this->render('MaisonLiguesCroisiereBundle:Default:modiftraversee.html.twig',array('form'=>$form->createView()));
    }
}