<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Entreprise;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\EntrepriseType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class EntrepriseController extends Controller
{

   public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }




     public function n_entrepriseAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $entreprise= new Entreprise();
    $user= new User();

 

    $form = $this->createForm(EntrepriseType::class, $entreprise);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $entreprise->setRoles(array('ROLE_ENTREPRISE'));
      $entreprise -> setProfil('ENTREPRISE');
      $entreprise ->setSalt('');
      $user = $entreprise;

      $em= $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Entreprise Bien enregistrée.');




        return $this->redirectToRoute('espace_show_user');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:entreprise.html.twig', array(
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
