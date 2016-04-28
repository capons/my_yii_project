<?php
use yii\db\Schema;
use yii\db\Migration;

class m160428_132025_bogmig extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%category}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'parent_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->addForeignKey('fk-category-parent_id-category-id', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'CASCADE');

        $this->createTable('{{%product}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'price' => Schema::TYPE_MONEY,
            'category_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->addForeignKey('fk-product-category_id-category_id', '{{%product}}', 'category_id', '{{%category}}', 'id', 'RESTRICT');

        $this->createTable('{{%users}}', [
            'id' => Schema::TYPE_PK,
            'email' => Schema::TYPE_STRING,
            'name' => Schema::TYPE_TEXT,
            'pass' => Schema::TYPE_TEXT,
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        $this->dropTable('{{%product}}');
        $this->dropTable('{{%users}}');
        //echo "m160428_132025_bogmig cannot be reverted.\n";
        //return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
