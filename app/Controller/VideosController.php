<?php
App::uses('AppController', 'Controller');

class VideosController extends AppController {
	
	public $name = 'Videos';

	public $uses = array(

	'Video'

	);

	public $paginate = array(

		'order' => 'Video.id DESC',

	);

	public function index() {

	$this->set('videos', $this->paginate());
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Video->create();

			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('動画の追加に成功しました。'), 'Flash/success');

				$this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('動画の追加に失敗しました。'));

			}


		}
	}

	public function view($id = null) {
		$this->Video->id = $id;
		$this->set('video',$this->Video->read());



	}









	}













?>