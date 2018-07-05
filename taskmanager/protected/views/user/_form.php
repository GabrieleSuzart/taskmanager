<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropdownlist($model, 'gender', 
			array(
				'prompt'=>'Selecione uma opção',
				'F' => 'Feminino',
				'M' => 'Masculino'
			)
		); 
		?>
		<?php echo $form->error($model,'gender'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'birth_date',
			'value' => $model->birth_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeMonth' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'birth_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model, 'email', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ddd'); ?>
		<?php echo $form->textField($model, 'ddd', array('maxlength' => 2)); ?>
		<?php echo $form->error($model,'ddd'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fone'); ?>
		<?php echo $form->textField($model, 'fone', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'fone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->