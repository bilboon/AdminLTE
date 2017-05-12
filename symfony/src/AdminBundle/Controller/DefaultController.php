<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\AdminBundle\Controller\Lib\BaseController;

/**
 * Class DefaultController
 * @package AdminBundle\Controller
 */
class DefaultController extends BaseController
{
    /**
     * @return Response
     */
    public function homeAction()
    {
        return $this->redirectToRoute('admin.form_general');
    }

}
