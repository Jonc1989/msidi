@extends('master')

@section('content')
<div id="opal-online" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads" ng-controller="OpalOnlineController">


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-info">

        <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6 col-xs-12 white">
            <div class="title ">Opal Money Transfer: Customer Online Module</div>
            <div  class="short-text">Web-solution, with which help the Opal Money Transfer clients can carry out independently money transfers from the United
                Kingdom to the Baltic and the Eastern Europe countries. This system uses the same components and the same business processes as the
                Opal Money Transfer: BOP. Opal: COM offers the client a basic set of functions to manage their own profile and documents, transfer execution,
                viewing the status of the transfers and their subsequent generation in PDF. The system is characterized by extremely simple and convenient interface.
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-img hidden-xs">
            <img class="" src="<?= env('ROOT_PATH')?>/images/opal/Layer-48.png">
        </div>

    </div>

    <div id="layer1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="title center orange">About project</div>
       </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <div class="col-lg-offset-2 col-lg-10 col-md-offset-3 col-md-9 col-sm-12 col-xs-12 sprockets">
                <img class="opex-info-pic" src="<?= env('ROOT_PATH') ?>/images/opal/sprockets.png">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brief-project-info">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Project Manager:     </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Edgars Rukmanis			</div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Team size:          </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">7		</div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Project start date:  </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Jul 2013 </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Project Duration:    </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">7 months			</div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Platform:            </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">.NET			</div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6"> Basic technologies:  </div> <div class="bold col-lg-6 col-md-6 col-sm-6 col-xs-6">.NET Asp.net jQuery		</div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 opex-about-bg">

            <div class="container clear-pads wrap">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clear-pads white">
                    The money transfer company "OPAL Transfer" works in London (UK) since 2003.
                        The company's activity is aimed primarily at providing quality and affordable services to private and corporate clients.
                        Money transfers are carried out in CIS countries (Russia, Ukraine, Belarus, Georgia, Uzbekistan, Moldova, Kyrgyzstan, Azerbaijan,
                        Armenia, Kazakhstan, Turkmenistan, Tajikistan), Baltic States (Latvia, Estonia, Lithuania), Poland, Czech Republic, Slovakia
                        and Bulgaria. The main advantage that "OPAL Transfer" sets itself apart from its competitors , clients call the speed of the
                        transaction (up to 1 day), low cost (1% of the amount for the CIS countries and £3 for the Baltic and the Eastern Europe countries),
                        service 7 days a week, and ease of completion of the transfer.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img class="opex-about-pic resp" src="<?= env('ROOT_PATH')?>/images/opal/shilluete1.png">
                </div>
            </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
        <div class="container wrap">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                During beta testing of the Opal Money Transfer: Back Office Portal (hereinafter Opal: BOP),
                the Opal company's management "gave the green light'' for development of the online module for
                clients: Opal: Customer Online Module (hereinafter Opal: COM). This part of the project enables
                carrying out the money transfers independently for both new and existing customers , without
                direct participation of the operator. Clients become fully independent from the Opal enterprise
                working time, and this operation can be carried
                out in any time of the day, which nowadays  is de facto. Should be noted that this step also helps to attract new customers.

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <img class="opex-beta-pic resp" src="<?= env('ROOT_PATH')?>/images/opal/Layer-35-copy-2.png">
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="layer2">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    The most important question that had to be solved during the development of this project was the user interface / website design.
                    Firstly, what are the opportunities associated with the money transfers that  had to be provided to the clients and
                    which – not, and secondly, the organization of the whole navigation (since some clients have very minimal knowledge in
                    using computer/Internet, it was necessary to focus exactly on this part of the audience) and, thirdly, the color solution
                    (very different from Opal: BOP). The project development was divided into two parts:
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    working on the user interface and the development itself . Working on the interface, in its turn, began with the development of
                    the prototype. Using the Axure software, was created a prototype, which fully repeated the behavior of the developed project.
                    Thus, already in the initial phase of development, we were able to show the client how the final product will look like .
                    Accordingly, all corrections were made quickly and "painless" at first to  the prototype, and then to the developed product.
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="line"></div>
            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container light-blue-bg">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 column">
                The business logic and access to the database of both Opal: BOP
                and and Opal: COM implemented as a web service (Microsoft WCF),
                which is used by the current web applications of the system, and in the
                future can support web applications of different types (for example, mobile clients).
                The web service is implemented in a RESTful style, which provides a fixed interface
                of the business logic function
                call and access to resources, as well as facilitates the operations and system errors logging development.
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 column">
                <div class="pic dot-net">
                    <img src="<?= env('ROOT_PATH')?>/images/opal/WCF-icon.png">
                </div>

            </div>
        </div>

        <div class="container">
            <div class="line"></div>
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                In addition to its own development, in this web-based
                solution has also been integrated third-party services:
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right center-xs">
                <div class="logo-wrap">
                    <img src="<?= env('ROOT_PATH')?>/images/opal/Layer-43.png">
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-xs">
                <div class="logo-wrap">
                    <img src="<?= env('ROOT_PATH')?>/images/opal/Layer-44.png">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Kayako service is used to process documents uploaded by the users.
                This step was taken to ensure that on the production server was only confirmed documents with no
                ''garbage'' being accumulated. Money transfer payment can be made by using World Pay service,
                after what it gets to Opal: BOP and "joins" the same stream as the standard money transfer created by the operator.
            </div>
        </div>

        <div class="container">
            <div class="line"></div>
        </div>

        <div class="container light-blue-bg">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                As the volume of the Opal: COM functional was significantly less than in Opal: BOP, the
                number of developers for this project was reduced: on a permanent basis in the project
                were working 7 developers and management personnel.
                Besides, in various sprints were also involved designer, testers (both on the part of the contractor and the customer).
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="pic">
                    <img class="opex-corner-pic" src="<?= env('ROOT_PATH')?>/images/opal/7-workin.png">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="line"></div>
        </div>

        <div class="container light-blue-bg">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                Project development of the Opal: COM was conducted on Agile methodology. The speed of development
                of this system allowed to establish the length of the sprint, equals one week. At the end of the next sprint on the pre-production
                server was installed bild for the client to test, and also sent a detailed report on the content generated by means of the Atlassian JIRA.
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pic">
                    <img src="<?= env('ROOT_PATH')?>/images/opal/Jira-icon.png">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="line"></div>
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Implementation of all the planned functionality was completed in December 2013,
                after which the project was sent for the validation to the World Pay service.
                Validation through service was passed on the first try, and with the new year 2014,
                Opal: COM became available to customers. The set before the project goals were completed:
                clients independently and simply can make the transfer of funds, client base
                is growing, and along with it the customer's profit.
            </div>
        </div>
        <div class="container">
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                After the end of the project development and its launch, works within the
                project have not stopped. It is planned and being added the new functionality
                of different complexity and scope, both small and larger components: for
                example, a bonus system for customers , refunds, online module translation into different languages , etc.).
            </div>
        </div>

        <div class="container">
            <div class="line"></div>
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="pic">
                        <img src="<?= env('ROOT_PATH')?>/images/opal/Group-10-copy-2.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clear-pads">
                    After putting the project into operation the companies' executives held talks about another phase
                    of cooperation in the framework of the project on the funds transfer. As a result began the development
                    of mobile application for the Opal Money Transfer clients.
                    The functionality of mobile application, for the most part, repeats the Opal: COM possibilities with some features of mobile devices.
                </div>
            </div>
        </div>


    </div>

</div>

@endsection