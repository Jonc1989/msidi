@extends('master')
@include('layouts.navbar2')
@section('content')
    <div class="container clear-pads all-case-stadies" ng-controller="CaseStudiesController">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title center title">Case <span class="bold">studies</span></div>
        </div>

        <div class="col-md-12 clear-pads categories">

                <div class="category" ng-click="filter( 'all' )">
                    <span>All</span>
                </div>

            <div class="category" ng-repeat="item in caseStudies" ng-click="filter( item.categories.name )">
                    <span ng-bind="item.categories.name"></span>

            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 case-studies-wrap">
            <div class="col-md-4 case-studies" ng-repeat="item in caseStudies" ng-show="showPosts( item.categories.name)">
                 <!--ng-class="visible == 'all' || visible == item.categories.name ? 'ng-enter' : 'ng-hide'"-->
                <div class="studie">
                    <a href="">
                        <div class="cover">
                            <div class="image" ng-style="{'background':'url({{ item.image }}) center center no-repeat'}">

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