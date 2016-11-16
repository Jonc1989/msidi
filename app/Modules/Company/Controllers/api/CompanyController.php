<?php namespace App\Modules\Company\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    public function index()
    {
        return '';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function send()
    {
//        $sender     = Input::get('sender');
//        $email      = Input::get('email');
//        $subject    = Input::get('subject');
//        $text       = Input::get('text');
//
//        $mail = config( 'mail' );
//
//        Mail::send('modules.company.email', [ 'user' => $sender, 'email' => $email, 'text' => $text ], function ( $m ) use( $subject, $mail ) {
//            $m->from( $mail[ 'from' ][ 'address' ], $mail[ 'from' ][ 'name' ] );
//            $m->to( $mail[ 'from' ][ 'address' ], 'Contact form' )->subject( $subject );
//        });
    }
}
