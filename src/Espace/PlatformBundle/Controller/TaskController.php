<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Espace\PlatformBundle\Entity\Task;
use Espace\PlatformBundle\Entity\Tag;
use Espace\PlatformBundle\Form\TaskType;



class TaskController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:admin.html.twig');
    }





}
