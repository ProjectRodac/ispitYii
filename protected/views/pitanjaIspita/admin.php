<?php
/* @var $this PitanjaIspitaController */
/* @var $model PitanjaIspita */

$this->breadcrumbs=array(
	'Pitanja Ispitas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PitanjaIspita', 'url'=>array('index')),
	array('label'=>'Create PitanjaIspita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pitanja-ispita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pitanja Ispitas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pitanja-ispita-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            array(
                'name'=>'pitanja_idpitanja',
                'value'=>function($data){
                    echo $data->pitanjaIdpitanja->pitanje;
                } 
            ),
            array(
                'name'=>'ispit_idispit',
                'value'=>function($data){
                    echo $data->ispitIdispit->naziv_ispita;
                } 
            ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
