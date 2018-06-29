<?php

/**
 * This is the model base class for the table "tasktype".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Tasktype".
 *
 * Columns in table "tasktype" available as properties of the model,
 * followed by relations of table "tasktype" available as properties of the model.
 *
 * @property integer $idtasktype
 * @property string $create_date
 * @property string $update_date
 * @property string $name
 *
 * @property Task[] $tasks
 */
abstract class BaseTasktype extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tasktype';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Tasktype|Tasktypes', $n);
	}

	public static function representingColumn() {
		return 'create_date';
	}

	public function rules() {
		return array(
			array('idtasktype, create_date, update_date, name', 'required'),
			array('idtasktype', 'numerical', 'integerOnly'=>true),
			array('create_date, update_date, name', 'length', 'max'=>45),
			array('idtasktype, create_date, update_date, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tasks' => array(self::HAS_MANY, 'Task', 'idtasktype_fk'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idtasktype' => Yii::t('app', 'Idtasktype'),
			'create_date' => Yii::t('app', 'Create Date'),
			'update_date' => Yii::t('app', 'Update Date'),
			'name' => Yii::t('app', 'Name'),
			'tasks' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idtasktype', $this->idtasktype);
		$criteria->compare('create_date', $this->create_date, true);
		$criteria->compare('update_date', $this->update_date, true);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}