<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $name_education
 *
 * @property Profiles[] $profiles
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_education'], 'required'],
            [['name_education'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_education' => 'Name Education',
        ];
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['education_id' => 'id']);
    }
}
