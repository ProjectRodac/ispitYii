<?php
/* @var $this PitanjaController */
/* @var $data Pitanja */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('pitanje')); ?>:</b>
	<?php echo CHtml::encode($data->pitanje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Predmet')); ?>:</b>
	<?php echo CHtml::encode($data->predmet_idPredmet); ?>
	<br />


</div>