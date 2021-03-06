<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'idtask'); ?>
		<?php echo $form->textField($model, 'idtask'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Responsável'); ?>
		<?php echo $form->dropDownList($model, 'iduser_fk', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'Todos'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'privacy'); ?>
		<?php echo $form->textField($model, 'privacy', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idtasktype_fk'); ?>
		<?php echo $form->dropDownList($model, 'idtasktype_fk', GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'Todos'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'conclusion_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'conclusion_date',
			'value' => $model->conclusion_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Pesquisar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
