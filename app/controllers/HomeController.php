<?php

class HomeController extends Controller {

  public function index() {

    // Render View with 'message' variable
    $this->render('home/welcome', [
      'message' => "Hello and welcome to the homepage!"
    ]);
    
  }

}