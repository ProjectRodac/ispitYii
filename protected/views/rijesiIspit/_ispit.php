<?php
/* @var $this PredmetController */
/* @var $data Predmet */

?>

<div class="view">

    <span class="naslovPitanja">
        <?php
          echo  $this->count++;
          echo '. ';
          echo CHtml::encode($data->pitanje);
          
         ?>
    </span>
	   
	<br />
        <div class="row odgovori">
            <?php 
            $odgovori=Odgovor::model()->findAll(
                    array('condition'=>'pitanja_idpitanja='.$data->idpitanja)
                );
            foreach($odgovori as $odgovor) 
                { 
                echo "<input type='radio' name=".$data->idpitanja." value=".$odgovor['idOdgovor']." > ".$odgovor['odgovor'];
                echo"<br>";
                }
        ?>
          
	 </div>


</div>