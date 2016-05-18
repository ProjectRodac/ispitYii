<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pitanja_idpitanja'); ?>
		<?php echo $form->textField($model,'pitanja_idpitanja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ispit_idispit'); ?>
		<?php echo $form->textField($model,'ispit_idispit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->