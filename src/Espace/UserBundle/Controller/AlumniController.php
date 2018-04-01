<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Alumni;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\AlumniType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class AlumniController extends Controller
{

   public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }




     public function n_alumniAction(Request $request)
  {
    $alumni= new User();

$passwordEncoder = $this->get('security.password_encoder');
 

    $form = $this->createForm(AlumniType::class, $alumni);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $alumni->setRoles(array('ROLE_ALUMNI'));
      $alumni -> setProfil('ALUMNI');
      $alumni ->setSalt('');
      $alumni -> setUsername($alumni->getEmail());
      $password = $passwordEncoder->encodePassword($alumni, $alumni->getPlainPassword());
      $alumni->setPassword($password);

      $em= $this->getDoctrine()->getManager();
      $em->persist($alumni);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Alumni Bien enregistrée.');

        return $this->redirectToRoute('espace_platform_homepage');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:alumni.html.twig', array(
     'form'=>$form->createView(),
     ));


        //return $this->render('EspacePlatformBundle:Default:index.html.twig');


  }





}
