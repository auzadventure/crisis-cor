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
}
