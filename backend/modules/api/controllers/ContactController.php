<?php 
namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class ContactController extends ActiveController
{
    public $modelClass = 'app\models\Contact';
	
	public $enableCsrfValidation = false;
	
	public function behaviors() {
		return array_merge(parent::behaviors(), [

			// For cross-domain AJAX request
			'corsFilter'  => [
				'class' => \yii\filters\Cors::className(),
				'cors'  => [
					// restrict access to domains:
					'Origin'                           => ["*"],
					'Access-Control-Request-Method'    => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
					'Access-Control-Request-Headers' => ['*'],
					'Access-Control-Allow-Credentials' => true,
					'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
				],
			],

		]);
	}

	
	


	
}