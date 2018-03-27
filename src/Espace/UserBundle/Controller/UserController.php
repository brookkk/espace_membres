<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Espace\UserBundle\Entity\User;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



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

    //echo "tototo";
    return $this->render('EspaceUserBundle:Show:user.html.twig', array(      'listUsers' => $listUsers   ));
  }



}
