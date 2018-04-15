<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\EtudiqntSearchType;



class CvthequeController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:admin.html.twig');
    }




/**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */

     public function searchAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $user= new User();

 

    $form = $this->createForm(UserSearchType::class, $user);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){
        

      //print_r($offre);


    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    

    $listOffres = $repository->findAll();

    $listOffres = $repository->findBy([
      'niveauFormationP' => $offre->getNiveauFormationP() ,
    ]);




    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres   ));
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
     $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    

    $listOffres = $repository->findAll();
    return $this->render('EspacePlatformBundle:New:offre_search.html.twig', array(
     'form'=>$form->createView(), 'listOffres' => $listOffres
     ));

  }





}
