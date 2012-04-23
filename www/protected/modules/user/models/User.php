<?php

/**
* This is the model class for table "users".
*
* The followings are the available columns in table 'users':
* @property string $id
* @property string $email
* @property string $username
* @property string $password
* @property string $logins
* @property string $last_login
* @property integer $data_reg
* @property integer $last_action
* @property string $where
* @property string $status
*/
class User extends CActiveRecord
{
public $code;
/**
* Returns the static model of the specified AR class.
* @param string $className active record class name.
* @return User the static model class
*/
public static function model($className=__CLASS__)
{
return parent::model($className);
}

/**
* @return string the associated database table name
*/
public function tableName()
{
return 'users';
}

/**
* @return array validation rules for model attributes.
*/
public function rules()
{
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
return array(
array('username, password', 'required'),
array('email', 'length', 'max'=>254, 'on'=>'signup'),
array('username', 'length', 'max'=>32, 'on'=>'signup'),
array('password', 'length', 'max'=>64, 'on'=>'signup'),
array('password', 'authenticate', 'on'=>'login'),array('code', 'captcha', 'on'=>'signup'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
array('id, email, username, password, logins, last_login, data_reg, last_action, where, status', 'safe', 'on'=>'search'),
);
}

/**
* @return array relational rules.
*/
public function relations()
{
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
return array(
);
}

/**
* @return array customized attribute labels (name=>label)
*/
public function attributeLabels()
{
return array(
'id' => 'ID',
'email' => 'Эл. Почта',
'username' => 'Псевдоним',
'password' => 'Пароль',
'logins' => 'Logins',
'last_login' => 'Last Login',
'data_reg' => 'Data Reg',
'last_action' => 'Last Action',
'where' => 'Where',
'status' => 'Status',
'code' => 'Проверочный код',
);
}

/**
* Retrieves a list of models based on the current search/filter conditions.
* @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
*/
public function search()
{
// Warning: Please modify the following code to remove attributes that
// should not be searched.

$criteria=new CDbCriteria;

$criteria->compare('id',$this->id,true);
$criteria->compare('email',$this->email,true);
$criteria->compare('username',$this->username,true);
$criteria->compare('password',$this->password,true);
$criteria->compare('logins',$this->logins,true);
$criteria->compare('last_login',$this->last_login,true);
$criteria->compare('data_reg',$this->data_reg);
$criteria->compare('last_action',$this->last_action);
$criteria->compare('where',$this->where,true);
$criteria->compare('status',$this->status,true);

return new CActiveDataProvider($this, array(
'criteria'=>$criteria,
));
}
public function beforeSave()
{
if (parent::beforeSave())
{
if ($this->isNewRecord)
{
$this->data_reg = time();
$this->password = md5($this->password);
}else{
$this->last_action = time();
}
}
}

public function authenticate($attribute, $params){
if (!$this->hasErrors()){
$identity = new UserIdentity($this->username, md5($this->password));
$identity->authenticate();
switch($identity->errorCode){
case UserIdentity::ERROR_NONE:
Yii::app()->user->login($identity, 90000);
break;
case UserIdentity::ERROR_USERNAME_INVALID:
$this->addError('username', 'Пользователя с таким псевдонимом незарегистрирован');
break;
case UserIdentity::ERROR_PASSWORD_INVALID:
$this->addError('password', 'Пароль введен неверно');
break;
}
}
}
}

