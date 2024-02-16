<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m240216_080007_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'client_id' => $this->primaryKey(),
            'user_name' => $this->string()->notNull(),
            'user_lastname' => $this->string()->notNull(),
            'user_middle_name' => $this->string()->notNull(),
            'gender' => "ENUM('male', 'female')",
            'birthday' => $this->dateTime()->notNull(),
            'club_id' => $this->integer(),
            'create_date' => $this->dateTime()->notNull(),
            'create_user_id' => $this->integer(),
            'update_date' => $this->dateTime()->notNull(),
            'update_user_id' => $this->integer(),
            'delete_date' => $this->dateTime()->notNull(),
            'delete_user_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
