<?php

/**
 * BodyTemplate7.
 *
 * Handler to output BodyTemplate7.
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
 * Handler for creating a BodyTemplate7.
 *
 * Class BodyTemplate7.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class BodyTemplate7 extends Display
{
    // TODO add backgroundImage
    protected $backgroundImage;
    // TODO image
    protected $image;

    /**
     * BodyTemplate7 constructor.
     *
     * @param string      $title             Title to be displayed for
     *                                       the template.
     * @param bool        $backButtonVisible Show or hide the back button.
     * @param string|null $token             Token used for sessions.
     */
    public function __construct(string $title,
        bool $backButtonVisible = true,
        string $token = null
    ) {
        $type = 'BodyTemplate7';
        parent::__construct($type, $title, $backButtonVisible, $token);
    }

    /**
     * Compiles BodyTemplate7 object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile()
    {
        // TODO implement
        $output = new \stdClass();
        return $output;
    }
}