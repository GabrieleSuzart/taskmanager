<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tasktype-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idtasktype'); ?>
		<?php echo $form->textField($model, 'idtasktype'); ?>
		<?php echo $form->error($model,'idtasktype'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model, 'create_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'create_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model, 'update_date', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'update_date'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tasks')); ?></label>
		<?php echo $form->checkBoxList($model, 'tasks', GxHtml::encodeEx(GxHtml::listDataEx(Task::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->