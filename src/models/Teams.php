<?php

namespace canberkdeniz95\players\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $country
 * @property string|null $league
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country', 'league'], 'string', 'max' => 255],
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
            'country' => 'Country',
            'league' => 'League',
        ];
    }
}
