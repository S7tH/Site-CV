<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/portfolio", name="portfolio")
     * @Method({"GET"})
     */
    public function portfolioAction()
    {
        return $this->render('default/portfolio.html.twig');
    }

    /**
     * @Route("/cv", name="cv")
     * @Method({"GET"})
     */
    public function cvAction()
    {
    	return $this->render('default/cv.html.twig', array('nom' => 'S7tH'));
    }

    /**
     * @Route("/contact", name="contact")
     * @Method({"GET"})
     */
    public function contactAction()
    {
    	return $this->render('default/contact.html.twig', array('nom' => 'S7tH'));
    }
}
