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
 * Class HomeController
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends Controller
{
    const VAR_ADDRESSEE_TO = 'franciscosoccol@gmail.com';
    const VAR_ADDRESSEE_FROM = 'franciscosoccol@stayfit.com.br';

    /**
     * @return Factory|View
     */
    public function index()
    {
//        $categories = [
//            '1' => ['Academia', ''],
//            '2' => ['Crossfit', ''],
//            '3' => ['Dança', ''],
//            '4' => ['Esporte', ''],
//            '5' => ['Hidroginástica', ''],
//            '6' => ['Studio de Pilates', ''],
//            '7' => ['Outros', ''],
//            '8' => ['Yoga', '']
//        ];

        return View('frontend.home');
    }

    /**
     * @return JsonResponse
     */
    public function sendNewsletter()
    {
        $email = Input::get('email');
        $datetime = (new DateTime())->format('d/m/Y H:i:s');

        $validator = Validator::make(
            [
                'email' => $email
            ],
            [
                'email' => 'required|email|max:255'
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
            'to' => self::VAR_ADDRESSEE_TO,
            'from' => self::VAR_ADDRESSEE_FROM,
            'email' => $email,
            'datetime' => $datetime
        ];

        Mail::send('front.send.sendNewsletter', $data, function ($source) use ($data) {
            $source->from($data['from']);
            $source->to($data['to']);
            $source->subject('Newsletter StayFit');
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
