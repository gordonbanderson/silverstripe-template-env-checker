<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 14/09/18
 * Time: 11:52
 */

namespace Suilven\Env;

use SilverStripe\Control\Director;
use SilverStripe\Core\Extension;

class TemplateEnvironmentChecker extends Extension
{
    public function IsDev() {
        return Director::isDev();
    }

    public function IsLive() {
        return Director::isLive();
    }

    public function IsTest() {
        return Director::isTest();
    }
}
