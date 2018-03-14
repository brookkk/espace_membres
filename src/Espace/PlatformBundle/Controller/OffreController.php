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


  //Action pour Afficher toutes les offres existantes
  public function show_offreAction(Request $request)
  {
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    

    $listOffres = $repository->findAll();

    if (null === $listOffres) {
      throw new NotFoundHttpException("Aucune Offre na été trouvé");
    }


    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(
      'listOffres' => $listOffres   ));
  }



  public function update_offreAction(Request $request, $id)
  {

    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

    $offre = $repository->find($id);



 

    if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }


    $form = $this->createForm(OffreType::class, $offre);



    if($request->isMethod('POST')){

      $form->handleRequest($request);

      if($form->isValid()){
        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre Bien enregistré.');

       


        return $this->redirectToRoute('EP_show_offre');
      }




    }

    return $this->render('EspacePlatformBundle:New:offre.html.twig', array(
     'form'=>$form->createView(),
     ));


  }



}
