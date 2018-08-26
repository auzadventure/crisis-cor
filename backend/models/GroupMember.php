<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "group_members".
 *
 * @property int $id
 * @property int $groupID
 * @property int $contactID
 */
class GroupMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupID', 'contactID'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'groupID' => 'Group ID',
            'contactID' => 'Contact ID',
        ];
    }
	
	public static function getMembersByGroup($groupID) {
		
		$rows = GroupMember::find()->where(['groupID'=>$groupID])->all();
		
		$array = [];
		foreach ($rows as $row) {
			array_push($array,$row->contactID);
		}
		return $array;
		
	}
	
	
	public static function countByGroup($groupID) {
		
		$result = GroupMember::find()->where(['groupID'=>$groupID])->count();
		return $result;
	}
	
	
    public function getContacts()
    {
        return $this->hasOne(Contact::className(), ['id' => 'contactID']);
    }	
}
