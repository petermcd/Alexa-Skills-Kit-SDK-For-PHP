<?php

/**
 * Tools
 *
 * Handler to manage the request
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

namespace Alexa_Bible\Tools;

/**
 * Re-sizes an image to the recommended sie for a given template.
 *
 * Class ImageResize
 *
 * @category   Tools
 * @package    Alexa
 * @subpackage Tools
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class ImageResize
{
    /**
     * Save To is the desired folder, if null then saves to tmp.
     *
     * ImageResize constructor.
     *
     * @param string      $image   The path and file to the image requiring re-sized.
     * @param string|null $save_to Directory to save the re-sized image. Temp if not
     *                             set.
     *
     * @throws \Exception
     */
    public function __construct(string $image, string $save_to = null)
    {
        if (!is_file($image) || !is_readable($image)) {
            throw new \Exception('The file is not readable');
        }
        if ($save_to !== null && is_dir($save_to) && is_writable($save_to)) {

        } elseif ($save_to !== null) {
            // TODO implement
        } else {
            throw new \Exception('I am unable to write to the desired location');
        }
    }

    /**
     * Re-sizes the image
     *
     * @param string $basename The name of the new file
     * @param string $template ?
     *
     * @return array
     */
    public function resize(string $basename, string $template): array
    {
        // TODO implement
        return [];
    }
}