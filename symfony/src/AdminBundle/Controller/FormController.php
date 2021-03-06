<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 08/05/17
 * Time: 01:20
 */

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\CoreBundle\Core\BaseController;
use Umbrella\CoreBundle\Form\WysiwygType;

/**
 * Class FormController
 * @package AdminBundle\Controller
 */
class FormController extends BaseController
{
    /**
     * @return Response
     */
    public function generalAction()
    {
        return $this->render('AdminBundle:Form:general.html.twig');
    }

    /**
     * @return Response
     */
    public function advancedAction()
    {
        return $this->render('AdminBundle:Form:advanced.html.twig');
    }

    /**
     * @return Response
     */
    public function editorsAction()
    {
        $builder = $this->createFormBuilder();
        $builder->add('text', WysiwygType::class);
        return $this->render('AdminBundle:Form:editors.html.twig', array(
            'form' => $builder->getForm()->createView()
        ));
    }
}