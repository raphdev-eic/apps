<?php
App::uses('Controller','Controller');
class AppController extends Controller{
    public $components = array(
      'Session',
    	'Cookie',
    	'Auth'=>array(
				'authenticate' => array(
				    'Form' => array(
				        'fields' => array('username' => 'email'),
				        'scope'=>array('User.status'=>1)
				)
			)
    	)
    );

	public function beforeFilter(){
       parent::beforeFilter();
       $this->Auth->allow();
       $this->Auth->loginAction = Configure::read('accounts');

       //parametrage du cookie
          $this->Cookie->name ='EicCorporation';
          $this->Cookie->domain ='.eic-corporation.com';
          $this->Cookie->path = '/';
          $this->Cookie->time = '3 Days';
          $this->Cookie->key = 'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^';
          $this->Cookie->httpOnly = true;

       // verifier si on detecte la presence d'un cookie et que le users n'est pas deja connecté

        if($this->Cookie->check('eagleinvestkey') && !$this->Auth->loggedIn()){
            $this->loadModel('User'); //je charge le model

            //recherche un User qui a ce cookie dans la bd

            $user = $this->User->find('first', array(
                  'conditions' => array('User.id' => $this->Cookie->read('eagleinvestkey'))
                ));

        if(!empty($user)){
            $this->Auth->login($user);
            $this->Cookie->write('eagleinvestkey', $this->Cookie->read('eagleinvestkey'),true,'3 Days');
        }else{
            $this->Cookie->destroy();
            $this->redirect(Configure::read('accounts'));
        }

        }
  }
}