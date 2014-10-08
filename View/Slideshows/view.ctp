<div class="slideshows view">
<h2><?php echo __('Slideshow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slideshow'), array('action' => 'edit', $slideshow['Slideshow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slideshow'), array('action' => 'delete', $slideshow['Slideshow']['id']), array(), __('Are you sure you want to delete # %s?', $slideshow['Slideshow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Slideshows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slideshow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Slideshow Items'), array('controller' => 'slideshow_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slideshow Item'), array('controller' => 'slideshow_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Slideshow Items'); ?></h3>
	<?php if (!empty($slideshow['SlideshowItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Slideshow Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($slideshow['SlideshowItem'] as $slideshowItem): ?>
		<tr>
			<td><?php echo $slideshowItem['id']; ?></td>
			<td><?php echo $slideshowItem['slideshow_id']; ?></td>
			<td><?php echo $slideshowItem['type']; ?></td>
			<td><?php echo $slideshowItem['title']; ?></td>
			<td><?php echo $slideshowItem['content']; ?></td>
			<td><?php echo $slideshowItem['created']; ?></td>
			<td><?php echo $slideshowItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'slideshow_items', 'action' => 'view', $slideshowItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'slideshow_items', 'action' => 'edit', $slideshowItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'slideshow_items', 'action' => 'delete', $slideshowItem['id']), array(), __('Are you sure you want to delete # %s?', $slideshowItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Slideshow Item'), array('controller' => 'slideshow_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
