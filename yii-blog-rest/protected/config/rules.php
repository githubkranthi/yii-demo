<?php
/**
 * This returns url rules.
 */
return
	array(
	    // REST patterns
	    array('api/index', 'pattern'=>'api/<model:\w+>', 'verb'=>'GET'),
		array('api/index', 'pattern'=>'api/<controller:\w+>/<action:\w+>', 'verb'=>'GET'),
		array('api/index', 'pattern'=>'api/<controller:\w+>/<action:\w+>/<id:\w+>', 'verb'=>'GET'),

		array('api/view', 'pattern'=>'api/<model:\w+>/<id:\w+>', 'verb'=>'GET'),
	    array('api/wlgview', 'pattern'=>'api/<model:\w+>/<id:\w+>/<sid:\w+>', 'verb'=>'GET'),
	    array('api/update', 'pattern'=>'api/<model:\w+>/<id:\w+>', 'verb'=>'PUT'),  // Update
	    array('api/delete', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'DELETE'),
	    array('api/specdelete', 'pattern'=>'api/<model:\w+>/<id:\w+>/<sid:\w+>', 'verb'=>'DELETE'),
	    array('api/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'), // Create

			array('user/login', 'pattern'=>'user/<model:\w+>', 'verb'=>'GET'),
		//	array('user/login', 'pattern'=>'user/<model:\w+>', 'verb'=>'GET'),

	     //Template REST api patterns
	    array('templateapi/list', 'pattern'=>'templateapi/<model:\w+>', 'verb'=>'GET'),
	    array('templateapi/view', 'pattern'=>'templateapi/<model:\w+>/<id:\w+>', 'verb'=>'GET'),
	    array('templateapi/speview', 'pattern'=>'templateapi/<model:\w+>/<id:\w+>/<sid:\w+>', 'verb'=>'GET'),
	    array('templateapi/dataview', 'pattern'=>'templateapi/<model:\w+>/<id:\w+>/<sid:\w+>/<inid:\w+>', 'verb'=>'GET'),
	    array('templateapi/update', 'pattern'=>'templateapi/<model:\w+>/<id:\w+>', 'verb'=>'PUT'),  // Update
	    array('templateapi/delete', 'pattern'=>'templateapi/<model:\w+>/<id:\d+>', 'verb'=>'DELETE'),
	    array('templateapi/create', 'pattern'=>'templateapi/<model:\w+>', 'verb'=>'POST'), // Create
	    array('templateapi/updatemultiple', 'pattern'=>'templateapi/<model:\w+>/<id:\w+>/<sid:\w+>', 'verb'=>'PUT'),  // Update
	    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
	);
?>
