<?php
App::uses('AppModel', 'Model');

class Area extends AppModel {

	public $hasAndBelongsToMany = array(
		'Peticion' => array(
			'className' => 'Peticion',
			'joinTable' => 'peticions_areas',
			'foreignKey' => 'area_id',
			'associationForeignKey' => 'peticion_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
