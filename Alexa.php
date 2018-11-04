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

$alexa = new Response();