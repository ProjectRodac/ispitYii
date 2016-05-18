<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Dodaj korisnika', 'url'=>array('create')),
	array('label'=>'Upravljaj korisnicima', 'url'=>array('admin')),
        array('label'=>'Pregledaj učenike', 'url'=>array('ViewUcenika')),
         array('label'=>'Pregledaj profesora', 'url'=>array('ViewProfesora')),
);
?>

<h1>Korisnici</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
