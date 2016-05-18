<?php
/* @var $this RezultatiController */
/* @var $model Rezultati */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ispit_idispit'); ?>
		<?php echo $form->textField($model,'ispit_idispit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idRezultat'); ?>
		<?php echo $form->textField($model,'idRezultat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brTocnihOdgovora'); ?>
		<?php echo $form->textField($model,'brTocnihOdgovora'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->