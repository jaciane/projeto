<div class="usersRoles view">
<h2><?php echo __('Users Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usersRole['UsersRole']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersRole['Role']['id'], array('controller' => 'roles', 'action' => 'view', $usersRole['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersRole['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersRole['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Role'), array('action' => 'edit', $usersRole['UsersRole']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users Role'), array('action' => 'delete', $usersRole['UsersRole']['id']), array(), __('Are you sure you want to delete # %s?', $usersRole['UsersRole']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
