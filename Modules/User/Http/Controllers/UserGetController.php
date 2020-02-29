<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\UserGetValidationRequest;
use Modules\User\Services\UserGetService;

/**
 * Class UserGetController
 * @package Modules\User\Http\Controllers
 */
class UserGetController extends Controller {
    /**
     * @var $userGetService
     */
    private $userGetService;

    /**
     * UserGetController constructor.
     * @param UserGetService $userGetService
     */
    public function __construct(UserGetService $userGetService) {
        $this->userGetService = $userGetService;
    }

    /**
     * @param UserGetValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(UserGetValidationRequest $request) : JsonResponse {
        $data = $request->all();

        $filtersJson = '{
	"predicates": [
		{
			"name": "user_id",
			"comparison": "array",
			"attribute": "user.id",
			"value": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
		},
	    {
			"name": "user_email",
			"comparison": "contains",
			"attribute": "user.email",
			"value": "a"
		},
		{
			"name": "user_name",
			"comparison": "contains",
			"attribute": "user.name",
			"value": "a"
		},
		{
			"name": "user_role",
			"comparison": "equals",
			"attribute": "user.role",
			"value": "admin"
		}
	],
	"page": "1",
	"per_page": "3",
	"sort_by": "created_at",
	"sort_direction": "desc"
}';
        $filters = json_decode($filtersJson);

        $response = $this->userGetService->list($filters);

        return $this->handleAjaxJsonResponse($response);
    }
}
