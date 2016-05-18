<?php
/* @var $this PitanjaIspitaController */
/* @var $data PitanjaIspita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pitanja_idpitanja')); ?>:</b>
	<?php echo CHtml::encode($data->pitanja_idpitanja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ispit_idispit')); ?>:</b>
	<?php echo CHtml::encode($data->ispit_idispit); ?>
	<br />


</div>