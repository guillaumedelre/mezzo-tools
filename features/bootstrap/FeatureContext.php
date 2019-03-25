<?php
declare(strict_types=1);

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
final class FeatureContext implements Context
{
    /**
     * @var \Symfony\Component\HttpKernel\KernelInterface
     */
    protected $kernel;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(\Symfony\Component\HttpKernel\KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @When a demo scenario sends a request to :arg1
     */
    public function aDemoScenarioSendsARequestTo($arg1)
    {
//        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then the response should be received
     */
    public function theResponseShouldBeReceived()
    {
        return true;
//        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

}
