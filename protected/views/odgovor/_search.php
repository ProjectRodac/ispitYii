<?php
/* @var $this OdgovorController */
/* @var $model Odgovor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idOdgovor'); ?>
		<?php echo $form->textField($model,'idOdgovor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tocan'); ?>
		<?php echo $form->textField($model,'tocan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'odgovor'); ?>
		<?php echo $form->textField($model,'odgovor',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pitanja_idpitanja'); ?>
		<?php echo $form->textField($model,'pitanja_idpitanja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->