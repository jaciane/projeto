<div class="usersRoles form">
<?php echo $this->Form->create('UsersRole'); ?>
	<fieldset>
		<legend><?php echo __('Add Users Role'); ?></legend>
	<?php
                foreach($roles as $role){
                        $optionsRole[$role['Role']['id']] = $role['Role']['descricao'];
                }
                    echo $this->Form->input('role_id', array('type' => 'select', 'options' => $optionsRole ));
                foreach($users as $user){
                        $options[$user['Users']['id']] = $user['Users']['username'];
                }
                    echo $this->Form->input('users_id', array('type' => 'select', 'options' => $options ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Roles'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
