<?php
namespace app\models;
use yii\base\Model;
class UserFotm extends Model
{
	public $name;
	public $email;

public fucntion rules()
{
	return [['name','email'],'required'],
	 ['email','email'],
	 ];
}


}