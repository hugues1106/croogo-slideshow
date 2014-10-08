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
			'title' => 'Slideshow',
			'url' => array(
				'admin' => true,
				'plugin' => 'slideshow',
				'controller' => 'slideshows',
				'action' => 'index',
			),
			'weight' => 10,
		),
		'create' => array(
			'title' => 'slideshow items',
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
