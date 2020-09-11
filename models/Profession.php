<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profession".
 *
 * @property int $id
 * @property string $name_profession
 *
 * @property Profiles[] $profiles
 */
class Profession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_profession'], 'required'],
            [['name_profession'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_profession' => 'Name Profession',
        ];
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['profession_id' => 'id']);
    }
}
