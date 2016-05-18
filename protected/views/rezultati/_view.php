<?php
/* @var $this RezultatiController */
/* @var $data Rezultati */
?>

<div class="view">

	<b><?php echo CHtml::encode($data['user']->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data['user']->username); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('brTocnihOdgovora')); ?>:</b>
	<?php echo CHtml::encode($data->brTocnihOdgovora); ?>
	<br />


</div>