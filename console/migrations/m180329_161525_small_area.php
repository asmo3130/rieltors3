<?php

use yii\db\Migration;

/**
 * Class m180329_161525_small_area
 */
class m180329_161525_small_area extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%small_area}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'area_id' => $this->integer()->notNull(),

        ], $tableOptions);
        $this->addForeignKey(
            'fk-area_name-author_id',
            'small_area',
            'area_id',
            'area_name',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180329_161525_small_area cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_161525_small_area cannot be reverted.\n";

        return false;
    }
    */
}
