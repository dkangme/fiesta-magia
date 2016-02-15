<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $seleccion = array();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p 
            FROM AppBundle:Media
            WHERE p.front = 1');

        $photos = $query->getResult();

        for ($i=0; $i < 8; $i++)
        {
            $numero = rand(1, $photos.len);

            $seleccion.push($numero);
        }

        return $this->render('default/index.html.twig', array(
            "seleccion" => $seleccion,
        ));
    }
}
