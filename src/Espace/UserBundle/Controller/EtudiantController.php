<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Etudiant;
use Espace\UserBundle\Form\OffreType;

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
    $etudiant= new Offre();

 

    $form = $this->createForm(EtudiantType::class, $etudiant);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){
        $em= $this->getDoctrine()->getManager();
      $em->persist($etudiant);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Etudiant Bien enregistrée.');




        return $this->redirectToRoute('EU_show_user');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspacePlatformBundle:New:offre.html.twig', array(
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
