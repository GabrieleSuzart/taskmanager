<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'Código'); ?>
		<?php echo $form->textField($model, 'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Nome'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Gênero'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nascimento'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'birth_date',
			'value' => $model->birth_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeMonth' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ddd'); ?>
		<?php echo $form->textField($model, 'ddd', array('maxlength' => 4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'telefone'); ?>
		<?php echo $form->textField($model, 'fone', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'login'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Pesquisar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
