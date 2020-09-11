<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property string $name_hiden
 * @property string $comment_hidden
 * @property int $experience
 * @property int|null $weight
 * @property int|null $height
 * @property string|null $birthday
 * @property int|null $bloodtype
 * @property int $status_id
 * @property int $education_id
 * @property int $nationality_id
 * @property int $profession_id
 *
 * @property Status $status
 * @property Education $education
 * @property Nationality $nationality
 * @property Profession $profession
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_hiden', 'comment_hidden', 'experience', 'status_id', 'education_id', 'nationality_id', 'profession_id'], 'required'],
            [['experience', 'weight', 'height', 'bloodtype', 'status_id', 'education_id', 'nationality_id', 'profession_id'], 'integer'],
            [['birthday'], 'safe'],
            [['name_hiden', 'comment_hidden'], 'string', 'max' => 100],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['education_id'], 'exist', 'skipOnError' => true, 'targetClass' => Education::className(), 'targetAttribute' => ['education_id' => 'id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nationality::className(), 'targetAttribute' => ['nationality_id' => 'id']],
            [['profession_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profession::className(), 'targetAttribute' => ['profession_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name_hiden' => 'Name (служебное)',
            'comment_hidden' => 'Comment (служебный)',
            'experience' => 'Опыт',
            'weight' => 'Вес',
            'height' => 'Рост',
            'birthday' => 'Возраст',
            'bloodtype' => 'Группа крови',
            'status_id' => 'Статус',
            'education_id' => 'Образование',
            'nationality_id' => 'Национальность',
            'profession_id' => 'Профессия',
        ];
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * Gets query for [[Education]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'education_id']);
    }

    /**
     * Gets query for [[Nationality]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['id' => 'nationality_id']);
    }

    /**
     * Gets query for [[Profession]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfession()
    {
        return $this->hasOne(Profession::className(), ['id' => 'profession_id']);
    }
}
