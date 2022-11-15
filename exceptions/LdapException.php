<?php

namespace kv4nt\ldap\exceptions;

use yii\base\Exception;


/**
 * Class LdapException
 *
 * @package kv4nt\ldap\exceptions
 * @author kv4nt V.E.
 */
class LdapException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Ldap Exception';
    }
}
