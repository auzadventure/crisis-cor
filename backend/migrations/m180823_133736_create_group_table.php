<?php

use yii\db\Migration;

/**
 * Handles the creation of table `group`.
 */
class m180823_133736_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('group', [
            'id' => $this->primaryKey(),
			'name' => $this->string(255),
        ]);
		
        $this->createTable('group_members', [
            'id' => $this->primaryKey(),
			'groupID' => $this->integer(),
			'contactID'=> $this->integer(),
        ]);		
		
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('group');
		$this->dropTable('group_members');
    }			



}
