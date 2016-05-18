<?php
/* @var $this PredmetController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Predmeti',
);


?>

<h1>Rezultat Ispita</h1>
    
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_rjesenjaIspita',
)); 
    
?>
<div class="row rjesenja">
    ukupno 
   <?php 
    echo $this->tocni."/".$this->count;
    $model1= new Rezultati;
    $model1->ispit_idispit=$this->idIspita;
    $model1->user_id=Yii::app()->user->id;;
    $model1->brTocnihOdgovora=$this->tocni;
    $model1->save();
   ?>
</div>
