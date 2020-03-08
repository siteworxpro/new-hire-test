<?php declare(strict_types = 1);

namespace App\Controllers\Api\V1;

use App\Controllers\Controller;
use App\Models\Company;
use Slim\Http\{Request, Response};
use Slim\Exception\NotFoundException;

/**
 * Class CompanyController
 *
 * @package App\Controllers\Api\V1
 */
final class CompanyController extends Controller
{
    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $params
     *
     * @return Response
     * @throws NotFoundException
     */
    public function getAction(Request $request, Response $response, array $params): Response
    {
        if ($params['id'] !== null) {
            $company = Company::find($params['id'] ?? 0);

            if ($company === null) {
                throw new NotFoundException($request, $response);
            }

            return $this->setPayload($company->toArray())->formatResponse($response);
        }

        return $this->setPayload(Company::all()->toArray())->formatResponse($response);
    }
}
