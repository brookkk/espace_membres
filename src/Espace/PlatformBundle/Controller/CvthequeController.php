<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\PlatformBundle\Entity\Offre;
use Espace\PlatformBundle\Form\OffreType;
use Espace\PlatformBundle\Form\OffreSearchType;



class CvthequeController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:admin.html.twig');
    }





}
