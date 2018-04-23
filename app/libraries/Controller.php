<?php

/*
* Base Controller
* Load Model and view
*/
class Controller {

    //load model
    public function model($model){
        //require model file
        require_once '../app/models/'.$model.'.php';


        //instantiate model
        return new $model();
    }

    //load view

    public function view($view, $data=[]){
        //check foe view file
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        } else {
            //View does not exist
            die('View does not exist');
        }
    }

}