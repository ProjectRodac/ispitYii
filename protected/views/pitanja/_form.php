<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pitanja-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pitanje'); ?>
		<?php echo $form->textField($model,'pitanje',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'pitanje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'predmet_idPredmet'); ?>
		<?php echo $form->textField($model,'predmet_idPredmet'); ?>
		<?php echo $form->error($model,'predmet_idPredmet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
