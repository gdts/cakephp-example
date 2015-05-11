<?php	App::uses('AppModel', 'Model');
class User extends AppModel{
public $name = 'User';
public $validate = array(
		'username' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        
		'email' => array(
            'rule' => 'notEmpty'
        ),
        'password' => array(
            'rule' => 'notEmpty'
        ),
		'institucion' => array(
            'rule' => 'notEmpty'
        )
		
    );


public $hasMany = array(
'Peticion' => array(
	'className' => 'Peticion',
	'foreignKey' => 'user_id',
	'dependent' => false,
	'conditions' => '',
	'fields' => '',
	'order' => '',
	'limit' => '',
	'offset' => '',
	'exclusive' => '',
	'finderQuery' => '',
	'counterQuery' => ''
)
);

}
?>
