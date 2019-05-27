<?php
/**
 * Keeper
 * @package lib-ip-db
 * @version 0.0.1
 */

namespace LibIpDb\Library;

use LibIpDb\Model\Ipdb;

class Keeper
    implements 
        \LibIpLocator\Iface\Keeper
{

    static function keep(string $finder, string $ip, object $result): void {
        if($finder === 'LibIpDb\\Library\\Finder')
            return;

        $row = [
            'ip'            => $ip,
            'city'          => $result->city,
            'state_name'    => $result->state->name,
            'state_code'    => $result->state->code,
            'country_name'  => $result->country->name,
            'country_code'  => $result->country->code,
            'continent_name'=> $result->continent->name,
            'continent_code'=> $result->continent->code,
            'timezone'      => $result->timezone,
            'expires'       => gmdate('Y-m-d H:i:s', strtotime('+7 days'))
        ];

        Ipdb::create($row);
    }
}