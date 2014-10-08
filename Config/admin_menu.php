<?php

CroogoNav::add('sidebar', 'slideshow', array(
	'icon' => 'edit',
	'title' => 'Slideshow',
	'url' => array(
		'admin' => true,
		'plugin' => 'slideshow',
		'controller' => 'slideshows',
		'action' => 'index',
	),
	'weight' => 10,
	'children' => array(
		'list' => array(
			'title' => __d('croogo', 'List'),
			'url' => array(
				'admin' => true,
				'plugin' => 'slideshow',
				'controller' => 'slideshows',
				'action' => 'index',
			),
			'weight' => 10,
		),
		'create' => array(
			'title' => __d('croogo', 'Create'),
			'url' => array(
				'admin' => true,
				'plugin' => 'slideshow',
				'controller' => 'slideshowitems',
				'action' => 'index',
			),
			'weight' => 20,
		),
	)
));
