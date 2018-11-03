<?php

/**
 * Request.
 *
 * Handler to output ListTemplate2.
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
class ListTemplate2 extends ListTemplate
{
    /**
     * ListTemplate2 constructor.
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
        $type = 'ListTemplate2';
        parent::__construct($type, $title, $backButtonVisible, $token);
    }
}