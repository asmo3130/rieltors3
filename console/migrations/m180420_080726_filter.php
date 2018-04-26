<?php

use yii\db\Migration;

/**
 * Class m180420_080726_filter
 */
class m180420_080726_filter extends Migration
{




    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%filter}}', [
            'id' => $this->primaryKey(),
            'just_photo' => $this->integer(),
            'daily' => $this->integer(),
            'number_of_rooms' => $this->integer(),
            'price_per_month' => $this->integer(),
            'total_area' => $this->integer(),
            'kitchen_area' => $this->integer(),
            'type_of_house' => $this->string(),
            'type_of_heating' => $this->string(),
            'walls' => $this->string(),
            'year_of_construction' => $this->integer(),
            'total_floors' => $this->integer(),
            'not_first' => $this->integer(),
            'not_last' => $this->integer(),
            'onli_first' => $this->integer(),
            'onli_last' => $this->integer(),
            'furniture' => $this->integer(),
            'with_repair' => $this->integer(),
            'without_repair' => $this->integer(),
            'appliances' => $this->integer(),
            'tv' => $this->integer(),
            'close_to_the_stop' => $this->integer(),
            'balcony' => $this->integer(),
            'underground_parking' => $this->integer(),
            'parking_by_the_house' => $this->integer(),
            'storage_cellar' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m180420_080726_filter cannot be reverted.\n";

        return false;
    }

}
