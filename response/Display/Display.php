<?php

/**
 * Request.
 *
 * Handler to output BodyTemplate.
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
 * Handler for creating a Display. Should not be called directly.
 *
 * Class Display.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class Display
{
    protected $type;
    protected $title;
    protected $token = null;
    protected $backButton = 'HIDDEN';
    protected $hint = null;
    protected $backgroundImage = null;

    /**
     * Display constructor.
     *
     * @param string        $type              Type of template to use.
     * @param string        $title             Title to be displayed for
     *                                         the template.
     * @param bool          $backButtonVisible Show or hide the back button.
     * @param string|null   $token             Token used for sessions.
     * @param ImageSet|null $backgroundImage   Background images to be displayed
     */
    protected function __construct(
        string $type,
        string $title,
        bool $backButtonVisible = true,
        string $token = null,
        ImageSet $backgroundImage = null
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->_setBackButton($backButtonVisible);
        if ($token !== null) {
            $this->token = $token;
        }
        if ($backgroundImage !== null) {
            $this->backgroundImage = $backgroundImage;
        }
    }

    /**
     * Setter for backButtonVisible.
     *
     * @param bool $backButtonVisible Boolean value representing
     *                                if the back button should be visible.
     *
     * @return null
     */
    private function _setBackButton(bool $backButtonVisible)
    {
        if ($backButtonVisible) {
            $this->backButton = 'VISIBLE';
            return;
        }
        $this->backButton = 'HIDDEN';
        return;
    }

    /**
     * Setter for adding a hint to the output.
     *
     * @param string $hint String representing the hint.
     *
     * @return null
     */
    public function addHint(string $hint)
    {
        $this->hint = $hint;
        return;
    }
}