<?php echo CHtml::errorSummary($form, '<div class="errors">', '</div>'); ?>
<div class="page">
<?php echo CHtml::form(); ?>
<?php echo CHtml::activeLabelEx($form, 'username'); ?><br />
<?php echo CHtml::activeTextField($form, 'username'); ?><br />
<?php echo CHtml::activeLabelEx($form, 'password'); ?><br />
<?php echo CHtml::activePasswordField($form, 'password'); ?><br />
<?php echo CHtml::submitButton('Отправить', array('id'=>'submit')); ?>
<?php echo CHtml::endForm(); ?>
</div>