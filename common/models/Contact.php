<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Contact model
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 */
class Contact extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contacts}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }
}

