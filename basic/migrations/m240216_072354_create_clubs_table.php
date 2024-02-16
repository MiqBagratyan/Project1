<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clubs}}`.
 */
class m240216_072354_create_clubs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clubs}}', [
            'club_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'adress' => $this->text(),
            'create_date' => $this->dateTime()->notNull(),
            'create_user_id' => $this->integer(),
            'update_date' => $this->date()->notNull(),
            'update_user_id' => $this->integer(),
            'delete_date' => $this->date()->notNull(),
            'delete_user_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clubs}}');
    }
}
