<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property int|null $user_id
 * @property string|null $phone
 * @property string|null $subject
 * @property string|null $body
 *
 * @property User $user
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['body'], 'string'],
            [['name', 'email', 'phone', 'subject', 'image'], 'string', 'max' => 50],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'email' => 'Email',
            'user_id' => 'User ID',
            'phone' => 'Phone',
            'subject' => 'Subject',
            'body' => 'Body',
            'image' => 'Картинка',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function upload($type)
    {
        $filename = uniqid();
        $filename = $filename . '.' . $type->extension;
        $type->saveAs('uploads/' . $filename);

        return $filename;
    }
}
