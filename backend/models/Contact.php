<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $number
 * @property string $name
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'name' => 'Name',
        ];
    }
	
	public static function getNotInArray($ingroup_array) {
		
		$rows = Contact::find()
							->where(['NOT IN','id',$ingroup_array])
							->all();
						
		$array = [];
		foreach ($rows as $row) {
			$aa['contactID'] = $row->id;
			$aa['name'] = $row->name;
			$aa['number'] = $row->number;
			array_push($array,$aa);
		}
		return $array;
	}	
		
		
}
