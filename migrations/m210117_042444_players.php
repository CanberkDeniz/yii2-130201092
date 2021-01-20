<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210117_042444_players
 */
class m210117_042444_players extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    return $this->createTable('players', [
    'id' => Schema::TYPE_PK,
    // $this->primaryKey()
    'name' => Schema::TYPE_STRING,
    'surname' => Schema::TYPE_STRING,
    'age' => Schema::TYPE_INTEGER,
    'team_id' => Schema::TYPE_INTEGER,
    
    ]);
    }
    public function safeDown()
    {
    return $this->dropTable('players');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_042444_players cannot be reverted.\n";

        return false;
    }
    */
}
