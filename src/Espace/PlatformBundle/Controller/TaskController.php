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







    public function newAction(Request $request)
    {
        $task = new Task();

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        $tag1 = new Tag();
        $tag1->setName('tag1');
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setName('tag2');
        $task->getTags()->add($tag2);
        // end dummy code

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects

       $em= $this->getDoctrine()->getManager();
      $em->persist($task);
      $em->flush();


      return $this->redirectToRoute('EP_show_offre');
        }

        return $this->render('EspacePlatformBundle:New:task.html.twig', array(
            'form' => $form->createView(),
        ));
    }



}
