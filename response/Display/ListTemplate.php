<?php

/**
 * Request.
 *
 * Handler to output ListTemplate.
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
 * Handler for creating a ListTemplate. Should not be called directly.
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
class ListTemplate extends Display
{
    protected $listItems = [];

    /**
     * ListTemplate constructor.
     *
     * @param string      $type              Type of template to use.
     * @param string      $title             Title to be displayed for
     *                                       the template.
     * @param bool        $backButtonVisible Show or hide the back button.
     * @param string|null $token             Token used for sessions.
     */
    protected function __construct(
        string $type,
        string $title,
        bool $backButtonVisible = true,
        string $token = null
    ) {
        parent::__construct($type, $title, $backButtonVisible, $token);
    }

    /**
     * Setter for adding ListItems
     *
     * @param ListItem ...$listItem Array of ListItem's to add.
     *
     * @return null
     */
    public function addListItem(ListItem ...$listItem)
    {
        $this->listItems = array_merge($this->listItems, $listItem);
        return null;
    }
    /**
     * Compiles ListTemplate object ready for output.
     *
     * Function compile.
     *
     * @return \stdClass
     */
    public function compile():\stdClass
    {
        $result = new \stdClass();
        //TODO complete implementation
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
        return $result;
    }
}