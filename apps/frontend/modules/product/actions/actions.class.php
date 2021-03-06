<?php

/**
 * product actions.
 *
 * @package    megamed
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions
{

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->products = ProductTable::getList($request->getParameter('categoryId'));
    }

    public function executeDetail(sfWebRequest $request)
    {
        $this->product = ProductTable::getInstance()->findOneBy('id', $request->getParameter('id'));
    }

}
