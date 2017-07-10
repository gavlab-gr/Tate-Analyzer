<?php

namespace gav\tateBundle\Controller;

use gav\tateBundle\Entity\Subject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$allArt = $em->getRepository("gavtateBundle:Artwork")->findAll();
        $repo = $this->getDoctrine()->getRepository("gavtateBundle:Subject");
        $query = $repo->createQueryBuilder('s')
            ->getQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            25/*limit per page*/
        );

        return $this->render('subject/index.html.twig', array(
            'pagination' => $pagination,
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
