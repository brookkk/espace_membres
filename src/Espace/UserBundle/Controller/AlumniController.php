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
//nouvelle instance de l'entité Offre
    $alumni= new Alumni();
    $user= new User();

 

    $form = $this->createForm(AlumniType::class, $alumni);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $alumni->setRoles(array('ROLE_ALUMNI'));
      $alumni -> setProfil('ALUMNI');
      $alumni ->setSalt('');
      $user = $alumni;

      $em= $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Alumni Bien enregistrée.');




        return $this->redirectToRoute('espace_show_user');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:alumni.html.twig', array(
     'form'=>$form->createView(),
     ));


        return $this->render('EspacePlatformBundle:Default:index.html.twig');


  }




   /*public function show_userAction(Request $request)
{
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspaceUserBundle:User');
    

    $listUsers = $repository->findAll();

    if (null === $listUsers) {
      //throw new NotFoundHttpException("Aucun utilisateur na été trouvé");
  
echo("toto");
else
    return $this->render('EspaceUserBundle:Show:index.html.twig');

    //return $this->render('EspaceUserBundle:Show:user.html.twig', array('listUsers'=>$listUsers) );
  }*/


}
