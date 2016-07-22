<?php
/**
 * Created by PhpStorm.
 * User: naro
 * Date: 11.07.16
 * Time: 19:01
 */

namespace Cgi\Controllers;


use Cgi\Model\Product;
use Core\Controller;
use Cgi\Model\User;


class IndexController extends Controller
{

    public function actionIndex()
    {
        $user = new User($this->_dbConn);
        $product = new Product($this->_dbConn);
        if (!$user->isAuthenticated()) {
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/login');
        } else {
            $products = $product->findAll();
            $data = [
                'title' => 'Management panel',
                'countProducts' => count($products)
            ];
            $this->_view->render('index',$data);
        }
    }

    public function actionError404()
    {
        $this->_view->render('error404');
    }
}