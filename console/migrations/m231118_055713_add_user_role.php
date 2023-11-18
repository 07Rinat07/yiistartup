<?php

use yii\db\Migration;

/**
 * Class m231118_055713_add_user_role
 */
class m231118_055713_add_user_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE `user` ADD `role` INT(11) NOT NULL DEFAULT "10" AFTER `verification_token`');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('ALTER TABLE `user` DROP COLUMN `role`');
        echo "m231118_055713_add_user_role cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231118_055713_add_user_role cannot be reverted.\n";

        return false;
    }
    */
}
