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
 * @subpackage Response\Display\Text
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Alexa_Bible\Response\Display\Text;

/**
 * Handler for creating the request object
 *
 * Class Request
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display\Text
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */

class TextContent
{
    /**
     * Store from primary Text to be displayed.
     *
     * @var text
     */
    private $_primary;
    /**
     * Store from secondary Text to be displayed.
     *
     * @var text|null
     */
    private $_secondary = null;
    /**
     * Store from tertiary Text to be displayed.
     *
     * @var text|null
     */
    private $_tertiary = null;

    /**
     * TextContent constructor.
     *
     * @param Text      $primary   Primary Text.
     * @param Text|null $secondary Secondary Text.
     * @param Text|null $tertiary  Tertiary Text.
     */
    public function __construct(Text $primary,
        Text $secondary = null,
        Text $tertiary = null
    ) {
        $this->_primary = $primary;
        if ($secondary !== null) {
            $this->_secondary = $secondary;
        }
        if ($tertiary !== null) {
            $this->_tertiary = $tertiary;
        }
    }

    /**
     * Compiles TextContent object ready for output
     *
     * Function compile
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $output = new \stdClass();
        $output->primaryText = $this->_primary->compile();

        if ($this->_secondary !== null) {
            $output->secondaryText = $this->_secondary->compile();
        }
        if ($this->_tertiary !== null) {
            $output->tertiaryText = $this->_tertiary->compile();
        }
        return $output;
    }
}