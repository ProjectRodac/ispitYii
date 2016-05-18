<?php
/* @var $this UserOdgovoriController */
/* @var $data UserOdgovori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odgovor_idOdgovor')); ?>:</b>
	<?php echo CHtml::encode($data->odgovor_idOdgovor); ?>
	<br />


</div>