<?php

/**
 * Initial class to call.
 *
 * PHP Version 7
 *
 * @category   Tools
 * @package    Alexa
 * @subpackage Tools
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Alexa_Bible;

use Alexa_Bible\Response\Response;

require 'vendor/autoload.php';

/**
 * The class that does all the work.
 *
 * Class Alexa
 *
 * @category   Tools
 * @package    Alexa
 * @subpackage Tools
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class Alexa
{
    /**
     * Alexa constructor.
     */
    public function __construct()
    {
        echo 'hello';
    }
}

$b = new Response();

function ipCIDRCheck ($IP, $CIDR) {
    list ($net, $mask) = \explode("/", $CIDR);

    $ip_net = ip2long($net);

    $ip_mask = ~((1 << (32 - $mask)) - 1);

    $ip_ip = ip2long($IP);
echo $ip_ip;
    $ip_ip_net = $ip_ip & $ip_mask;

    return ($ip_ip_net == $ip_net);
}
echo ipCIDRCheck("192.168.1.23", "192.168.1.0/24");
echo "\n\r";
echo ipCIDRCheck("192.168.1.25", "192.168.1.0/24");