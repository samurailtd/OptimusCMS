<?php echo CHtml::errorSummary($form, '<div class="errors">', '</div>'); ?>
<div class="page">
<?php echo CHtml::form(); ?>
<?php echo CHtml::activeLabel($form, 'username'); ?><br />
<?php echo CHtml::activeTextField($form, 'username'); ?><br />
<?php echo CHtml::activeLabel($form, 'password'); ?><br />
<?php echo CHtml::activePasswordField($form, 'password'); ?><br />
<?php echo CHtml::activeLabel($form, 'email'); ?><br />
<?php echo CHtml::activeTextField($form, 'email'); ?><br />
<?php echo CHtml::activeLabelEx($form, 'code'); ?><br />
<?php $this->widget('CCaptcha', array('buttonLabel'=>'<br />[обновить]')); ?><br />
<?php echo CHtml::activeTextField($form, 'code'); ?><br />
<?php echo CHtml::submitButton('Отправить', array('id'=>'submit')); ?>
<?php echo CHtml::endForm(); ?>
</div>

