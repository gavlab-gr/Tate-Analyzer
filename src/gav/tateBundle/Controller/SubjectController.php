<?php

namespace gav\tateBundle\Controller;

use gav\tateBundle\Entity\Subject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Subject controller.
 *
 */
class SubjectController extends Controller
{
    /**
     * Lists all subject entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subjects = $em->getRepository('gavtateBundle:Subject')->findAll();

        return $this->render('subject/index.html.twig', array(
            'subjects' => $subjects,
        ));
    }

    /**
     * Finds and displays a subject entity.
     *
     */
    public function showAction(Subject $subject)
    {

        return $this->render('subject/show.html.twig', array(
            'subject' => $subject,
        ));
    }
}
