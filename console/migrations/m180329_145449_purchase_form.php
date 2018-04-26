<?php

use yii\db\Migration;

/**
 * Class m180329_145449_purchase_form
 */
class m180329_145449_purchase_form extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%area_name}}', [
            'id' => $this->primaryKey(),
            'name_area' => $this->string(255),
        ], $tableOptions);
        $this->createIndex(
            'idx-area_name-author_id',
            'area_name',
            'author_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180329_145449_purchase_form cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_145449_purchase_form cannot be reverted.\n";

        return false;
    }
    */
}
