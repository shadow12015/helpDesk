<?php

namespace app\controllers;

use yii\web\Controller;



class AuthController extends Controller 
{
	public function actionIndex()
    {
		return $this->render('index',
            ['title' => "тест"]
        );
	}
	
}
