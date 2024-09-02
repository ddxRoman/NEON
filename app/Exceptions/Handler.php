<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use App\Exceptions\telegram;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    // public function report(Throwable $e){

    //     $data=[
    //         'description'=>$e->getMessage(),
    //         'file'=> $e->getFile(),
    //         'line'=>$e->getLine()
    //     ];
    //     $telegram = new telegram();
    //     $telegram->sendMessage('2116281958','MessageTesticulus');
    // }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
