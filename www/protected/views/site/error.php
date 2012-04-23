<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
'Error',
);
?>

<div id="title">Error <?php echo $code; ?></div>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>

