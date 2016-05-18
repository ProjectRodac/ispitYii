<?php
/* @var $this PredmetController */
/* @var $model Predmet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPredmet'); ?>
		<?php echo $form->textField($model,'idPredmet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naziv'); ?>
		<?php echo $form->textField($model,'naziv',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->