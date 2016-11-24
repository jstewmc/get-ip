<?php
/**
 * The file for the get-ip service
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetIp;

/**
 * The get-ip service
 *
 * @since  0.1.0
 */
class GetIp
{
    /* !Magic methods */
    
    /**
     * Called when the service is treated like a function
     *
     * @param   string  $ip  the request's ip address
     * @return  string|null
     */
    public function __invoke(string $ip = null)
    {
        // if the ip address does not exist, short-circuit
        if ($ip === null) {
            return null;
        }
        
        // otherwise, filter the ip address
        $ip = filter_var($ip, FILTER_VALIDATE_IP) ?: null;
        
        return $ip;
    }
}
