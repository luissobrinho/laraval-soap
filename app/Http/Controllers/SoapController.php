<?php

namespace App\Http\Controllers;

use App\Add;
use App\GetAddResponse;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Http\Request;

class SoapController extends Controller
{
    /**
     * @var SoapWrapper
     */
    private $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;

    }

    //
    public function show(Request $request)
    {
        if (!$this->soapWrapper->has('calculadora')) {
            $this->soapWrapper->add('calculadora', function ($service) {
                $service
                    ->wsdl(config('soap.wsdl'))
                    ->trace(true)
                    ->classmap([
                        Add::class,
                        GetAddResponse::class
                    ]);
            });
        }

        $response = $this->soapWrapper->call('calculadora.Add', [
           new Add($request->get('intA'), $request->get('intB'))
        ]);

        $this->soapWrapper->client('calculadora', function ($r) use (&$response) {
            $response = $r;

            dd($response);
        });

        return response($response);
    }
}
