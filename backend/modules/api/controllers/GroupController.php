<?php 
namespace app\modules\api\controllers;

use yii\rest\ActiveController;

use app\models\{Group, Groupmember};

class GroupController extends ActiveController
{
    public $modelClass = 'app\models\Group';
	
	public $enableCsrfValidation = false;
		
	

	public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }	

	public function actionIndex() {
		
		$rows = Group::find()->all();
		
		$array = [];
		foreach($rows as $row) {
			$a['name'] = $row->name;
			$a['count'] = GroupMember::countByGroup($row->id);
			array_push($array,$a);
		}
		
		return $this->asJson($array); 
	}
}