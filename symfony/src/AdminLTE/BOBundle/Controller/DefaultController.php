<?php

namespace AdminLTE\BOBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\CoreBundle\Controller\Lib\BaseController;

/**
 * Class DefaultController
 * @package AdminLTE\BOBundle\Controller
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
        return $this->render('AdminLTEBOBundle:Form:general.html.twig');
    }

    /**
     * @return Response
     */
    public function formAdvancedAction()
    {
        return $this->render('AdminLTEBOBundle:Form:advanced.html.twig');
    }

    /**
     * @return Response
     */
    public function formEditorsAction()
    {
        return $this->render('AdminLTEBOBundle:Form:editors.html.twig');
    }
}
