<?php

namespace kv4nt\ldap\services;

use yii\base\BaseObject;
use kv4nt\ldap\forms\LoginForm;
use kv4nt\ldap\wrappers\LdapWrapper;


/**
 * Base settings for Auth in LDAP
 *
 * @package kv4nt\ldap\services
 * @author kv4nt V.E.
 */
class LdapAuth extends BaseObject
{

    /**
     * @var string
     */
    public $baseDN = '';

    /**
     * @var string
     */
    public $userDN = '';

    /**
     * @var string
     */
    public $groupDN = '';

    /**
     * @var LdapWrapper
     */
    public $ldap;

    /**
     * @inheritdoc
     */
    public function authenticate(LoginForm $LoginForm)
    {
        return $this->ldap->checkAuth($LoginForm);
    }
}
