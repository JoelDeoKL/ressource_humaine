<?php

//require_once 'ressources/inc/navbar.php';
//require_once("entities/Citations.php");
//require_once("models/CitationsModel.php");

class HomeController extends x_Controller{

    public function index(){
        $this->load->view("home");
    }
}