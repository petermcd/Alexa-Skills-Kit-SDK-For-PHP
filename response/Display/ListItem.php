<?php

/**
 * Request.
 *
 * Handler to output list items.
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
 * Handler for creating a ListItem. Should not be called directly.
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
class ListItem
{
    private $_token;
    private $_image;
    private $_textContent;

    /**
     * ListItem constructor.
     *
     * @param string $token       Token used for sessions.
     * @param string $image       Image to display for list item.
     * @param string $textContent Text to display as list.
     */
    public function __construct(string $token, string $image, string $textContent)
    {
        $this->_token = $token;
        $this->_image = $image;
        $this->_textContent = $textContent;
    }
    /**
     * Compiles ListItem object ready for output.
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