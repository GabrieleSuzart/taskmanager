<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'task-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 130)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Responsável'.'<span class="required"> *</span>'); ?>
		<?php echo $form->dropDownList($model, 'iduser_fk',
			array(
				'prompt'=>'Selecione uma opção',
				GxHtml::listDataEx(User::model()->findAllAttributes(null, true))
			) 
		)?>
		<?php echo $form->error($model,'iduser_fk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'privacy'); ?>
		<?php echo $form->dropdownlist($model, 'status', 
			array(
				'prompt'=>'Selecione uma opção',
				0 => 'Privado',
				1 => 'Público'
			)
		); 
		?>		<?php echo $form->error($model,'privacy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idtasktype_fk'); ?>
		<?php echo $form->dropDownList($model, 'idtasktype_fk', 
		array(
			'prompt'=>'Selecione uma opção',
			GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true))
		)
		);?>
		<?php echo $form->error($model,'idtasktype_fk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropdownlist($model, 'status', 
			array(
				'prompt'=>'Selecione uma opção',
				0 => 'Aberta',
				1 => 'Em andamento',
				2 => 'Concluída'
			)
		); 
		?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<!-- <?php echo $form->labelEx($model,'conclusion_date'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'conclusion_date',
			'value' => $model->conclusion_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'dd-mm-yy',
				),
			));
; ?> -->
		<?php echo $form->error($model,'conclusion_date'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->