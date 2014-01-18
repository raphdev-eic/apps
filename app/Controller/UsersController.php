<?php
App::uses('AppController','Controller');
class UsersController extends AppController{

	public function logout() {
	   // $this->Cookie->write('eagleinvestkey','',true, time() - 3600 * 24 * 3);
	    $this->Cookie->destroy();
	    $this->redirect($this->Auth->logout());
    }
}