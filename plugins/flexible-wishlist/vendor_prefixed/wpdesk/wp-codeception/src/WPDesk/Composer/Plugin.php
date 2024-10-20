<?php

namespace FlexibleWishlistVendor\WPDesk\Composer\Codeception;

use FlexibleWishlistVendor\Composer\Composer;
use FlexibleWishlistVendor\Composer\IO\IOInterface;
use FlexibleWishlistVendor\Composer\Plugin\Capable;
use FlexibleWishlistVendor\Composer\Plugin\PluginInterface;
/**
 * Composer plugin.
 *
 * @package WPDesk\Composer\Codeception
 */
class Plugin implements PluginInterface, Capable
{
    /**
     * @var Composer
     */
    private $composer;
    /**
     * @var IOInterface
     */
    private $io;
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }
    /**
     * @inheritDoc
     */
    public function deactivate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }
    /**
     * @inheritDoc
     */
    public function uninstall(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }
    public function getCapabilities()
    {
        return [\FlexibleWishlistVendor\Composer\Plugin\Capability\CommandProvider::class => CommandProvider::class];
    }
}
