<?php namespace App\Modules\CaseStudies\Controllers;

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

        \Blade::setEscapedContentTags( '<%%', '%%>' );
        \Blade::setContentTags( '<%', '%>' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.case_studies.all');
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
     * @param $case_study
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function caseStudies( $case_study )
    {
        return view( 'modules.case_studies.' . $case_study );
    }

    /**
     * @param $lang
     */
    public function showBrochure( $lang )
    {
        $path = \File::get( storage_path( 'brochures/Brochure_' . $lang . '.pdf' )  );
        return \Response::make( $path, 200, ['Content-Type' => 'application/pdf'] );
    }
}
