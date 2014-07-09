<?php namespace Radic\BladeExtensions\Core;

/**
 * Interface LoopStackInterface
 *
 * @package     Radic\BladeExtensions\Core
 * @author     Robin Radic
 * @license    MIT License - http://radic.mit-license.org
 * @copyright  (c) 2011-2014, Robin Radic - Radic Technologies
 * @link       http://radic.nl
 */
interface LoopStackInterface {

    /**
     * @param LoopStackInterface $parentLoop
     * @return void
     */
    public function setParentLoop(LoopStackInterface $parentLoop);

    /**
     * Set the loop items for the current stack
     *
     * @param array $items
     * @return void
     */
    public function setItems($items);

    /**
     * Logic that should be executed before any other code at the start of every loop run
     * @return void
     */
    public function before();

    /**
     * Logic that should be extecuted only as last of every loop run
     * @return void
     */
    public function after();

    /**
     * Allows object-like access to get the loop information data values
     * @param string $key
     * @return mixed
     */
    public function __get($key);
}