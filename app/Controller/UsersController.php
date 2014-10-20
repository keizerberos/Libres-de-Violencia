<?php
App::uses('AppController', 'Controller');

  class UsersController extends AppController
  {

      public function index() {

      }
      public function historias() {

      }
      public function informacion() {
        $this->layout = 'informacion';
      }
      public function redacta() {
        $this->layout = 'app';
      }
      public function cuenta() {

      }
      public function testimonios() {

      }
      public function ayuda() {

      }

  }
?>
