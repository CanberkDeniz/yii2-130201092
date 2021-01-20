<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210117_042432_teams
 */
class m210117_042432_teams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
{
return $this->createTable('teams', [
'id' => Schema::TYPE_PK,
// $this->primaryKey()
'name' => Schema::TYPE_STRING,
'country' => Schema::TYPE_STRING,
'league' => Schema::TYPE_STRING,

]);
}
public function safeDown()
{
return $this->dropTable('teams');
}

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_042432_teams cannot be reverted.\n";

        return false;
    }
    */
}
