<?php

$this->extend('/Common/admin_view');
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Slideshows'), h($slideshow['Slideshow']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Slideshows'), array('action' => 'index'));

if (isset($slideshow['Slideshow']['title'])):
	$this->Html->addCrumb($slideshow['Slideshow']['title'], '/' . $this->request->url);
endif;

$this->set('title', __d('croogo', 'Slideshow'));

$this->append('actions');
	echo $this->Croogo->adminAction(__d('croogo', 'Edit Slideshow'), array(
		'action' => 'edit',
		$slideshow['Slideshow']['id'],
	), array(
		'button' => 'default',
	));
	echo $this->Croogo->adminAction(__d('croogo', 'Delete Slideshow'), array(
		'action' => 'delete', $slideshow['Slideshow']['id'],
	), array(
		'method' => 'post',
		'button' => 'danger',
		'escapeTitle' => true,
	),
	__d('croogo', 'Are you sure you want to delete # %s?', $slideshow['Slideshow']['id'])
	);
	echo $this->Croogo->adminAction(__d('croogo', 'List Slideshows'), array('action' => 'index'));
	echo $this->Croogo->adminAction(__d('croogo', 'New Slideshow'), array('action' => 'add'), array('button' => 'success'));
	echo $this->Croogo->adminAction(__d('croogo', 'List Slideshow Items'), array('controller' => 'slideshow_items', 'action' => 'index'));
	echo $this->Croogo->adminAction(__d('croogo', 'New Slideshow Item'), array('controller' => 'slideshow_items', 'action' => 'add'));
$this->end();

$this->append('main');
?>
<div class="slideshows view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Alias'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Width'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Height'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Created'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Modified'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php $this->end(); ?>