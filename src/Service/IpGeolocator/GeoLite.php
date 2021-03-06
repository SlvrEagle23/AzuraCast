<?php

namespace App\Service\IpGeolocator;

use App\Environment;

class GeoLite extends AbstractIpGeolocator
{
    public static function getReaderShortName(): string
    {
        return 'geolite';
    }

    public static function getBaseDirectory(): string
    {
        $environment = Environment::getInstance();
        return dirname($environment->getBaseDirectory()) . '/geoip';
    }

    public static function getDatabasePath(): string
    {
        return self::getBaseDirectory() . '/GeoLite2-City.mmdb';
    }

    public static function getAttribution(): string
    {
        return __(
            'This product includes GeoLite2 data created by MaxMind, available from %s.',
            '<a href="http://www.maxmind.com">http://www.maxmind.com</a>'
        );
    }
}
