<?php
namespace Kernel\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Kernel\UseCases\User\GetAllInterface;
use Kernel\UseCases\User\StoreInterface;
use Kernel\UseCases\User\Inputs\UserInput;

class UserController extends Controller
{
    public function index(GetAllInterface $useCase)
    {
        $returns = $useCase->handle();
	return $returns;
    }
 
    public function store(StoreInterface $useCase, Request $req)
    {
	$input = new UserInput($req->name);
        return $useCase->handle($input)->toarray();
    }
}
