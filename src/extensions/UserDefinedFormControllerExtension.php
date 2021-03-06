<?php

namespace Firesphere\PartialUserforms\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

/**
 * Class \Firesphere\PartialUserforms\Extensions\UserDefinedFormControllerExtension
 *
 * @property \SilverStripe\UserForms\Control\UserDefinedFormController|\Firesphere\PartialUserforms\Extensions\UserDefinedFormControllerExtension $owner
 */
class UserDefinedFormControllerExtension extends Extension
{
    public function onBeforeInit()
    {
        Requirements::javascript('firesphere/partialuserforms:client/dist/main.js');
    }
}
