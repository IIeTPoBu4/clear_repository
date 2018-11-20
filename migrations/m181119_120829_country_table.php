<?php

use yii\db\Migration;

/**
 * Class m181119_120829_country_table
 */
class m181119_120829_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'code' => $this->primaryKey()->notNull(),
            'name' => $this->string(52)->notNull()->defaultValue(1),
            'population' => $this->integer(11)->notNull(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_120829_country_table cannot be reverted.\n";

        return false;
    }
    */
}
