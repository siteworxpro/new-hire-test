<?php declare(strict_types = 1);

namespace App\Library;

use App\Controllers\Api\V1\HealthCheckController;
use App\Controllers\Web\IndexController;
use Psr\Container\ContainerInterface;
use Slim\App as SlimApp;

/**
 * Class App
 *
 * @package App\Library
 */
class App extends SlimApp
{

    /**
     * App constructor.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->registerRoutes();
    }

    private function registerRoutes(): void
    {
        $this->registerApiV1();
        $this->registerWeb(); // remove if only api
    }

    private function registerWeb(): void
    {
        $this->get('/', IndexController::class . ':getAction');
    }

    private function registerApiV1(): void
    {
        $this->group('/api', function () {
            $this->group('/v1', function () {
               $this->get('/health_check', HealthCheckController::class . ':getAction');
            });
        });
    }

    /**
     * @return Container|ContainerInterface
     */
    public static function di(): Container
    {
        return self::getApp()->getContainer();
    }

    /**
     * @return App
     */
    public static function getApp(): App
    {
        /** @var App $app */
        return $GLOBALS['app'];
    }
}
