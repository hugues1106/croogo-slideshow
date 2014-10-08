<?php
$this->viewVars['title_for_layout'] = __d('slideshow', 'Slideshow Items');
$this->extend('/Common/admin_edit');
$this->Croogo->adminscript('Slideshow.admin');


$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('slideshow', 'Slideshow Items'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->request->data['SlideshowItem']['title'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Slideshow Items: ' . $this->request->data['SlideshowItem']['title'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

$this->append('form-start', $this->Form->create('SlideshowItem'));

$this->append('tab-heading');
	echo $this->Croogo->adminTab(__d('slideshow', 'Slideshow Item'), '#slideshow-item');
	echo $this->Croogo->adminTabs();
$this->end();

$this->append('tab-content');
	echo $this->Form->input('id');
	echo $this->Form->input('slideshow_id', array(
		'label' => 'Slideshow Id',
	));
	echo $this->Form->input('type', array(
		'label' => 'Type',
		'type' => 'select',
		'options' => array('image', 'youtube', 'html')
	));
	echo $this->Form->input('title', array(
		'label' => 'Title',
	));
	echo $this->Form->input('content', array(
		'label' => 'Content',
		'div' => array('class'=>'input text slideshow-content')
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
