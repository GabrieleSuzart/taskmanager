<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'iduser'); ?>
		<?php echo $form->textField($model, 'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'create_date',
			'value' => $model->create_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'update_date',
			'value' => $model->update_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'gender'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'birth_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'birth_date',
			'value' => $model->birth_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fone'); ?>
		<?php echo $form->textField($model, 'fone', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
