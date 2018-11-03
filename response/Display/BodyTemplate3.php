<?php

/**
 * Request.
 *
 * Handler to output BodyTemplate3.
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

use Alexa_Bible\Response\Display\Images\ImageSet;

/**
 * Handler for creating a BodyTemplate3.
 *
 * Class BodyTemplate3.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class BodyTemplate3 extends BodyTemplate
{
    /**
     * BodyTemplate3 constructor.
     *
     * @param string        $title             Title to be displayed for
     *                                         the template.
     * @param bool          $backButtonVisible Show or hide the back button.
     * @param string|null   $token             Token used for sessions.
     * @param ImageSet|null $backgroundImage   Background images to be displayed
     */
    public function __construct(string $title,
        bool $backButtonVisible = true,
        string $token = null,
        ImageSet $backgroundImage = null
    ) {
        $type = 'BodyTemplate3';
        parent::__construct(
            $type,
            $title,
            $backButtonVisible,
            $token,
            $backgroundImage
        );
    }

    /**
     * Compiles BodyTemplate3 object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile()
    {
        $this->hint = null;
        return parent::compile();
    }
}
