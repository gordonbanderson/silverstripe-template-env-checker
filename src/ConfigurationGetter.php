<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 14/09/18
 * Time: 11:52
 */

namespace Suilven\Env;

use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Extension;

class ConfigurationGetter extends Extension
{
    public function ConfigValue($classname, $propertyName)
    {
        echo '**** Called config method ****';
        return Config::inst()->get($classname, $propertyName);
    }
}
