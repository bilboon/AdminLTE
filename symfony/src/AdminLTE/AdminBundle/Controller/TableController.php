<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 08/05/17
 * Time: 11:57
 */

namespace AdminLTE\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\AdminBundle\Controller\Lib\BaseController;

/**
 * Class TableController
 * @package AdminLTE\AdminBundle\Controller
 */
class TableController extends BaseController
{
    /**
     * @return Response
     */
    public function simpleAction()
    {
        return $this->render('AdminLTEAdminBundle:Table:simple.html.twig');
    }

    /**
     * @return Response
     */
    public function dataAction()
    {
        return $this->render('AdminLTEAdminBundle:Table:data.html.twig');
    }
}