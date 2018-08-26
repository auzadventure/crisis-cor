<?php 
namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class ContactController extends ActiveController
{
    public $modelClass = 'app\models\Contact';
	
	public $enableCsrfValidation = false;
		
	
	public function actionHello() {
		echo 'hello';
	}

	
}