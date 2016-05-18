<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Predmeti',
);


?>

<h1>Ispit<?php//$dataProvider->?></h1>
<form name="ispit" id="user-odgovori-form" action="/mojispit/index.php?r=rijesiIspit/create" method="post">    

    
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_ispit',
)); ?>
<div class="row buttons">
	 <?php
         $idIspita = Yii::app()->request->getParam('idIspita');
         echo CHtml::button('Spremi', array('submit' => array('rijesiIspit/createRijesenja','idIspita'=>$idIspita))); 
         
         
         
         ?>
</div>
</form>

</div><!-- form -->