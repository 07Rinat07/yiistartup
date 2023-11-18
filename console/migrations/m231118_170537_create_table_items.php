<?php

use yii\db\Migration;

/**
 * Class m231118_170537_create_table_items
 */
class m231118_170537_create_table_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE items (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), email VARCHAR(50), user_id INTEGER(11),phone VARCHAR(50), subject VARCHAR(50), body TEXT)');

        $this->execute('ALTER TABLE items ADD CONSTRAINT fk_items_users_key FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('DROP TABLE items');
        echo "m231118_170537_create_table_items cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231118_170537_create_table_items cannot be reverted.\n";

        return false;
    }
    */
}
