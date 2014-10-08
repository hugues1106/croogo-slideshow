<?php
$this->viewVars['title_for_layout'] = __d('slideshow', 'Slideshows');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('slideshow', 'Slideshows'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->request->data['Slideshow']['title'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Slideshows: ' . $this->request->data['Slideshow']['title'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

$this->append('form-start', $this->Form->create('Slideshow'));

$this->append('tab-heading');
	echo $this->Croogo->adminTab(__d('slideshow', 'Slideshow'), '#slideshow');
	echo $this->Croogo->adminTabs();
$this->end();

$this->append('tab-content');
	echo $this->Form->input('id');
	echo $this->Form->input('title', array(
		'label' => 'Title',
	));
	echo $this->Form->input('alias', array(
		'label' => 'Alias',
	));
	echo $this->Form->input('width', array(
		'label' => 'Width',
	));
	echo $this->Form->input('height', array(
		'label' => 'Height',
	));
	echo $this->Form->input('status', array(
		'label' => 'Status',
	));
	echo $this->Croogo->adminTabs();
$this->end();

$this->append('panels');
	echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
		$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
		$this->Form->button(__d('croogo', 'Save'), array('button' => 'primary')) .
		$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('button' => 'danger'));
	echo $this->Html->endBox();

	echo $this->Croogo->adminBoxes();
$this->end();

$this->append('form-end', $this->Form->end());
