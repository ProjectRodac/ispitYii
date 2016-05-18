<?php
/* @var $this IspitController */
/* @var $model Ispit */

$this->breadcrumbs=array(
	'Ispiti'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ispit', 'url'=>array('index')),
	array('label'=>'Create Ispit', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ispit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Ispiti</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ispit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idispit',
		'naziv_ispita',
		'opis_ispita',
		'predmetIdPredmet.naziv',
		'objavljen',
		'rijesen',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
