<?php

namespace Just2\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Just2\BackendBundle\Entity\Ocassion;
use Just2\BackendBundle\Entity\OcassionVenue;
use Just2\BackendBundle\Form\OcassionType;
use Just2\BackendBundle\Form\SearchType;
use Just2\BackendBundle\Form\OcassionVenueType;
// use Just2\BackendBundle\Entity\Bid;
// use Just2\FrontendBundle\Form\BidType;

class VenueJustController extends Controller {

    // aca va de argumento $id
    public function searchAction() {
              
        $em = $this->getDoctrine()->getEntityManager();

        $ocassion = new Ocassion();

        $formSearch = $this->createForm(new OcassionType(), $ocassion);

        $peticion = $this->getRequest();
        // $formData = $peticion->request->get('just2_backendbundle_searchtype','no se obtuvo');        
        if ($peticion->getMethod() == 'POST') {

            $formSearch->bindRequest($peticion);

            if ($formSearch->isValid()) {

                $em = $this->getDoctrine()->getEntityManager();
                $id = $em->getRepository('Just2BackendBundle:OcassionVenue')
                        ->getVenueList($formSearch['id']);

                return $this->render('Just2FrontendBundle:VenueJust:prueba.html.twig', array(
                    'id'    => $id,
                    ));

            }
        }

        return $this->render('Just2FrontendBundle:VenueJust:venuesearch.html.twig', array(
            'form'    => $formSearch->createView()
            ));
            // 'form'      => $form->createView()));
    }

    // public function showAction(){

    //     $request = $this->getRequest();

    //     $formDatos = $request->get($form->getName());


    //     $em = $this->getDoctrine()->getEntityManager();

    //     // $activity = $em->getRepository('Just2BackendBundle:Activity')->find('1');
    //     // $vs = new VenueSearch();

    //     $vs = $em->getRepository('Just2BackendBundle:OcassionVenue')->findBy(array(
    //         'ocassion' => 1
    //         ));

    //     // $vs = $em->getRepository('Just2BackendBundle:Ocassion')->find(1);

    //     // $vs->setSubactivity($subactivity);

    //     // $venue = $em->getRepository('Just2BackendBundle:VenueSearch')->findOneBy(array(
    //     //         'activity'  =>  '',
    //     //         'subactivity'   =>  '',
    //     //     ))

    //     //generamos el formulario conforme esa entidad
    //     // $form = $this->createForm(new VenueSearchType(), $vs);



    //     // return $this->render('Just2FrontendBundle:VenueJust:venueresult.html.twig', array(
    //     //     'vs'    => $vs,
    //     //     ));

    //     return $this->render('Just2FrontendBundle:VenueJust:prueba.html.twig', array(
    //         'vs'    => $formDatos,
    //         ));
    //         // 'form'      => $form->createView()));
    // }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
