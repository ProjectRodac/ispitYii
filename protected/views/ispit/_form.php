<?php
/* @var $this IspitController */
/* @var $model Ispit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ispit-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'naziv_ispita'); ?>
		<?php echo $form->textField($model,'naziv_ispita',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'naziv_ispita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opis_ispita'); ?>
		<?php echo $form->textField($model,'opis_ispita',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'opis_ispita'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'predmet_idPredmet'); ?>
                <?php echo $form->dropDownList($model,'predmet_idPredmet',CHTML::listdata(Predmet::model()->findAll(),'idPredmet','naziv')); ?>
                <?php echo $form->error($model,'opis_ispita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objavljen'); ?>
                <?php echo $form->checkBox($model,'objavljen'); ?>
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rijesen'); ?>
                <?php echo $form->checkBox($model,'rijesen'); ?>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->