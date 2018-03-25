<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\PlatformBundle\Entity\Offre;
use Espace\PlatformBundle\Form\OffreType;
use Espace\PlatformBundle\Form\OffreSearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;




class OffreController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }




  /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
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




        return $this->redirectToRoute('EP_show_offre');
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

    //echo "tototo";
    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres   ));
  }


/**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
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


/**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
public function delete_offreAction(Request $request, $id)
  {
    $em= $this->getDoctrine()->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');

    $offre = $repository->find($id);

    if (null === $offre) {
      throw new NotFoundHttpException("Votre Offre na pas été trouvée");
    }


    $em->remove($offre);
    $em->flush();

    $request->getSession()->getFlashBag()->add('notice', 'Offre a été supprimée');

  

    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres   ));



  }



     public function search_offreAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $offre= new Offre();

 

    $form = $this->createForm(OffreSearchType::class, $offre);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){
        

      //print_r($offre);


    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    

    $listOffres = $repository->findAll();

    $listOffres = $repository->findBy([
      'niveauFormationP' => $offre->getNiveauFormationP() ,
    ]);




    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres   ));
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
     $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    

    $listOffres = $repository->findAll();
    return $this->render('EspacePlatformBundle:New:offre_search.html.twig', array(
     'form'=>$form->createView(), 'listOffres' => $listOffres
     ));

  }


}
