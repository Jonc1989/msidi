<?php namespace App\Modules\Career\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{

    public function send()
    {
        $position     = Input::get('position');
        $email      = Input::get('email');
        $message    = Input::get('message');

        $mail = config( 'mail' );

        Mail::send('modules.career.email', [ 'position' => $position, 'email' => $email, 'message' => $message ], 
            function ( $m ) use( $mail ) {
            $m->from( $mail[ 'from' ][ 'address' ], $mail[ 'from' ][ 'name' ] );
            $m->to( $mail[ 'from' ][ 'address' ], 'Vacansy form' )->subject( 'Vacansy request' );
        });
    }
}
