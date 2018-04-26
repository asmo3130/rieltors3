<?php

use yii\db\Migration;

/**
 * Class m180329_165248_testmigrate
 */
class m180329_165248_testmigrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert(
            'area_name', 'name_area' => 'ГАЛИЦЬКИЙ',
                'name_area' => 'Личаківський',
                'name_area' => 'Франківський',
                'name_area' => 'Шевченківський',
                'name_area' => 'Сихівський',
        );
    }
//['ГАЛИЦЬКИЙ', 'Личаківський', 'Франківський', 'Шевченківський', 'Сихівський']

// INSERT INTO small_area (name, area_id) VALUES ('вул. Абхазька', 5);
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180329_165248_testmigrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_165248_testmigrate cannot be reverted.\n";

        return false;
    }
    */
}
