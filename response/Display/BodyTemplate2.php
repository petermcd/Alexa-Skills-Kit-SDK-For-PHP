<?php

/**
 * Request.
 *
 * Handler to output BodyTemplate2.
 *
 * PHP Version 7
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Alexa_Bible\Response\Display;

/**
 * Handler for creating a BodyTemplate2.
 *
 * Class BodyTemplate2.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class BodyTemplate2 extends Display
{
    /**
     * BodyTemplate2 constructor.
     *
     * @param string      $title             Title to be displayed for
     *                                       the template.
     * @param bool        $backButtonVisible Show or hide the back button.
     * @param string|null $token             Token used for sessions.
     */
    public function __construct(
        string $title,
        bool $backButtonVisible = true,
        string $token = null
    ) {
        $type = 'BodyTemplate2';
        parent::__construct($type, $title, $backButtonVisible, $token);
    }
}