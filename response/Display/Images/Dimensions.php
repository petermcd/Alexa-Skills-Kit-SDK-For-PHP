<?php

/**
 * Request
 *
 * Handler to manage the request
 *
 * PHP Version 7
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display\Images
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Alexa_Bible\Response\Display\Images;

/**
 * Handler for creating the request object
 *
 * Class Request
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display\Images
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class Dimensions
{
    /**
     * Stores the width of the image.
     *
     * @var int|null
     */
    private $_width = null;
    /**
     * Stores the height of the image.
     *
     * @var null
     */
    private $_height = null;

    /**
     * Constructor setting the width and height of an image.
     *
     * @param int $width  Height of the image.
     * @param int $height Width of the image.
     */
    public function __construct(int $width , int $height)
    {
        $this->_width = $width;
        $this->_height = $height;
    }

    /**
     * Getter for the width of an image.
     *
     * @return int The width of the image.
     */
    public function getWidth():int
    {
        return $this->_width;
    }

    /**
     * Getter for the height of an image.
     *
     * @return int The height of the image.
     */
    public function getHeight():int
    {
        return $this->_height;
    }
}