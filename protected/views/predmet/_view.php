<?php
/* @var $this PredmetController */
/* @var $data Predmet */
?>

<div class="view">
<!--
	<b><//?php echo CHtml::encode($data->getAttributeLabel('idPredmet')); ?>:</b>
	<//?php echo CHtml::link(CHtml::encode($data->idPredmet), array('view', 'id'=>$data->idPredmet)); ?>
	<br />

	<b><//?php echo CHtml::encode($data->getAttributeLabel('naziv')); ?>:</b>-->

	<?php echo CHtml::encode($data->naziv); ?>
	<br />
        <div class="row buttons">
            <?php echo CHtml::button('Kreiraj ispit',
                array(
                    'submit'=>array('ispit/create_noviIspit','id'=>$data->idPredmet)//array('id'=>$data->idPredmet))
                 
                    // or you can use 'params'=>array('id'=>$id)
                )
            );
          ?>
            <?php
            echo CHtml::button('Kreiraj pitanja',
                array(
                    'submit'=>array('pitanja/create_Pitanja', 'id'=>$data->idPredmet)//array('id'=>$data->idPredmet))
                 
                    // or you can use 'params'=>array('id'=>$id)
                )
            );
            ?>
	 </div>


</div>