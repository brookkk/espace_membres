<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Espace\UserBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



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

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  $user= $this->getUser();


        $offre->addUser($user);

        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre Bien enregistré.');
     


        return $this->redirectToRoute('EP_show_offre');
 
  }



}
