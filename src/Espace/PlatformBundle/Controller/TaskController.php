<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;

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
      /*  $tag1 = new Tag();
        $tag1->setName('tag1');
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setName('tag2');
        $task->getTags()->add($tag2);*/
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


     public function showAction(Request $request)
  {
    $em= $this  ->getDoctrine()  ->getManager();

    $repository = $em  ->getRepository('EspacePlatformBundle:Task');
    

    $listTask = $repository->findAll();

    if (null === $listTask) {
      throw new NotFoundHttpException("Aucun Task na été trouvé");
    }

    return $this->render('EspacePlatformBundle:Show:task.html.twig', array(      'listTask' => $listTask   ));
   // return $this->render('EspaceUserBundle:Show:index.html.twig');

  }










  public function editAction($id, Request $request)
{
    $entityManager = $this->getDoctrine()->getManager();
    $task = $entityManager->getRepository(Task::class)->find($id);

    if (!$task) {
        throw $this->createNotFoundException('No task found for id '.$id);
    }

    $originalTags = new ArrayCollection();

    // Create an ArrayCollection of the current Tag objects in the database
    foreach ($task->getTags() as $tag) {
        $originalTags->add($tag);
    }

    $editForm = $this->createForm(TaskType::class, $task);

    $editForm->handleRequest($request);

    if ($editForm->isValid()) {

        // remove the relationship between the tag and the Task
        foreach ($originalTags as $tag) {
            if (false === $task->getTags()->contains($tag)) {
                // remove the Task from the Tag
                $task->getTags()->removeElement($tag);

           
                $entityManager->persist($tag);

                // if you wanted to delete the Tag entirely, you can also do that
                // $entityManager->remove($tag);
            }
        }

        $entityManager->persist($task);
        $entityManager->flush();

        // redirect back to some edit page
        return $this->redirectToRoute('EP_task_edit', array('id' => $id));
    }

    return $this->render('EspacePlatformBundle:New:task.html.twig', array(
            'form' => $editForm->createView(),
        ));
}



}
