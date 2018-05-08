<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Etudiant;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Entity\Cv;
use Espace\UserBundle\Form\EtudiantType;
use Espace\UserBundle\Form\Etudiant_entro_NFType;
use Doctrine\Common\Collections\ArrayCollection;

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
    $cv =  new Cv();
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
    $etudiant->setCv($cv);
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

  $diplomes = $etudiant->getDiplome();
  //print_r($diplomes[0]['nom']);


  if (null === $etudiant) {
    throw new NotFoundHttpException("Votre etudiant na pas été trouvé");
  }



  return $this->render('EspaceUserBundle:Show:etudiant.html.twig', array(
   'etudiant'=>$etudiant,'diplomes'=>$diplomes
   ));


}





/**
   * @Security("has_role('ROLE_ETUDIANT')")
   * 
   */
  public function create_CVAction(Request $request, $id)
  {

    $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

    $etudiant = $repository->find($id);

    $cv =  new Cv();


 

    if (null === $etudiant) {
      throw new NotFoundHttpException("Votre etudiant na pas été trouvée");
    }


    $form = $this->createForm(Etudiant_entro_NFType::class, $cv);



    if($request->isMethod('POST')){

      $form->handleRequest($request);

      if($form->isValid()){
        //$cv->addDomaineCompetence($cv->getDomaineCompetences());
        $etudiant->setCv($cv);


        $em= $this->getDoctrine()->getManager();
        $em->persist($cv);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Cv Bien enregistré.');

       


        return $this->redirectToRoute('espace_show_user');
      }




    }

    return $this->render('EspaceUserBundle:New:etudiantNF.html.twig', array(
     'form'=>$form->createView(),
     ));


  }





   public function edit_CVAction($id, Request $request)
{
    $entityManager = $this->getDoctrine()->getManager();
    /*$cv = $entityManager->getRepository(Cv::class)->find($id);*/




    $cv = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User')->find($id)->getCv();


  


    if (!$cv) {
        //throw $this->createNotFoundException('No cv found for id '.$id);
        return $this->redirectToRoute('EU_create_CV', array('id' => $id));
    }

    $originalExps = new ArrayCollection();
    $originalLans = new ArrayCollection();

    // Create an ArrayCollection of the current Tag objects in the database
    foreach ($cv->getExperiences() as $exp) {
        $originalExps->add($exp);
    }

    foreach ($cv->getLangues() as $lan) {
        $originalLans->add($lan);
    }

    $editForm = $this->createForm(Etudiant_entro_NFType::class, $cv);

    $editForm->handleRequest($request);

    if ($editForm->isValid()) {

        // remove the relationship between the tag and the Task
        foreach ($originalExps as $exp) {
            if (false === $cv->getExperiences()->contains($exp)) {
                // remove the Task from the Tag
                $cv->getExperiences()->removeElement($exp);

                
                $entityManager->persist($exp);

                // if you wanted to delete the Tag entirely, you can also do that
                // $entityManager->remove($tag);
            }
        }

        foreach ($originalLans as $lan) {
            if (false === $cv->getLangues()->contains($lan)) {
                // remove the Task from the Tag
                $cv->getLangues()->removeElement($lan);

                
                $entityManager->persist($lan);

                // if you wanted to delete the Tag entirely, you can also do that
                // $entityManager->remove($tag);
            }
        }



         //file/logo handling

      $cvFile = $cv->getCvFile();
      $cvFileName = $cvFile.'.'.$cvFile->guessExtension();

      $new_dir = "./upload/cvs/candidat/".$cv->getEmail()."/";

      $file->move(
                "./upload/logo/entreprise/".$entreprise->getEmail()."/", $fileName
            );

      $entreprise->setLogoE($new_dir);







        $entityManager->persist($cv);
        $entityManager->flush();

        // redirect back to some edit page
        return $this->redirectToRoute('espace_details_candidat', array(
            'id' => $id,
        ));
    }
    //print_r($editForm>createView());
    return $this->render('EspaceUserBundle:New:etudiantNF.html.twig', array(
            'form' => $editForm->createView(),
        ));
}




}
