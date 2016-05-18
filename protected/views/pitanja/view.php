<?php
/* @var $this PitanjaController */
/* @var $model Pitanja */

$this->breadcrumbs=array(
	'Pitanja'=>array('index'),
	$model->idpitanja,
);

$this->menu=array(
	array('label'=>'List Pitanja', 'url'=>array('index')),
	array('label'=>'Create Pitanja', 'url'=>array('create')),
	array('label'=>'Update Pitanja', 'url'=>array('update', 'id'=>$model->idpitanja)),
	array('label'=>'Delete Pitanja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpitanja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pitanja', 'url'=>array('admin')),
);
?>

<h1>View Pitanja #<?php echo $model->idpitanja; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpitanja',
		'pitanje',
		'predmet_idPredmet',
	),
)); ?>

<br />
        <div class="row buttons">
            <?php
            $predmet=Predmet::model()->findByPk($model->predmet_idPredmet);
            echo CHtml::button('Kreiraj sljedeće pitanje',
                array(
                    'submit'=>array('pitanja/create_Pitanja', 'id'=>$predmet->idPredmet)//array('id'=>$data->idPredmet))
                 
                    // or you can use 'params'=>array('id'=>$id)
                )
            );
            ?>
	 </div>
