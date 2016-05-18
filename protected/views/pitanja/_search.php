<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpitanja'); ?>
		<?php echo $form->textField($model,'idpitanja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pitanje'); ?>
		<?php echo $form->textField($model,'pitanje',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'predmet_idPredmet'); ?>
		<?php echo $form->textField($model,'predmet_idPredmet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->