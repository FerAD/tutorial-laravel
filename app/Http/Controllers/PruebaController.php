<?php
/**
 * Created by PhpStorm.
 * User: FAD
 * Date: 25/11/15
 * Time: 11:55 AM
 */

namespace Cinema\Http\Controllers;

class PruebaController extends Controller{

    public function index(){
        return "Hola desde PruebaController.php";
    }

    public function nombre($nombre){
        return "Hola desde PreubaController.php mi nombre es".$nombre;
    }

}
