<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\PlatformBundle\Entity\Offre;
use Espace\PlatformBundle\Form\OffreType;



class OffreController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }



     public function n_offreAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $offre= new Offre();

 

    $form = $this->createForm(OffreType::class, $offre);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){
        $em= $this->getDoctrine()->getManager();
      $em->persist($offre);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Offre Bien enregistrée.');




        return $this->redirectToRoute('espace_platform_homepage');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspacePlatformBundle:New:offre.html.twig', array(
     'form'=>$form->createView(),
     ));

  }
}
