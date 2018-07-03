<?php

use yii\db\Migration;

/**
 * Class m180702_140605_create_table_auth
 */
class m180702_140605_create_table_auth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('auth', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk_auth-user_id-user_id', 'auth', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180702_140605_create_table_auth cannot be reverted.\n";
        
        $this->dropForeignKey('fk_auth_user_id_user','auth');
        
        $this->dropTable('auth');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180702_140605_create_table_auth cannot be reverted.\n";

        return false;
    }
    */
}
