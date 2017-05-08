<?php

namespace AdminLTE\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\AdminBundle\Controller\Lib\BaseController;

/**
 * Class DefaultController
 * @package AdminLTE\AdminBundle\Controller
 */
class DefaultController extends BaseController
{
    /**
     * @return Response
     */
    public function homeAction()
    {
        return $this->redirectToRoute('admin_lte.form_general');
    }

}
