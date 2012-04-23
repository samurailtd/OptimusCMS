<?php
class LoginController extends CController
{
public function actionIndex(){
$form = new User;
if (!Yii::app()->user->isGuest){
Yii::app()->request->redirect('/');
}else{
if (!empty($_POST['User']))
{
$form->attributes = $_POST['User'];
$form->scenario = 'login';
if ($form->validate())
{
Yii::app()->request->redirect('helper');
}
}
$this->render('index', array('form'=>$form));
}
}
}





