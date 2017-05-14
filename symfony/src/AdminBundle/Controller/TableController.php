<?php
/**
 * Created by PhpStorm.
 * User: acantepie
 * Date: 08/05/17
 * Time: 11:57
 */

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Umbrella\CoreBundle\Core\BaseController;
use Umbrella\CoreBundle\DataTable\EntityColumn;

/**
 * Class TableController
 * @package AdminBundle\Controller
 */
class TableController extends BaseController
{
    /**
     * @return Response
     */
    public function simpleAction()
    {
        return $this->render('AdminBundle:Table:simple.html.twig');
    }

    /**
     * @return Response
     */
    public function dataAction()
    {
        return $this->render('AdminBundle:Table:data.html.twig');
    }

    /**
     * @return Response
     */
    public function testAction()
    {
        $table = $this->createDataTable('test')
            ->setEntity('AdminBundle:Browser')
            ->add('name', EntityColumn::class)
            ->add('vendor', EntityColumn::class)
            ->add('lastRelease', EntityColumn::class);
        
        
        return $this->render('AdminBundle:Table:test.html.twig', array(
            'table' => $table,
            'results' => $table->getResults()
        ));

    }
}