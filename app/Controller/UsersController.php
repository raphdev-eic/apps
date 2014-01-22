<?php

App::uses('AppController','Controller');

class UsersController extends AppController{



	public function logout() {
	    $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
	    $this->Cookie->delete('EicAuth');
        return $this->redirect($this->Auth->logout());
    }

}