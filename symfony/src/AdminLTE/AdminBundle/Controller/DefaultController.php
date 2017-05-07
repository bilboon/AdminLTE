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
        return $this->redirectToRoute('admin_lte_form_general');
    }

    /**
     * @return Response
     */
    public function formGeneralAction()
    {
        return $this->render('AdminLTEAdminBundle:Form:general.html.twig');
    }

    /**
     * @return Response
     */
    public function formAdvancedAction()
    {
        return $this->render('AdminLTEAdminBundle:Form:advanced.html.twig');
    }

    /**
     * @return Response
     */
    public function formEditorsAction()
    {
        return $this->render('AdminLTEAdminBundle:Form:editors.html.twig');
    }
}
