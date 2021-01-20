<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210117_185514_transfer
 */
class m210117_185514_transfer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    return $this->createTable('transfer', [
    'id' => Schema::TYPE_PK,
    'player_id' => Schema::TYPE_INTEGER,
    'team_id1' => Schema::TYPE_INTEGER,
    'team_id2' => Schema::TYPE_INTEGER,
    
    ]);
    }
    public function safeDown()
    {
    return $this->dropTable('transfer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_185514_transfer cannot be reverted.\n";

        return false;
    }
    */
}
