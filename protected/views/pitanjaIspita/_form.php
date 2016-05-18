<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pitanja-ispita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="row">
                <?php echo $form->labelEx($model,'ispit_idispit'); ?>
                <?php echo $form->dropDownList($model,'ispit_idispit',CHTML::listdata(Ispit::model()->findAll(),'idispit','naziv_ispita')); ?>
                <?php echo $form->error($model,'opis_ispita'); ?>
	</div>
           <div class="row">
                <?php echo $form->labelEx($model,'pitanja_idpitanja'); ?>
                <?php echo $form->dropDownList($model,'pitanja_idpitanja',CHTML::listdata(Pitanja::model()->findAll(),'idpitanja','pitanje')); ?>
                <?php echo $form->error($model,'opis_ispita'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->