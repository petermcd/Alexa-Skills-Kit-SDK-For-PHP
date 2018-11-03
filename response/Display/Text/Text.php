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
 * @subpackage Response\Display\Text
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Alexa_Bible\Response\Display\Text;

/**
 * Handler for creating the text output.
 *
 * Class Text.
 *
 * @category   Response
 * @package    Alexa
 * @subpackage Response\Display\Text
 * @author     Peter McDonald <tutorials@alexabible.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @link       https://alexabible.com
 */

class Text
{
    /**
     * Store for the Text type.
     *
     * @var string
     */
    private $_type = 'PlainText';
    /**
     * Store for the Text to be output.
     *
     * @var string
     */
    private $_text = '';

    /**
     * Text constructor.
     *
     * @param string $text Text that is to be output to screen
     * @param string $type How the Text should be output (RichText|PlainText)
     */
    public function __construct(string $text, string $type = 'PlainText')
    {
        $this->_text = $text;
        if (strtolower($type) === 'richtext') {
            $this->_type = 'RichText';
            return;
        }
        $this->_type = 'PlainText';
    }

    /**
     * Compiles Text object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $output = new \stdClass();
        $output->type = $this->_type;
        $output->text = $this->_text;
        return $output;
    }
}