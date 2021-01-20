<?php

namespace canberkdeniz95\players\models;

use Yii;

/**
 * This is the model class for table "transfer".
 *
 * @property int $id
 * @property int|null $player_id
 * @property int|null $team_id1
 * @property int|null $team_id2
 */
class Transfer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transfer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'team_id1', 'team_id2'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player_id' => 'Player ID',
            'team_id1' => 'Team Id1',
            'team_id2' => 'Team Id2',
        ];
    }
}
