<?php

namespace Just2\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Just2\BackendBundle\Entity\Bid;
use Just2\FrontendBundle\Form\BidType;

class BidController extends Controller {

    public function bidAction() {

        $bid = new Bid();

        $formBid = $this->createForm(new BidType(), $bid);

        $peticion = $this->getRequest();
        $formData = $peticion->request->get('just2_frontendbundle_bidtype','no se obtuvo');
        
 //       return new Response($price['dateJust']);
        
        $em = $this->getDoctrine()->getEntityManager();

        if ($peticion->getMethod() == 'POST') {

            $formBid->bindRequest($peticion);

            if ($formBid->isValid()) {

                $em = $this->getDoctrine()->getEntityManager();
                $date = $em->getRepository('Just2BackendBundle:DateJust')
                        ->activeAppointment($formData['dateJust']);

                $member = $usuario = $this->get('security.context')->getToken()->getUser(); //user in session

                $member = $this->getDoctrine()
                        ->getRepository('Just2BackendBundle:Member')
                        ->find($id = $member);

                if ($date) {
                   
                    $bid->setDateJust($date);
                    $bid->setMember($member);
                    $bid->setEstate(3);
                    
                    $em->persist($bid);
                    $em->flush();
                    
                    return new Response('ok');
                }else{
                    return new Response($peticion->request->get('just2_frontendbundle_bidtype[dateJust]'));
                }

               
            }else{
               return new Response('no'); 
            }
        }
        
    }

    public function actionsAction($date, $bid, $action) {
        
    }

    public function myProposalsAction() {
        
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
