<?php
/* @var $this OdgovorController */
/* @var $data Odgovor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOdgovor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idOdgovor), array('view', 'id'=>$data->idOdgovor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tocan')); ?>:</b>
	<?php echo CHtml::encode($data->tocan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odgovor')); ?>:</b>
	<?php echo CHtml::encode($data->odgovor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pitanja_idpitanja')); ?>:</b>
	<?php echo CHtml::encode($data->pitanja_idpitanja); ?>
	<br />


</div>