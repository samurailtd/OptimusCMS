<?php
class SignupController extends CController
{
public function actions()
{
return array(
'captcha'=>array('class'=>'CCaptchaAction')
);
}
public function actionIndex()
{
$form = new User;
print_r($_POST);
if (!empty($_POST['User']))
{
$form->attributes = $_POST['User'];
$form->code = $_POST['User']['code'];
$form->scenario = 'signup';
if ($form->save())
{
Yii::app()->request->redirect('helper');
}
}
$this->render('index', array('form'=>$form));
}
}