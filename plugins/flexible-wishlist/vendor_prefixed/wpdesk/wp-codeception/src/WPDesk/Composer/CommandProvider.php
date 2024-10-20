<?php

namespace FlexibleWishlistVendor\WPDesk\Composer\Codeception;

use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\CreateCodeceptionTests;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\PrepareCodeceptionDb;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\PrepareLocalCodeceptionTests;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\PrepareLocalCodeceptionTestsWithCoverage;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\PrepareParallelCodeceptionTests;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\PrepareWordpressForCodeception;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\RunCodeceptionTests;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\RunLocalCodeceptionTests;
use FlexibleWishlistVendor\WPDesk\Composer\Codeception\Commands\RunLocalCodeceptionTestsWithCoverage;
/**
 * Links plugin commands handlers to composer.
 */
class CommandProvider implements \FlexibleWishlistVendor\Composer\Plugin\Capability\CommandProvider
{
    public function getCommands()
    {
        return [new CreateCodeceptionTests(), new RunCodeceptionTests(), new RunLocalCodeceptionTests(), new RunLocalCodeceptionTestsWithCoverage(), new PrepareCodeceptionDb(), new PrepareWordpressForCodeception(), new PrepareLocalCodeceptionTests(), new PrepareLocalCodeceptionTestsWithCoverage(), new PrepareParallelCodeceptionTests()];
    }
}
