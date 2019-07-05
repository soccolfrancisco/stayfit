<?php

namespace App\Http\Controllers\Frontend;

use DateTime;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

/**
 * Class PartnerController
 * @package App\Http\Controllers\Frontend
 */
class PartnerController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return View('frontend.partner');
    }

    /**
     * @return JsonResponse
     */
    public function sendContact()
    {
        $name = Input::get('name');
        $email = Input::get('email');
        $message = Input::get('message');
        $datetime = (new DateTime())->format('d/m/Y H:i:s');

        $validator = Validator::make(
            [
                'name'      => $name,
                'email'     => $email,
                'message'   => $message
            ],
            [
                'name'      => 'required|max:255',
                'email'     => 'required|email|max:255',
                'message'   => 'required|max:255'
            ]
        );

        if ($validator->fails()) {
            return Response()->json(
                [
                    'errors' => true
                ]
            );
        }

        $data = [
            'to' => HomeController::VAR_ADDRESSEE_TO,
            'from' => HomeController::VAR_ADDRESSEE_FROM,
            'name' => $name,
            'email' => $email,
            'content' => $message,
            'datetime' => $datetime
        ];

        Mail::send('front.send.sendContact', $data, function ($source) use ($data) {
            $source->from($data['from']);
            $source->to($data['to']);
            $source->subject('Contato StayFit');
        });

        if (Mail::failures()){
            return Response()->json(
                [
                    'errors' => true
                ]
            );
        }

        return Response()->json(
            [
                'errors' => false
            ]
        );
    }
}
