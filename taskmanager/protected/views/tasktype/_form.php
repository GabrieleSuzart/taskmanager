<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tasktype-form',
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

<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->