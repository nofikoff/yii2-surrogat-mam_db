<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string $name_status
 *
 * @property Profiles[] $profiles
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_status'], 'required'],
            [['name_status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_status' => 'Name Status',
        ];
    }

    /**
     * Gets query for [[Profiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profiles::className(), ['status_id' => 'id']);
    }
}
