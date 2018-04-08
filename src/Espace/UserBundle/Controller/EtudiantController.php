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
    $etudiant= new User();
    //$user= new User();

$passwordEncoder = $this->get('security.password_encoder');

 

    $form = $this->createForm(EtudiantType::class, $etudiant);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $etudiant->setRoles(array('ROLE_ETUDIANT'));
      $etudiant -> setProfil('ETUDIANT');
      $etudiant -> setUsername($etudiant->getEmail());
      $etudiant ->setSalt('');
      $etudiant ->setValide(false);


      if($etudiant->getDiplome()==null)
      $etudiant->setDiplome('N;');
      //$user = $entreprise;
      $password = $passwordEncoder->encodePassword($etudiant, $etudiant->getPlainPassword());
      $etudiant->setPassword($password);



      $em= $this->getDoctrine()->getManager();
      $em->persist($etudiant);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Etudiant Bien enregistrée.');




        return $this->redirectToRoute('espace_platform_homepage');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:etudiant.html.twig', array(
     'form'=>$form->createView(),
     ));

  }


public function detailsAction($id)
{

  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

  $etudiant = $repository->find($id);


  if (null === $entreprise) {
    throw new NotFoundHttpException("Votre etudiant na pas été trouvé");
  }



  return $this->render('EspaceUserBundle:show:etudiant.html.twig', array(
   'etudiant'=>$etudiant,
   ));


}

}
