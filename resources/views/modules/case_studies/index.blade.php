<div class="container clear-pads" ng-controller="CaseStudiesController">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title center title">Case <span class="bold">studies</span></div>
            <div class="center short-text">
                We have realized and introduced a number of
                unique and innovative projects that we are proud of and happy to share with you.
            </div>

            <div class="col-md-12 brochure-wrap center">
                <div class="brochure">
                    <a href="">
                        <div class="brochure-txt">PDF brochure (En)</div>
                        <div class="brochure-icon circle"><div class="icon"></div></div>
                    </a>
                </div>

                <div class="brochure">
                    <a href="">
                        <div class="brochure-txt">PDF brochure (De)</div>
                        <div class="brochure-icon circle"><div class="icon"></div></div>
                    </a>
                </div>
            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 case-studies-wrap">
            <div class="col-md-4 case-studies" ng-repeat="item in caseStudies">
                <a href="">
                    <div class="cover">
                        <div class="image opal-transfer-image2 exigen-image" style="    background: url({{ item.image }}) center center no-repeat;">
                            <div class="hover">
                                <img src="/images/eye.png">
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-title" ng-bind="item.content">Exigen</div>
                    <div class="category" ng-bind="item.categories.name">Partnership</div>
                </a>

            </div>





            <!--<div class="col-md-4 case-studies">
                <div class="cover">
                    <div class="image opal-transfer-image">
                        <div >111</div>
                        <div >111</div>
                        <div >111</div>
                    </div>
                </div>
                <div class="portfolio-title">Opal transfer</div>
                <div class="category">Partnership</div>
            </div>
            <div class="col-md-4 case-studies">
                <div class="cover">
                    <div class="image opal-transfer-image">
                        <div >111</div>
                        <div >111</div>
                        <div >111</div>
                    </div>
                </div>
                <div class="portfolio-title">Opal online</div>
                <div class="category">Partnership</div>
            </div>

            <div class="col-md-4 case-studies">
                <div class="cover">
                    <div class="image opal-transfer-image exigen-image">
                        <div >111</div>
                        <div >111</div>
                        <div >111</div>
                    </div>
                </div>
                <div class="portfolio-title">Exigen</div>
                <div class="category">Partnership</div>

            </div>
            <div class="col-md-4 case-studies">
                <div class="cover">
                    <div class="image opal-transfer-image">
                        <div >111</div>
                        <div >111</div>
                        <div >111</div>
                    </div>
                </div>
                <div class="portfolio-title">Opal transfer</div>
                <div class="category">Partnership</div>
            </div>
            <div class="col-md-4 case-studies">
                <div class="cover">
                    <div class="image opal-transfer-image">
                        <div >111</div>
                        <div >111</div>
                        <div >111</div>
                    </div>
                </div>
                <div class="portfolio-title">Opal online</div>
                <div class="category">Partnership</div>
            </div>-->
        </div>

    <div class="col-md-12 col-sm-12 col-xs-12 center">
        <div class="more">
            <a href="/case-studies">
                <div class="more-txt">See more</div>
                <div class="more-btn circle"></div>
                <div class="more-btn-pressed circle"></div>
                <div class="more-btn-hover circle"></div>
            </a>
        </div>
    </div>


</div>