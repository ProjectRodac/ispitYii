<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Pregled učenika', 'url'=>array('index')),
	array('label'=>'Upravljaj učenicima', 'url'=>array('admin')),
);
?>

<h1>Dodaj korisnika</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>