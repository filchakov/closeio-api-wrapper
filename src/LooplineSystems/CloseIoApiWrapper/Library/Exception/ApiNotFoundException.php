<?php
/**
 * Close.io Api Wrapper - LLS Internet GmbH - Loopline Systems
 *
 * @link      https://github.com/loopline-systems/closeio-api-wrapper for the canonical source repository
 * @copyright Copyright (c) 2014 LLS Internet GmbH - Loopline Systems (http://www.loopline-systems.com)
 * @license   https://github.com/loopline-systems/closeio-api-wrapper/blob/master/LICENSE (MIT Licence)
 */

namespace LooplineSystems\CloseIoApiWrapper\Library\Exception;

class ApiNotFoundException extends \Exception
{
    /**
     * @param string $api_name
     */
    public function __construct($api_name)
    {
        parent::__construct('Api of type ' . $api_name . ' not found');
    }
}
