<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Dashboard</h1>
<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div>
<div class="flash-success">This is an example of a success message to show you that things have gone according to plan.</div>
<div class="span-23 showgrid">             
<div class="span-10">
</div>
</div>



