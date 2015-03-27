<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class ApiController
 * @package AppBundle\Controller
 *
 * @Route("/api")
 */

class ApiController extends Controller
{
    public function seriesAction()
    {
        $em = $this->getDoctrine()->getManager();
    }

}