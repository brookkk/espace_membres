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
    $entreprise= new User();
$passwordEncoder = $this->get('security.password_encoder');
 

    $form = $this->createForm(EntrepriseType::class, $entreprise);


    if($request->isMethod('POST')){

      $form->handleRequest($request);
      //$form->submit($request->get($form->getName()), true);

 
      if($form->isValid()   
        ){

      $entreprise->setRoles(array('ROLE_ENTREPRISE'));
      $entreprise -> setProfil('ENTREPRISE');
      $entreprise -> setUsername($entreprise->getEmail());
      $entreprise ->setSalt('');
      $entreprise ->setValide(false);

      if($entreprise->getDiplome()==null)
      $entreprise->setDiplome('N;');
      $password = $passwordEncoder->encodePassword($entreprise, $entreprise->getPlainPassword());
      $entreprise->setPassword($password);


      //file/logo handling

      $file = $entreprise->getLogoE();
      $fileName = $file.'.'.$file->guessExtension();

      $new_dir = "./upload/logo/entreprise/".$entreprise->getEmail()."/";

      $file->move(
                "./upload/logo/entreprise/".$entreprise->getEmail()."/", $fileName
            );

      $entreprise->setLogoE($new_dir);

      $em= $this->getDoctrine()->getManager();
      $em->persist($entreprise);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Entreprise Bien enregistrée.');




        return $this->redirectToRoute('espace_platform_homepage');
      }
    }

    return $this->render('EspaceUserBundle:New:entreprise.html.twig', array(
     'form'=>$form->createView(),
     ));




  }




public function detailsAction($id)
{

  $repository = $this  ->getDoctrine()  ->getManager()  ->getRepository('EspaceUserBundle:User');

  $entreprise = $repository->find($id);


  if (null === $entreprise) {
    throw new NotFoundHttpException("Votre utilisateur na pas été trouvé");
  }



  return $this->render('EspaceUserBundle:Show:entreprise.html.twig', array(
   'entreprise'=>$entreprise,
   ));


}



}
