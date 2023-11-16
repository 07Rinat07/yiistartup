<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m231116_170512_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE contacts (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), email VARCHAR(50), subject VARCHAR(50), body TEXT )');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute('DROP TABLE contacts');
    }
}
