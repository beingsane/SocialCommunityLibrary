<?php
/**
 * @package         Socialcommunity\Profile\Command\
 * @subpackage      Gateway
 * @author          Todor Iliev
 * @copyright       Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license         GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace Socialcommunity\Profile\Command\Gateway;

/**
 * Contract between database drivers and gateway objects.
 *
 * @package         Socialcommunity\Profile\Command
 * @subpackage      Gateway
 */
interface CreateProfileGateway
{
    /**
     * Create a profile.
     *
     * @param int $userId
     * @param string $name
     * @param string $alias
     */
    public function create($userId, $name, $alias);
}
