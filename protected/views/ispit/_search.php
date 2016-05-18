<?php
/* @var $this IspitController */
/* @var $model Ispit */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idispit'); ?>
		<?php echo $form->textField($model,'idispit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naziv_ispita'); ?>
		<?php echo $form->textField($model,'naziv_ispita',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opis_ispita'); ?>
		<?php echo $form->textField($model,'opis_ispita',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'predmet_idPredmet'); ?>
		<?php echo $form->textField($model,'predmet_idPredmet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objavljen'); ?>
		<?php echo $form->textField($model,'objavljen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rijesen'); ?>
		<?php echo $form->textField($model,'rijesen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->