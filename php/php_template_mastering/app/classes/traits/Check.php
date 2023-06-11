<?php

namespace App\classes\traits;

require_once "vendor/autoload.php";

use App\classes\controllers\FrontendController;
use App\classes\controllers\CustomAuthController;
use App\classes\controllers\CategoryProductsController;
use App\classes\controllers\ShoppingCartController;
use App\classes\controllers\CheckoutController;
use App\classes\controllers\backend\DashboardController;

trait Check{

    public function check($page){
        if (isset($page)) {
            if("home" == $page){
                $obj = new FrontendController;
                $obj->index();
            }
            elseif("single-page" == $page){
                $obj = new FrontendController;
                $obj->singleProductDetails();
            }
            elseif("login" == $page){
                $obj = new CustomAuthController;
                $obj->login();
            }
            elseif("category-products" == $page){
                $obj = new CategoryProductsController;
                $obj->index();
            }
            elseif("shopping-cart" == $page){
                $obj = new ShoppingCartController;
                $obj->index();
            }
            elseif("checkout" == $page){
                $obj = new CheckoutController;
                $obj->index();
            }
            elseif("admin-dashboard" == $page){
                $obj = new DashboardController;
                $obj->dashboard();
            }
            else{
                view('not_found');
            }
        }
    }

}