<?php
/* @var $this PredmetiUseraController */
/* @var $data PredmetiUsera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('predmet_idPredmet')); ?>:</b>
	<?php echo CHtml::encode($data->predmet_idPredmet); ?>
	<br />


</div>