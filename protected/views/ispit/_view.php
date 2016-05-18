<?php
/* @var $this IspitController */
/* @var $data Ispit */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('naziv_ispita')); ?>:</b>
	<?php echo CHtml::encode($data->naziv_ispita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opis_ispita')); ?>:</b>
	<?php echo CHtml::encode($data->opis_ispita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('predmet_idPredmet')); ?>:</b>
	<?php echo CHtml::encode($data->predmet_idPredmet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objavljen')); ?>:</b>
	<?php echo CHtml::encode($data->objavljen); ?>
	<br />
        
        <div class="row buttons">
            <?php echo CHtml::button('Pregledaj rezultat učenika',
                array(
                    'submit'=>array('rezultati/index','idIspita'=>$data->idispit)//array('id'=>$data->idPredmet))
                 
                    // or you can use 'params'=>array('id'=>$id)
                )
            );
          ?>

</div>
        </div>