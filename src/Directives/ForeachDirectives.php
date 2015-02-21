<?php namespace Radic\BladeExtensions\Directives;

use Illuminate\Foundation\Application;
use Illuminate\View\Compilers\BladeCompiler as Compiler;
use Radic\BladeExtensions\Traits\BladeExtenderTrait;

/**
 * Foreach directives
 *
 * @package        Radic\BladeExtensions
 * @subpackage     Directives
 * @version        2.0.0
 * @author         Robin Radic
 * @license        MIT License - http://radic.mit-license.org
 * @copyright  (c) 2011-2014, Robin Radic - Radic Technologies
 * @link           http://robin.radic.nl/blade-extensions
 *
 */
class ForeachDirectives
{
    use BladeExtenderTrait;

    /**
     * Starts `foreach` directive
     *
     * @param             $value
     * @param             $directive
     * @param Application $app
     * @param Compiler    $blade
     * @return mixed
     */
    public function openForeach($value, $directive, Application $app, Compiler $blade)
    {
        $matcher = '/@foreach\((.*)(?:\sas)(.*)\)/';
        return preg_replace($matcher, $directive, $value);
    }

    /**
     * Ends `foreach` directive
     *
     * @param             $value
     * @param             $directive
     * @param Application $app
     * @param Compiler    $blade
     * @return mixed
     */
    public function closeForeach($value, $directive, Application $app, Compiler $blade)
    {
        $matcher = $blade->createPlainMatcher('endforeach');
        return preg_replace($matcher, $directive, $value);
    }

    /**
     * Adds `break` directive
     *
     * @param             $value
     * @param             $directive
     * @param Application $app
     * @param Compiler    $blade
     * @return mixed
     */
    public function addBreak($value, $directive, Application $app, Compiler $blade)
    {
        $matcher = $blade->createPlainMatcher('break');
        return preg_replace($matcher, $directive, $value);
    }

    /**
     * Adds `continue` directive
     *
     * @param             $value
     * @param             $directive
     * @param Application $app
     * @param Compiler    $blade
     * @return mixed
     */
    public function addContinue($value, $directive, Application $app, Compiler $blade)
    {
        $matcher = $blade->createPlainMatcher('continue');
        return preg_replace($matcher, $directive, $value);
    }
}