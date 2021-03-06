<?php
namespace Gantry\Framework;

class Gantry extends Base\Gantry
{
    /**
     * @throws \LogicException
     */
    protected static function load()
    {
        // Make sure Timber plugin has been loaded.
        if ( !class_exists( 'Timber' ) ) {
            throw new \LogicException( 'Timber not activated. Make sure you activate the plugin in <a href="' . admin_url( 'plugins.php#timber' ) . '">' . admin_url( 'plugins.php' ) . '</a>' );
        }

        $container = parent::load();

        $container['site'] = function ( $c ) {
            return new Site;
        };

        $container['page'] = function ( $c ) {
            return new Page( $c );
        };

        return $container;
    }
}
