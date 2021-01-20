<?php

namespace canberkdeniz95\players\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property int|null $age
 * @property int|null $team_id
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age', 'team_id'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'age' => 'Age',
            'team_id' => 'Team ID',
        ];
    }
}
