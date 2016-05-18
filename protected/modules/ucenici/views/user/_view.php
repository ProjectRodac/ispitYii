<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ime')); ?>:</b>
	<?php echo CHtml::encode($data->ime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prezime')); ?>:</b>
	<?php echo CHtml::encode($data->prezime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />
 
</div>