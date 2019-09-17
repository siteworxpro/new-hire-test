<?php declare(strict_types = 1);

namespace App\Controllers\Api\V1;

use App\Controllers\Controller;
use Slim\Http\{Request, Response};

/**
 * Class HealthCheckController
 *
 * @package App\Controllers\Api\V1
 */
final class HealthCheckController extends Controller
{
    public function getAction(Request $request, Response $response, array $params): Response
    {
        return $this->setPayload([
            'status' => 'ok'
        ])->formatResponse($response);
    }
}
