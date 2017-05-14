<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\CoreBundle\Core\BaseController;

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
