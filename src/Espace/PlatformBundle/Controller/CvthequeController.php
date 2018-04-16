<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\EtudiqntSearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;




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
  	/*
     $user= new User();
 
    $form = $this->createForm(UserSearchType::class, $user);

    if($request->isMethod('POST')){
      $form->handleRequest($request);
      if($form->isValid()   
        ){

    $em= $this  ->getDoctrine()  ->getManager();
    $repository = $em  ->getRepository('EspaceUserBundle:User');
 
    $listCandidats = $repository->findBy([
      'experience' => $user->getExperience() ,
    ]);

    return $this->render('EspacePlatformBundle:Show:cv-theque.html.twig', array(      'listCandidats' => $listCandidats   ));
      }
    }

   
    $listOffres = $repository->findAll();

    */

    
    return $this->render('EspacePlatformBundle:New:cv-theque.html.twig', array(
     'form'=>$form->createView(), 
     ));

    


  }





}
