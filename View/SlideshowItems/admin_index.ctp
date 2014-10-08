<?php
$this->viewVars['title_for_layout'] = __d('slideshow', 'Slideshow Items');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('slideshow', 'Slideshow Items'), array('action' => 'index'));

$this->set('tableClass', 'table table-striped');

$this->append('table-heading');
	$tableHeaders = $this->Html->tableHeaders(array(
		$this->Paginator->sort('id'),
		$this->Paginator->sort('slideshow_id'),
		$this->Paginator->sort('type'),
		$this->Paginator->sort('title'),
		$this->Paginator->sort('content'),
		$this->Paginator->sort('created'),
		$this->Paginator->sort('modified'),
		array(__d('croogo', 'Actions') => array('class' => 'actions')),
	));
	echo $this->Html->tag('thead', $tableHeaders);
$this->end();

$this->append('table-body');
	foreach ($slideshowItems as $slideshowItem):
		$row = array();
		$row[] = h($slideshowItem['SlideshowItem']['id']);
		$row[] = $this->Html->link($slideshowItem['Slideshow']['title'], array(
			'controller' => 'slideshows',
		'action' => 'view',
			$slideshowItem['Slideshow']['id'],
	));
		$row[] = h($slideshowItem['SlideshowItem']['type']);
		$row[] = h($slideshowItem['SlideshowItem']['title']);
		$row[] = h($slideshowItem['SlideshowItem']['content']);
		$row[] = h($slideshowItem['SlideshowItem']['created']);
		$row[] = h($slideshowItem['SlideshowItem']['modified']);
		$row[] = array($this->Croogo->adminRowActions($slideshowItem['SlideshowItem']['id']), array(
			'class' => 'item-actions',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'view', $slideshowItem['SlideshowItem']['id']
	), array(
			'icon' => 'eye-open',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'edit',
			$slideshowItem['SlideshowItem']['id'],
		), array(
			'icon' => 'pencil',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'delete',
			$slideshowItem['SlideshowItem']['id'],
		), array(
			'icon' => 'trash',
			'escape' => true,
		),
		__d('croogo', 'Are you sure you want to delete # %s?', $slideshowItem['SlideshowItem']['id'])
		);
		$rows[] = $this->Html->tableCells($row);
	endforeach;
	if(!empty($rows)) {
		echo $this->Html->tag('tbody', implode('', $rows));
	}
	
$this->end();
