<?php

use Behat\Behat\Context\SnippetAcceptingContext;

require_once(__DIR__ . '/../../vendor/Autoload.php');

/**
 * Behat context class.
 */
class FeatureContext extends PHPUnit_Framework_TestCase implements SnippetAcceptingContext
{
    public $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am in this project's root dir on the command-line
     */
    public function iAmInThisProjectSRootDirOnTheCommandLine()
    {
        getcwd();
    }

    /**
     * @When I type :arg1
     */
    public function iType($arg1)
    {
        $result = [];
        switch ($arg1) {
            case 'php src/Command/Console.php':
                exec('php src/Command/Console.php', $result);
                break;
            case 'php Command/Console.php':
                exec('php Command/Console.php', $result);
                break;
            case 'php Console.php':
                exec('php Console.php', $result);
                break;
            default:
                throw new InvalidArgumentException('invalid exec command given.');
                break;
        }

        $this->result = $result;
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        $this->assertContains($arg1, $this->result);
    }
}
