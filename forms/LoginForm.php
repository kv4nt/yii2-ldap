<?php

namespace kv4nt\ldap\forms;

use Yii;
use yii\base\Model;

/**
 * Class LoginForm
 *
 * @package kv4nt\ldap\forms
 * @author kv4nt V.E.
 */
class LoginForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
        ];
    }

    public function init()
    {
        parent::init();
        $fullUsername = $this->generateUserDn($this->username);
        $this->username = $fullUsername;
    }

    /**
     * Generate User DN with given username value
     *
     * @param string $username
     * @return string
     */
    private function generateUserDn($username)
    {
        return $username . Yii::$app->ldap->userDN;
    }
}
