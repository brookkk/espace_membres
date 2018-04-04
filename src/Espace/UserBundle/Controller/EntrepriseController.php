<?php

namespace Espace\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Espace\UserBundle\Entity\Entreprise;
use Espace\UserBundle\Entity\User;
use Espace\UserBundle\Form\EntrepriseType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;




use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class EntrepriseController extends Controller
{

   public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }




     public function n_entrepriseAction(Request $request)
  {
//nouvelle instance de l'entité Offre
    $entreprise= new User();
    //$user= new User();
$passwordEncoder = $this->get('security.password_encoder');
 

    $form = $this->createForm(EntrepriseType::class, $entreprise);


//si le formulaire est bien rempli, on l'enregistre dans la BD
    if($request->isMethod('POST')){

      $form->handleRequest($request);

 
      if($form->isValid()   
        ){

      $entreprise->setRoles(array('ROLE_ENTREPRISE'));
      $entreprise -> setProfil('ENTREPRISE');
      $entreprise -> setUsername($entreprise->getEmail());
      $entreprise ->setSalt('');
      $entreprise ->setValide(false);

      if($entreprise->getDiplome()==null)
      $entreprise->setDiplome('N;');
      //$user = $entreprise;
      $password = $passwordEncoder->encodePassword($entreprise, $entreprise->getPlainPassword());
      $entreprise->setPassword($password);

      $em= $this->getDoctrine()->getManager();
      $em->persist($entreprise);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Entreprise Bien enregistrée.');




        return $this->redirectToRoute('espace_platform_homepage');
      }
    }

//sinon (ou bien premier landing sur le form), on affiche le formulaire
    return $this->render('EspaceUserBundle:New:entreprise.html.twig', array(
     'form'=>$form->createView(),
     ));


        //return $this->render('EspacePlatformBundle:Default:index.html.twig');


  }




   /*public function show_userAction(Request $request)
{
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspaceUserBundle:User');
    

    $listUsers = $repository->findAll();

    if (null === $listUsers) {
      //throw new NotFoundHttpException("Aucun utilisateur na été trouvé");
  
echo("toto");
else
    return $this->render('EspaceUserBundle:Show:index.html.twig');

    //return $this->render('EspaceUserBundle:Show:user.html.twig', array('listUsers'=>$listUsers) );
  }*/


}
