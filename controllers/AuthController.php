<?php

namespace app\controllers;

use yii\web\Controller;



class AuthController extends Controller 
{
	public $layout = 'test';
	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
}
