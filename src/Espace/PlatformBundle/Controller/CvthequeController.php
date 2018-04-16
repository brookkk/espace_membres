<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Entity\Cv;
use Espace\UserBundle\Form\EtudiantSearchType;
use Espace\PlatformBundle\Form\OffreSearchType;

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
  	
     $cv= new Cv();
 	$form =$this->createForm(EtudiantSearchType::class, $cv);


    if($request->isMethod('POST')){
      $form->handleRequest($request);


      if($form->isValid()   
        ){

    $em= $this  ->getDoctrine()  ->getManager();
    $repository = $em  ->getRepository('EspaceUserBundle:Cv');
    $user_repository = $em  ->getRepository('EspaceUserBundle:User');

    $listCandidats = $user_repository->findBy([
      'profil' => 'ETUDIANT' ,
    ]);


    $list_users= array();
 
     foreach ($listCandidats as $key => $val){
       if($val->getCv()!==null)
      {
       if($val->getCv()->getExperience()==$cv->getExperience())
       $listUsers[$key] = $listCandidats[$key] ;
      //print_r($listCandidats[$key]->getNom() );
   }

    }
    /*$users = array();
    foreach ($listUsers as $user){
           $users[] = $user[0];}*/

 
      
    return $this->render('EspacePlatformBundle:Show:cv-theque.html.twig', array(      'listUsers' => $listUsers   ));
      }
    }

   $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspaceUserBundle:Cv');
    $listUsers = $repository->findAll();

    
    return $this->render('EspacePlatformBundle:New:cv-theque.html.twig', array(
     'form'=>$form->createView(), 
     ));

     


  }





}
