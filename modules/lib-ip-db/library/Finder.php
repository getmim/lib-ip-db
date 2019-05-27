<?php
/**
 * Finder
 * @package lib-ip-db
 * @version 0.0.1
 */

namespace LibIpDb\Library;

use LibIpDb\Model\Ipdb;

class Finder
    implements 
        \LibIpLocator\Iface\Finder
{

    static function find(string $ip): ?object {
        $result = Ipdb::getOne(['ip'=>$ip]);
        if(!$result)
            return null;

        $expires = strtotime($result->expires . ' UTC');
        if($expires < time()){
            Ipdb::remove(['id'=>$result->id]);
            return null;
        }

        return (object)[
            'city' => $result->city,
            'state' => (object)[
                'name' => $result->state_name,
                'code' => $result->state_code
            ],
            'country' => (object)[
                'name' => $result->country_name,
                'code' => $result->country_code
            ],
            'continent' => (object)[
                'name' => $result->continent_name,
                'code' => $result->continent_code
            ],
            'timezone' => $result->timezone
        ];
    }
}