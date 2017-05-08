<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 08/05/17
 * Time: 01:20
 */

namespace AdminLTE\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\AdminBundle\Controller\Lib\BaseController;
use Umbrella\AdminBundle\Form\WysiwygType;

/**
 * Class FormController
 * @package AdminLTE\AdminBundle\Controller
 */
class FormController extends BaseController
{
    /**
     * @return Response
     */
    public function generalAction()
    {
        return $this->render('AdminLTEAdminBundle:Form:general.html.twig');
    }

    /**
     * @return Response
     */
    public function advancedAction()
    {
        return $this->render('AdminLTEAdminBundle:Form:advanced.html.twig');
    }

    /**
     * @return Response
     */
    public function editorsAction()
    {
        $builder = $this->createFormBuilder();
        $builder->add('text', WysiwygType::class);
        return $this->render('AdminLTEAdminBundle:Form:editors.html.twig', array(
            'form' => $builder->getForm()->createView()
        ));
    }
}