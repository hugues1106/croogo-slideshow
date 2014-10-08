<?php

$this->extend('/Common/admin_view');
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Slideshow Items'), h($slideshowItem['SlideshowItem']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Slideshow Items'), array('action' => 'index'));

if (isset($slideshowItem['SlideshowItem']['title'])):
	$this->Html->addCrumb($slideshowItem['SlideshowItem']['title'], '/' . $this->request->url);
endif;

$this->set('title', __d('croogo', 'Slideshow Item'));

$this->append('actions');
	echo $this->Croogo->adminAction(__d('croogo', 'Edit Slideshow Item'), array(
		'action' => 'edit',
		$slideshowItem['SlideshowItem']['id'],
	), array(
		'button' => 'default',
	));
	echo $this->Croogo->adminAction(__d('croogo', 'Delete Slideshow Item'), array(
		'action' => 'delete', $slideshowItem['SlideshowItem']['id'],
	), array(
		'method' => 'post',
		'button' => 'danger',
		'escapeTitle' => true,
	),
	__d('croogo', 'Are you sure you want to delete # %s?', $slideshowItem['SlideshowItem']['id'])
	);
	echo $this->Croogo->adminAction(__d('croogo', 'List Slideshow Items'), array('action' => 'index'));
	echo $this->Croogo->adminAction(__d('croogo', 'New Slideshow Item'), array('action' => 'add'), array('button' => 'success'));
	echo $this->Croogo->adminAction(__d('croogo', 'List Slideshows'), array('controller' => 'slideshows', 'action' => 'index'));
	echo $this->Croogo->adminAction(__d('croogo', 'New Slideshow'), array('controller' => 'slideshows', 'action' => 'add'));
$this->end();

$this->append('main');
?>
<div class="slideshowItems view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Slideshow'); ?></dt>
		<dd>
			<?php echo $this->Html->link($slideshowItem['Slideshow']['title'], array('controller' => 'slideshows', 'action' => 'view', $slideshowItem['Slideshow']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Type'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Content'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php $this->end(); ?>