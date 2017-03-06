<?php namespace App\Modules\CaseStudies\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modules\Common\Models\Categories;
use App\Modules\Common\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CaseStudiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct( Posts $posts, Categories $categories )
    {
        $this->posts = $posts;
        $this->categories = $categories;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Input::get( 'count' ) !== null ? $count = Input::get( 'count' ) : $count = 9;
        
        return $this->posts->with('categories')->get()->take( $count );
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
}
