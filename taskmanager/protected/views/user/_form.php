<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropdownlist($model, 'gender', array('M' => 'Masculino', 'F' => 'Feminino')); ?>
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
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'birth_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fone'); ?>
		<?php echo $form->TextField($model, 'fone', array('maxlength' => 11));
		?>
		<?php echo $form->error($model,'fone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tasks')); ?></label>
		<?php echo $form->checkBoxList($model, 'tasks', GxHtml::encodeEx(GxHtml::listDataEx(Task::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->