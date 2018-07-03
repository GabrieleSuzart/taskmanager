<?php

Yii::import('application.models._base.BaseUser');

class User extends BaseUser
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	// public function validatePassword($password)
    // {
    //     return CPasswordHelper::verifyPassword($password,$this->password);
    // }
 
    // public function hashPassword($password)
    // {
    //     return CPasswordHelper::hashPassword($password);
    // }
}