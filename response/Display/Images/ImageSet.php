<?php

/**
 * Request.
 *
 * Handler to manage the request.
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
class ImageSet
{
    /**
     * Stores an array if Image objects.
     *
     * @var array
     */
    private $_images = [];
    /**
     * Stores the description
     *
     * @var string
     */
    private $_description = "";

    /**
     * ImageSet constructor.
     *
     * @param string $description Sets the description for the image set.
     */
    public function __construct(string $description)
    {
        $this->_description = $description;
    }

    /**
     * Add Images to the imageSet, only 1 image per size should be added
     * otherwise only the most recent will survive.
     *
     * @param Image ...$images Array of Image objects for output.
     *
     * @return null
     */
    public function addImages(Image ...$images)
    {
        foreach ($images as $image) {
            $image_size = $image->getSize();
            $this->_images[$image_size] = $image;
        }
        return;
    }

    /**
     * Compiles ImageSet object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $output = new \stdClass();
        $images = new \stdClass();
        $images->contentDescription = $this->_description;
        $images->sources = [];
        foreach ($this->_images as $image) {
            $images->sources[] = $image->compile();
        }
        $output->image = $images;
        return $output;
    }
}