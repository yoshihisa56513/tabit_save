<?php
App::uses('AppModel','Model');

class Video extends AppModel {
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'タイトルを入力してください。'
				),
			'maxlength' => array(
				'rule' => array('maxlength',50),
				'message' => '50文字以内にしてください。'

				),



			),



		);


}