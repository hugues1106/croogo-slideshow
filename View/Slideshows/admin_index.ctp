<?php
$this->viewVars['title_for_layout'] = __d('slideshow', 'Slideshows');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('slideshow', 'Slideshows'), array('action' => 'index'));

$this->set('tableClass', 'table table-striped');

$this->append('table-heading');
	$tableHeaders = $this->Html->tableHeaders(array(
		$this->Paginator->sort('id'),
		$this->Paginator->sort('title'),
		$this->Paginator->sort('alias'),
		$this->Paginator->sort('width'),
		$this->Paginator->sort('height'),
		$this->Paginator->sort('status'),
		$this->Paginator->sort('created'),
		$this->Paginator->sort('modified'),
		array(__d('croogo', 'Actions') => array('class' => 'actions')),
	));
	echo $this->Html->tag('thead', $tableHeaders);
$this->end();

$this->append('table-body');
	foreach ($slideshows as $slideshow):
		$row = array();
		$row[] = h($slideshow['Slideshow']['id']);
		$row[] = h($slideshow['Slideshow']['title']);
		$row[] = h($slideshow['Slideshow']['alias']);
		$row[] = h($slideshow['Slideshow']['width']);
		$row[] = h($slideshow['Slideshow']['height']);
		$row[] = h($slideshow['Slideshow']['status']);
		$row[] = h($slideshow['Slideshow']['created']);
		$row[] = h($slideshow['Slideshow']['modified']);
		$row[] = array($this->Croogo->adminRowActions($slideshow['Slideshow']['id']), array(
			'class' => 'item-actions',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'view', $slideshow['Slideshow']['id']
	), array(
			'icon' => 'eye-open',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'edit',
			$slideshow['Slideshow']['id'],
		), array(
			'icon' => 'pencil',
		));
		$row[] = $this->Croogo->adminRowAction('', array(
			'action' => 'delete',
			$slideshow['Slideshow']['id'],
		), array(
			'icon' => 'trash',
			'escape' => true,
		),
		__d('croogo', 'Are you sure you want to delete # %s?', $slideshow['Slideshow']['id'])
		);
		$rows[] = $this->Html->tableCells($row);
	endforeach;
	if(!empty($rows)) {
		echo $this->Html->tag('tbody', implode('', $rows));		
	}

$this->end();
