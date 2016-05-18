<?php
/* @var $this PredmetController */
/* @var $data Predmet */
?>

<div class="view">


	<?php echo CHtml::encode($data->naziv); ?>
   
	<br />
        <div class="row buttons">
            <?php 
           // print_r($data);UserRsvp::model()->exists
            //$modelI=  Rezultati::model()->findByAttributes(array('ispit_idispit='=>$data->ispits[0]->idispit,'user_id'=>$data->users[0]->id));
            $modelI=  Rezultati::model()->exists('ispit_idispit = :a AND user_id = :b',
                                array( ':a'=>$data->ispits[0]->idispit, ':b'=>$data->users[0]->id )
                        );  
            echo CHtml::button('Pristupi ispitu',
                    array(
                        'submit'=>array('rijesiIspit/prikaziIspit','idIspita'=>$data->ispits[0]->idispit)//array('id'=>$data->idPredmet))
                        ,'disabled'=>($modelI)?'disabled':false
                    )
                );
           
            ?>
           
	 </div>


</div>