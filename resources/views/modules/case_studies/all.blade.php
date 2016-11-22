@extends('master')

@section('content')
    <div class="container clear-pads" ng-controller="CaseStudiesController">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title center title">Case <span class="bold">studies</span></div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 case-studies-wrap">
            <div class="col-md-4 case-studies"  ng-repeat="item in caseStudies">
                <div class="studie">
                    <a href="">
                        <div class="cover">
                            <div class="image" style="">

                            </div>

                        </div>
                        <div class="white-layer">
                            <div class="hover">
                                <img src="/images/eye.png">
                            </div>
                        </div>
                        <div class="portfolio-title" ng-bind="item.content">Exigen</div>
                        <div class="category" ng-bind="item.categories.name">Partnership</div>
                    </a>
                </div>


            </div>

        </div>



    </div>





@endsection