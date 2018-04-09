<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
$user= $this->getUser();
 

    $form = $this->createForm(OffreType::class, $offre);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){
        $offre->setEntreprise($user);
        $offre ->setEtat(0);
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
    $user= $this->getUser();

    $repository = $em  ->getRepository('EspacePlatformBundle:Offre');
    
    $ss = $user->getId();

    
    if($user->getProfil()=='ENTREPRISE'){
        $listOffres = $repository->findBy([
        'entreprise' => $user->getId() ,
      ]);
      }else if ($user->getProfil()=='ETUDIANT'){
        $listOffres = $repository->findBy([
        'etat' => 2 ,
      ]);
      }else // pour les ADMIN
        $listOffres = $repository->findAll();



  $has_applied = array();
    $nb_users=array();
foreach($listOffres as $offre){
  $nb_users[$offre->getid()] = $this->countUsersAction( $offre->getid());
  $has_applied[$offre->getid()] = $this->hasAppliedAction( $offre->getid());
}

    if (null === $listOffres) {
      throw new NotFoundHttpException("Aucune Offre na été trouvé");
    }

    //echo "tototo";
    return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres, 'nb_users' => $nb_users,
     'has_applied' =>$has_applied  ));
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

    return $this->redirectToRoute('EP_show_offre');

  

    //return $this->render('EspacePlatformBundle:Show:offre.html.twig', array(      'listOffres' => $listOffres   ));



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





   /**
   * @Security("has_role('ROLE_ETUDIANT')")
   * 
   */
     public function applyAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

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






   /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
     public function show_candidatsAction(Request $request, $id)
  {


 $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

    $offre = $repository->find($id);

    $users = $offre->getUsers();
    
    return $this->render('EspacePlatformBundle:Show:candidats.html.twig', array(
    'users' => $users
     ));
 
  }



   /**
   * @Security("has_role('ROLE_ETUDIANT')")
   * 
   */
   //Pour dépostuler d'une offre
     public function in_applyAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  $user= $this->getUser();

      
        $offre->removeUser($user);

        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre Bien enregistré.');
     


        return $this->redirectToRoute('EP_show_offre');
      
    


  }

  public function countUsersAction($id)
  {
    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

    $offre = $repository->find($id);

    $users = $offre->getUsers();
    $count = count($users);
    return $count;


  }



  public function hasAppliedAction($id)
  {
    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

    $offre = $repository->find($id);

    $user = $this->getUser();

    $ids = array();
    foreach ($offre->getUsers() as $us){
      $ids[] = $us->getId();
    }
  

    if(  in_array($user->getId(), $ids)         )
      $return=1;
    else $return= 0;

    return $return;


  }




   /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
     public function soumisAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  


        $offre->setEtat(1);

        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre soumise.');
     


        return $this->redirectToRoute('EP_show_offre');
 
  }




    /**
   * @Security("has_role('ROLE_ADMIN')")
   * 
   */
     public function validerAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  


        $offre->setEtat(2);
        $offre->setDateDePublication(new \Datetime());


        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre validée.');
     


        return $this->redirectToRoute('EP_show_offre');
 
  }




   /**
   * @Security("has_role('ROLE_ADMIN')")
   * 
   */
     public function refuserAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  


        $offre->setEtat(3);

        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre refusée.');
     


        return $this->redirectToRoute('EP_show_offre');
 
  }



  /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
     public function archiverAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  


        $offre->setEtat(4);

        $em= $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Offre archivée.');
     


        return $this->redirectToRoute('EP_show_offre');
 
  }


  /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   * 
   */
     public function dupliquerAction(Request $request, $id)
  {
  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);

  if (null === $offre) {
      throw new NotFoundHttpException("Votre offre na pas été trouvée");
    }

  


        $new_offre = clone $offre;
        //$new_offre->setId(null);
        $new_offre->setDateDeduplication(new \Datetime());
        $new_offre->setDateDePublication(new \DateTime('0000-00-00 00:00:00') );
        $new_offre->setEtat(0);

        $users = $offre->getUsers();
       /* foreach($users as $us)
        {
          echo($us->getNom());
          $new_offre->removeUser($us);
        }*/

        $em= $this->getDoctrine()->getManager();
        $em->persist($new_offre);
        $em->flush();
        $idd = $new_offre->getId();


        $request->getSession()->getFlashBag()->add('notice', 'Offre archivée.');
     


        return $this->redirectToRoute('EP_update_offre',array(
    'id' => $idd
     ) );
 
  }



  public function detailsAction($id)
{

  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspacePlatformBundle:Offre');

  $offre = $repository->find($id);


  if (null === $offre) {
    throw new NotFoundHttpException("Votre offre na pas été trouvé");
  }



  return $this->render('EspacePlatformBundle:Show:details_offre.html.twig', array(
   'offre'=>$offre,
   ));


}


}
