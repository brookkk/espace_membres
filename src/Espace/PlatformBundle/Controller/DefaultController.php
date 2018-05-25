<?php

namespace Espace\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspacePlatformBundle:Default:index.html.twig');
    }



    public function send_mailAction()
    {
    	for($i=0;$i<1;$i++){
    	 $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email'.($i+1))
        ->setFrom('sim.rmay.no3@gmail.com')
        ->setTo('grini.abdellah@gmail.com')
        ->setBody("espace test !!");
        $this->get('mailer')->send($message);
}

 $this->get('mailer')->send($message);
     //$this->getMailer()->send("tets");

     return $this->render('EspacePlatformBundle:Default:index.html.twig');

 }

}
