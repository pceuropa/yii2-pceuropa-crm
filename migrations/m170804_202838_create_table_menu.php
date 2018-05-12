<?php

use yii\db\Migration;

class m170804_202838_create_table_menu extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%menu}}', [
            'menu_id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'menu' => $this->text()->notNull(),
            'menu_name' => $this->char(255),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }
}
