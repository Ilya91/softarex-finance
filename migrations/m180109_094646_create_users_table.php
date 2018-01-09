<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m180109_094646_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
	    $this->createTable('{{%users}}', [
		    'id' => $this->primaryKey(),
		    'username' => $this->string()->notNull()->unique(),
		    'auth_key' => $this->string(32)->notNull(),
		    'password_hash' => $this->string()->notNull(),
		    'password_reset_token' => $this->string()->unique(),
		    'email' => $this->string()->notNull()->unique(),

		    'status' => $this->smallInteger()->notNull()->defaultValue(10),
		    'created_at' => $this->integer()->notNull(),
		    'updated_at' => $this->integer()->notNull(),
	    ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}