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
            /*$odgovori=Odgovor::model()->findAll(
                    array('condition'=>'pitanja_idpitanja='.$data->idpitanja)
                );
             * */
            $this->idIspita= $data['ispits'][0]->idispit;
            $odgovori=$data['odgovors'];
            //print_r($odgovori);
            foreach($odgovori as $odgovor) 
                { 
               if(!empty ($odgovor['users']) && $odgovor['tocan']){
                   $this->tocni++;
                echo "<input type='radio' name=".$data->idpitanja." value=".$odgovor['idOdgovor']." checked> <strong>".$odgovor['odgovor']."</strong>  točan";
                echo"<br>";
               }else if(!empty ($odgovor['users']) && !$odgovor['tocan']) {
                   // $this->tocni--;
                  echo "<input type='radio' name=".$data->idpitanja." value=".$odgovor['idOdgovor']." checked> <strong>".$odgovor['odgovor']."</strong>"; 
                   echo"<br>";
               }else if(empty ($odgovor['users']) && $odgovor['tocan']){
                   echo "<input type='radio' name=".$data->idpitanja." value=".$odgovor['idOdgovor']." disabled> ".$odgovor['odgovor']." točan";            
                   echo"<br>";
               }else{
                   echo "<input type='radio' name=".$data->idpitanja." value=".$odgovor['idOdgovor']." disabled> ".$odgovor['odgovor'];            
                   echo"<br>";
               }
                
                }
        ?>
          
	 </div>

<?php 
?>
</div>