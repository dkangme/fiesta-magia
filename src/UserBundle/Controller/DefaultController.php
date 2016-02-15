<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $seleccion = array();
        $numeros = array();

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p 
            FROM AppBundle:Media p
            WHERE p.front = :status'
        )->setParameter('status', 1);

        $photos = $query->getResult();

        for ($i=0; $i < 8; $i++)
        {
            $numero = rand(1, count($photos)-1);
            $flag = false;

            for ($j=0; $j < count($numeros); $j++)
            {
            	if ($numeros[$j] == $numero)
            		$flag=true;
            }

            if ($flag==false) {
            	array_push($numeros, $numero);
            	array_push($seleccion, str_replace("/var/www/html/fiestaymagia/docroot/includes/../", "/", $photos[$numero]->getPath()));	
            } else 
            {
            	$i--;
            }
        }

        return $this->render('default/index.html.twig', array(
            "seleccion" => $seleccion,
        ));
    }
}
