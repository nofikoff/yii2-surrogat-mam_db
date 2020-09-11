<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nationality".
 *
 * @property int $id
 * @property string $name_nationality
 *
 * @property Profiles[] $profiles
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nationality';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_nationality'], 'required'],
            [['name_nationality'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_nationality' => 'Name Nationality',
        ];
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['nationality_id' => 'id']);
    }
}
