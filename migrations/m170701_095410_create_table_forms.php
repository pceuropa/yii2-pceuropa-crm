<?php

use yii\db\Migration;

class m170701_095410_create_table_forms extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%forms}}', [
            'form_id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'body' => $this->text()->notNull(),
            'title' => $this->string(255)->notNull(),
            'author' => $this->integer(11),
            'date_start' => $this->date(),
            'date_end' => $this->dateTime(),
            'maximum' => $this->integer(11)->comment('answers'),
            'meta_title' => $this->string(255),
            'url' => $this->string(255)->notNull(),
            'response' => $this->text()->comment('by email'),
            'answer' => $this->integer(11)->notNull()->defaultValue('0'),
            'action' => $this->string(255),
            'method' => $this->string(4)->defaultValue('post'),
            'language' => $this->string(11)->defaultValue('en'),
            'class' => $this->string(255)->notNull()->comment('html'),
            'id' => $this->string(255)->notNull()->comment('html'),
        ], $tableOptions);

        $this->createIndex('url', '{{%forms}}', 'url', true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%forms}}');
    }
}
