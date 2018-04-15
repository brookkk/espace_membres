<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Espace\UserBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Espace\UserBundle\Entity\Etudiant;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Entity\Cv;

use Espace\UserBundle\Form\EtudiantType;
use Espace\UserBundle\Form\Etudiant_entro_NFType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Espace\UserBundle\Entity\Entreprise;

use Espace\UserBundle\Form\EntrepriseType;



class UserController extends Controller
{

   public function indexAction()
    {
    return $this->render('EspaceUserBundle:Show:index.html.twig');

    }


     public function types_profilAction()
    {
    return $this->render('EspaceUserBundle:Show:types_profils.html.twig');

    }



    public function show_userAction(Request $request)
  {
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspaceUserBundle:User');
    

    $listUsers = $repository->findAll();

    if (null === $listUsers) {
      throw new NotFoundHttpException("Aucun Utilisateur na été trouvé");
    }

    return $this->render('EspaceUserBundle:Show:user.html.twig', array(      'listUsers' => $listUsers   ));
   // return $this->render('EspaceUserBundle:Show:index.html.twig');

  }




     public function valider_userAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

  $user = $repository->find($id);

  if (null === $user) {
      throw new NotFoundHttpException("Utilisateur na pas été trouvé");
    }

  //$user= $this->getUser();


        $user->setValide(true);

        $em= $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'User Validé');
     


        return $this->redirectToRoute('espace_show_user');
 
  }



 
   //Pour dévalider un user
     public function devalider_userAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

  $user = $repository->find($id);

  if (null === $user) {
      throw new NotFoundHttpException("Utilisateur na pas été trouvé");
    }

  

      $user->setValide(false);
        

        $em= $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'User dévalidé');
     


        return $this->redirectToRoute('espace_show_user');
      
    


  }



  public function isValidatedAction($id)
  {
    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

    $user = $repository->find($id);

    

    if( $user->getValide())
      return 1;
    else return 0;
    


  }





 public function update_userAction(Request $request, $id)
  {

    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

    $user = $repository->find($id);


/*
 

    if (null === $user) {
      throw new NotFoundHttpException("Votre user na pas été trouvée");
    }

if($user->getProfile()=='ETUDIANT')
    $form = $this->createForm(EtudiantType::class, $user);

elseif($user->getProfile()=='ENTREPRISE')
    $form = $this->createForm(EntrepriseType::class, $user);


    if($request->isMethod('POST')){

      $form->handleRequest($request);

      if($form->isValid()){
        $em= $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre Bien enregistré.');

       


        return $this->redirectToRoute('espace_platform_homepage');
      }




    }
*/

if($user->getProfile()=='ETUDIANT')
      return $this->render('EspaceUserBundle:New:etudiant.html.twig', array(
           'form'=>$form->createView(),
           ));
elseif($user->getProfile()=='ENTREPRISE')
     return $this->render('EspaceUserBundle:New:entreprise.html.twig', array(
     'form'=>$form->createView(),
     ));


  }


}
