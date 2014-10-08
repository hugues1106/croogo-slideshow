<div class="slideshowItems view">
<h2><?php echo __('Slideshow Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slideshow'); ?></dt>
		<dd>
			<?php echo $this->Html->link($slideshowItem['Slideshow']['title'], array('controller' => 'slideshows', 'action' => 'view', $slideshowItem['Slideshow']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($slideshowItem['SlideshowItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slideshow Item'), array('action' => 'edit', $slideshowItem['SlideshowItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slideshow Item'), array('action' => 'delete', $slideshowItem['SlideshowItem']['id']), array(), __('Are you sure you want to delete # %s?', $slideshowItem['SlideshowItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Slideshow Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slideshow Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Slideshows'), array('controller' => 'slideshows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slideshow'), array('controller' => 'slideshows', 'action' => 'add')); ?> </li>
	</ul>
</div>
