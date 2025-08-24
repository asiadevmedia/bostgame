<?php

namespace Asiadevmedia\Bostgame;

class Bostgame {
	public static $usernames;
    public static $apiKeys;
    public static $apiBases = 'https://api.bostgame.com';

    /**
     * Init PortalPulsa
     *
     * @param string $usernames
     * 
     * @param string $apiKeys
     *
     * @return void
     */
    public static function initBost($usernames, $apiKeys)
    {
        self::$usernames = $usernames;
        self::$apiKeys = $apiKeys;
    }
}