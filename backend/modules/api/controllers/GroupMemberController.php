<?php 
namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\{GroupMember, Contact};

class GroupMemberController extends ActiveController
{
    public $modelClass = 'app\models\GroupMember';
	
	public $enableCsrfValidation = false;
		
/* 	//unset create
	public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }	
	
	public function actionCreate() {
	
		$req = 
	
		$contactID = 
		
		
	} */
	
	
	
	
	// Get contacts that are in the group 
	public function actionBygroup()
    {
        $id = Yii::$app->request->get('id');
		
		$rows = GroupMember::find()->where(['groupid'=>$id])->all();
		
		$array = [];
		
		foreach ($rows as $row) {
			$aa['id'] = $row->id;
			$aa['name']   = $row->contacts->name;
			$aa['number'] = $row->contacts->number;
			array_push($array,$aa);
		}
		

		return $this->asJson($array);
	}


	// Get contacts not in the group 
	public function actionNotingroup() 
	{
        $id = Yii::$app->request->get('id');
		
		$membersArray = GroupMember::getMembersByGroup(1);		
		

		
		$array = Contact::getNotInArray($membersArray);
		
		return $this->asJson($array);
		
	}
	
	
	
}