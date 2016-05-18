<?php
/* @var $this OdgovorController */
/* @var $model Odgovor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'odgovor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo 'Tocan (ako je odgovor tocan stavi kvacicu, ako nije neka bude prazno)' ?>
            </br>
                <?php echo $form->checkBox($model,'tocan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'odgovor'); ?>
		<?php echo $form->textField($model,'odgovor',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'odgovor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pitanje:'); ?>
		<?php echo $form->dropDownList($model,'pitanja_idpitanja',CHTML::listdata(Pitanja::model()->findAll(),'idpitanja','pitanje')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->