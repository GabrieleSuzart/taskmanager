<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'task-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'título'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'responsável'); ?>
		<?php echo $form->dropDownList($model, 'iduser_fk', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'iduser_fk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'privacidade'); ?>
		<?php echo $form->dropdownlist($model, 'privacy', array('0' => 'Privado', '1' => 'Público')); ?>
		<?php echo $form->error($model,'privacy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descrição'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo de tarefa'); ?>
		<?php echo $form->dropDownList($model, 'idtasktype_fk', GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idtasktype_fk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropdownlist($model, 'status', array('0' => 'Aberta', '1' => 'Em andamento', '2' => 'Concluída')); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		
		<?php echo $form->error($model,'conclusion_date'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->