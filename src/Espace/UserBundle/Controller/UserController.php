<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{





//Action pour Afficher tous les utilisateurs existants
  public function show_userAction(Request $request)
  {
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspaceUserBundle:User');
    

    $listUsers = $repository->findAll();

    if (null === $listUsers) {
      throw new NotFoundHttpException("Aucun utilisateur na été trouvé");
    }

    //echo "tototo";
    return $this->render('EspaceUserBundle:Show:user.html.twig', array(      'listUsers' => $listUsers   ));
  }


}
