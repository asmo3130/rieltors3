<?php

use yii\db\Migration;

/**
 * Class m180403_075442_form_field
 */
class m180403_075442_form_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

//        public $rayon;
//        public $rooms_count;
//        public $street;
//        public $prise;
//        public $total_area;
//        public $living_area;
//        public $kitchen_area;
//        public $type_house;
//        public $type_of_heating;
//        public $walls;
//        public $year_building;
//        public $total_floors;
//        public $description;
//        public $name;
//        public $last_name;
//        public $phone;
//        public $email;
//        public $photo_upload;
//        public $loading_plan;

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%form_fields}}', [
            'id' => $this->primaryKey(),
            'rayon' => $this->integer()->notNull(),
            'street' => $this->integer()->notNull(),
            'price' => $this->string()->notNull(),
            'total_area' => $this->float()->notNull(),
            'living_area' => $this->float()->notNull(),
            'kitchen_area' => $this->float()->notNull(),
            'type_house' => $this->string()->notNull(),
            'type_of_heating' => $this->string()->notNull(),
            'walls' => $this->string()->notNull(),
            'year_building' => $this->integer()->notNull(),
            'total_floors' => $this->integer()->notNull(),
            'description' => $this->string()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'photo_upload' => $this->string()->notNull(),
            'loading_plan' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),

        ], $tableOptions);

        $this->addForeignKey(
            'fk-form_fields-street',
            'form_fields',
            'street',
            'small_area',
            'name',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-form_fields-rayon',
            'form_fields',
            'rayon',
            'area_name',
            'name_area',
            'CASCADE'
        );



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180403_075442_form_field cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180403_075442_form_field cannot be reverted.\n";

        return false;
    }
    */
}
