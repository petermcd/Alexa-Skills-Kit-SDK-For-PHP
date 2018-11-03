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
 * Handler for creating a BodyTemplates. Should not be called directly.
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
class BodyTemplate extends Display
{
    // TODO ensure textContent is imported as correct type
    protected $textContent;
    // TODO ensure image is imported as correct type
    protected $image;

    /**
     * BodyTemplate constructor.
     *
     * @param string        $type              Type of template to use.
     * @param string        $title             Title to be displayed for
     *                                         the template.
     * @param bool          $backButtonVisible Show or hide the back button.
     * @param string|null   $token             Token used for sessions.
     * @param ImageSet|null $backgroundImage   Background images to be displayed
     */
    protected function __construct(string $type,
        string $title,
        bool $backButtonVisible = true,
        string $token = null,
        ImageSet $backgroundImage = null
    ) {
        parent::__construct(
            $type,
            $title,
            $backButtonVisible,
            $token,
            $backgroundImage
        );
    }

    /**
     * Compiles BodyTemplate object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile()
    {
        $output = new \stdClass();
        $output->type = $this->type;
        $output->token = $this->token;
        $output->backButton = $this->backButton;
        $output->title = $this->title;
        $output->textContent = $this->textContent;
        $directives = new \stdClass();
        if ($this->hint !== null) {
            $hint = new \stdClass();
            $hint->type = 'Hint';
            $hint->hint = new \stdClass();
            $hint->hint->type = 'PlainText';
            $hint->hint->text = $this->hint;
            $directives = [];
            $directives[] = $hint;
        }
        $output->directives = $directives;
        return $output;
    }
}