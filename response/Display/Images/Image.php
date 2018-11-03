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

// TODO Implement some methods to allow the following checks:
/*
 * The templates provide support for either square or rectangular Images.
 * Note the aspect ratio for each template shown in the table.
 */

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
class Image
{
    /**
     * Stores the url for the image.
     *
     * @var string
     */
    private $_url;
    /**
     * Stores the Dimensions class for an image.
     *
     * @var Dimensions
     */
    private $_dimensions = null;

    /**
     * Stores the size string of an image.
     *
     * @var string
     */
    private $_size = null;

    /**
     * Image constructor.
     *
     * @param string          $url        address for where the image is located.
     *                                    This should be publicly accessible.
     * @param dimensions|null $dimensions Dimensions of the image
     * @param string|null     $size       Size string of the image
     *
     * @throws imageException upon image validation issue
     */
    public function __construct(string $url,
        Dimensions $dimensions = null,
        string $size = null
    ) {
        if (!$this->_validateImageURL($url)) {
            throw new ImageException("Image validation error.");
        }
        $this->_url = $url;
        if ($dimensions !== null) {
            $this->_dimensions = $dimensions;
        }
        $this->_setSize($size);
    }

    /**
     * Ensures image is on https endpoint.
     *
     * @param string $url Validates url of image.
     *
     * @return bool
     */
    private function _validateImageURL(string $url):bool
    {
        if (strtolower(substr($url, 0, 5)) !== 'https') {
            // TODO LOGGING Log any error message
            return false;
        }
        return true;
    }

    /**
     * Checks if size is null, if so calculates the size.
     *
     * @param string|null $size Size of the image.
     *
     * @return null
     */
    private function _setSize(string $size = null)
    {
        if ($size === null) {
            $this->_size = $this->calculateSize($this->_dimensions);
            return;
        }
        $this->_size = $size;
        return;
    }

    /**
     * Identifies the size of an image based on the width and height.
     *
     * @param Dimensions $dimensions Dimensions of the image.
     *
     * @return string Test representation of the size of the image.
     *                These are named as Amazon name them.
     */
    public function calculateSize(Dimensions $dimensions): string
    {
        $image_sizes = ["X_SMALL" => ["width" => 480, "height" => 320],
            "SMALL" => ["width" => 720, "height" => 480],
            "MEDIUM" => ["width" => 960, "height" => 640],
            "LARGE" => ["width" => 1200, "height" => 800],
            "X_LARGE" => ["width" => 1920, "height" => 1280],
        ];
        $size_keys = array_keys($image_sizes);
        $width_size = 'X_LARGE';
        $height_size = 'X_LARGE';
        foreach ($image_sizes as $image_size=>$dimension) {
            if ($dimensions->getWidth() < $dimensions->getWidth()) {
                $width_size = array_search($image_size, $size_keys);
            }
            if ($dimensions->getHeight() < $dimensions->getHeight()) {
                $height_size = array_search($image_size, $size_keys);
            }
        }
        $image_size = $height_size > $width_size ?
                     $size_keys[$height_size] : $size_keys[$width_size];
        return $image_size;
    }

    /**
     * Size getter.
     *
     * @return string size name
     */
    public function getSize():string
    {
        return $this->_size;
    }

    /**
     * Compiles Image object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $output = new \stdClass();
        $output->url = $this->_url;
        $output->size = $this->_size;
        if ($this->_dimensions !== null) {
            $output->widthPxels = $this->_dimensions->getWidth();
            $output->heightPxels = $this->_dimensions->getHeight();
        }
        return $output;
    }
}