<?php

namespace app\models;

use yii\base\Model;

/**
 * Save users data
 *
 * @author porfirovskiy
 */

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
