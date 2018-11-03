<?php

/**
 * Request.
 *
 * Handler to output ListTemplate1.
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
 * Handler for creating a ListTemplate1.
 *
 * Class ListTemplate1.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */
class ListTemplate1 extends ListTemplate
{
    /**
     * ListTemplate1 constructor.
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
        $type = 'ListTemplate1';
        parent::__construct($type, $title, $backButtonVisible, $token);
    }
    /**
     * Compiles ListTemplate1 object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $this->hint = null;
        return parent::compile();
    }
}