<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 08/05/17
 * Time: 14:51
 */

namespace AdminLTE\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\AdminBundle\Controller\Lib\BaseController;

/**
 * Class UserController
 * @package AdminLTE\AdminBundle\Controller
 */
class UserController extends BaseController
{

    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('AdminLTEAdminBundle:User:index.html.twig');
    }

}