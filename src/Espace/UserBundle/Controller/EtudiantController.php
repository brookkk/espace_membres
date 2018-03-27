<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Etudiant;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\EtudiantType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class EtudiantController extends Controller
{

   public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }




     public function n_etudiantAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $etudiant= new Etudiant();
    $user= new User();

 

    $form = $this->createForm(EtudiantType::class, $etudiant);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $etudiant->setRoles(array('ROLE_ETUDIANT'));
      $etudiant -> setProfil('ETUDIANT');
      $etudiant ->setSalt('');
      $user = $etudiant;

      $em= $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Etudiant Bien enregistrée.');




        return $this->redirectToRoute('espace_show_user');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:etudiant.html.twig', array(
     'form'=>$form->createView(),
     ));

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