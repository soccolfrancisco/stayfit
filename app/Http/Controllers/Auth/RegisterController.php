<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Requests\PreRegistrationRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\View\View;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * RegisterController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        return View('auth.register');
    }

    /**
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * @param array $data
     * @return User|Model
     */
    protected function create(array $data)
    {
        return (new User)->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * @param PreRegistrationRequest $request
     * @return JsonResponse
     */
    public function sendPreRegistration(PreRegistrationRequest $request)
    {
        $message = '<strong>Pré-cadastro StayFit</strong><br/><strong>Empresa: </strong>' . $request->profile
            . '<br/><strong>Nome da Empresa: </strong>' . $request->nameCompany
            . '<br/><strong>CNPJ: </strong>' . $request->cnpj
            . '<br/><strong>Nome do proprietário: </strong>' . $request->nameOwner
            . '<br/><strong>CPF: </strong>' . $request->cpf
            . '<br/><strong>Email: </strong>' . $request->email
            . '<br/><strong>Telefone: </strong>' . $request->phone
            . '<br/><strong>Cep: </strong>' . $request->zipcode
            . '<br/><strong>Rua: </strong>' . $request->street
            . '<br/><strong>Número: </strong>' . $request->number
            . '<br/><strong>Bairro: </strong>' . $request->district
            . '<br/><strong>Cidade: </strong>' . $request->city
            . '<br/><strong>Estado: </strong>' . $request->state;

        if (mail(HomeController::VAR_ADDRESSEE, 'Pré-cadastro StayFit', $message,
            HomeController::VAR_HEADER . $request->nameOwner)) {
            return Response()->json(
                [
                    'status' => 'success'
                ]
            );
        }

        return Response()->json(
            [
                'status' => 'error'
            ]
        );
    }
}
