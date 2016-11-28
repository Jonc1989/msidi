@extends('master')

@section('content')

<div class="page-section page-content">
    <div class="medium-12 bop-top-bg" style="background-image: url('http://ms-idi.eu/wp-content/uploads/2014/10/Rectangle-13.png')">
        <div class="row full-width" data-equalizer="">
            <div class="large-5 large-offset-1 medium-10 medium-offset-1 column panel" data-equalizer-watch="" style="height: 518px;">
                <h2 class="bop-top-title">Opal Money Transfer: Back Office Portal</h2>
                <p class="bop-top-text">The system, with which help it is possible to carry out private and corporate money transfers from the United Kingdom to former USSR countries and the Eastern Europe countries. The system also includes such modules as: the fight against money laundering, electronic verification of customers, different financial reports, reconciliation, bank payments authorization and other. This information system was designed / developed as a web-based solution with a possible high load level.</p>
            </div>
            <div id="bop-top-img" class="large-6 medium-12 small-12 column panel left text-center" data-equalizer-watch="" style="height: 518px;">
                <img class="bop-top-pic resp" src="http://ms-idi.eu/wp-content/uploads/2014/10/mac.png">
            </div>
        </div>
    </div>
    <div class="row full-width opex-info-bg" style="background-image: url('http://ms-idi.eu/wp-content/uploads/2014/10/Layer-24.png'); padding-bottom: 5%;">
        <div class="medium-10 medium-offset-1">
            <h2 class="opex-info-title">About project</h2>
            <div class="medium-4 medium-offset-1 small-12 column text-center">
                <img class="opex-info-pic" src="http://ms-idi.eu/wp-content/uploads/2014/10/Group-3.png">
            </div>
            <div class="medium-6 medium-offset-1 large-6 large-offset-1 small-12 column" style="float: left;">
                <div class="large-5 medium-6 small-6 columns opex-info"> Project Manager:     </div> <div class="medium-6 small-6 columns opex-info-text">Edgars Rukmanis			</div>
                <div class="large-5 medium-6 small-6 columns opex-info"> Project start date:  </div> <div class="medium-6 small-6 columns opex-info-text">Jan 2013		</div>
                <div class="large-5 medium-6 small-6 columns opex-info"> Team size:  		   </div> <div class="medium-6 small-6 columns opex-info-text">24 </div>
                <div class="large-5 medium-6 small-6 columns opex-info"> Project Duration:    </div> <div class="medium-6 small-6 columns opex-info-text">1 year			</div>
                <div class="large-5 medium-6 small-6 columns opex-info"> Platform:            </div> <div class="medium-6 small-6 columns opex-info-text">.NET			</div>
                <div class="large-5 medium-6 small-6 columns opex-info"> Basic technologies:  </div> <div class="medium-6 small-6 columns opex-info-text">.NET ASP.net jQuery		</div>
            </div>
        </div>
    </div>
    <div class="row block" style="margin-bottom: 5%;">
        <div class="medium-12 text-center">
            <img class="resp" src="http://ms-idi.eu/wp-content/uploads/2014/10/Map1.png">
        </div>
        <div class="medium-6 column no-pads-left">
            <p>The money transfer company "OPAL Transfer" works in London (UK) since 2003 . The company's activity is aimed primarily at providing quality and affordable services to private and corporate clients. Money transfers are carried out in CIS countries (Russia, Ukraine, Belarus, Georgia, Uzbekistan, Moldova, Kyrgyzstan, Azerbaijan, Armenia, Kazakhstan, </p>
        </div>
        <div class="medium-6 column no-pads-right">
            <p>Turkmenistan, Tajikistan), Baltic States (Latvia, Estonia, Lithuania), Poland, Czech Republic, Slovakia and Bulgaria. The main advantage that "OPAL Transfer" sets itself apart from its competitors , clients call the speed of the transaction (up to 1 day), low cost (1% of the amount for the CIS countries and £3 for the Baltic and the Eastern Europe countries), service 7 days a week, and ease of completion of the transfer.</p>
        </div>
    </div>
    <div class="medium-12 bop-prot-bg" style="background-color: #038bc1">
        <div class="row block no-pads">
            <div class="row quote-row" style="background-color: #038bc1; color: white;">
                <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
                <p class="excerpt-text">Product that provides a qualitatively new level of work </p>
            </div>
        </div>
        <div class="row block no-pads">
            <div class="medium-12 text-center">
                <img class="resp" src="http://ms-idi.eu/wp-content/uploads/2014/10/mac1.png">
            </div>
            <div class="medium-6 column no-pads-left">
                <p>In 2013 the " OPAL Transfer" already had the service management processes that have been developed for several years. During this time was gained a positive experience in organization of work on customer service, including  problematic situations management. During the whole time of using the system successful steps have been made to rethink the functional possibilities that was provided by solution used at that time  . Adding new options in that system was not possible due to the development time and its cost. </p>
            </div>
            <div class="medium-6 column no-pads-right">
                <p>The price of such costs was comparable with the development of a new project. Thus , the customer ( OPAL Transfer) faced the choice, familiar to many companies: either invest in the old inconvenient system upgrade, or switch to another, more functional software product that provides a qualitatively new level of work. Obviously, the choice was made in favour of the latter, so the " OPAL Transfer" prepared a prototype of the new information solution , and also provided a description of all business processes , implemented and working in the company. </p>
            </div>
        </div>
    </div>
    <div class="row block no-pads">
        <p>For a decision making from the customer side was set the requirement: to start a project with already prepared development environment, i.e. to show several working forms. The architect of the company chose the three-tier architecture, which is shown below. </p>
        <img class="resp" src="http://ms-idi.eu/wp-content/uploads/2014/10/diagamm.png">
        <p>As a base were selected 3rd parties   libraries (both paid and free), which are the most popular for the enterprise applications development : NHibernate, Kendo UI. As the platform basis was taken Microsoft ASP.NET MVC and Microsoft WCF. For connecting the entire infrastructure was created its own framework ( later called Itex), which contains the linking code , events logging, authentication and authorization , as well as other functions and utilities. </p>
    </div>
    <div class="row block no-pads">
        <div class="row quote-row">
            <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
            <p class="excerpt-text">24 people involved in the project</p>
        </div>
    </div>
    <div class="row block corner">
        <div class="row under-corner-wrap" data-equalizer="">
            <div class="medium-6 column panel" data-equalizer-watch="" style="height: 177px;">
                <p>The project was developed by Agile methodology, in particular, has been used the control method " Scrum". The entire project development was divided into sprints, within each of them worked a certain amount of people involved in the development. During peak-load in the project participated 24 people ( including the product owner and management personnel).  </p>
            </div>
            <div class="medium-6 column panel" data-equalizer-watch="" style="height: 177px;">
                <img class="opex-corner-pic" style="max-width: 148px;" srcset="http://ms-idi.eu/wp-content/uploads/2014/10/24-workin.png, http://ms-idi.eu/wp-content/uploads/2014/10/24-workin@2x.png 2x">
            </div>
        </div>
    </div>
    <div class="row block no-pads">
        <div class="row quote-row">
            <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
            <p class="excerpt-text">Category "complex"</p>
        </div>
    </div>
    <div class="row block no-pads">
        <div class="medium-12 column no-pads">
            <p class="bop-beta-text">The system included a sufficient number of non-standard solutions in order to assign the category " complex".
                Non-standard Opal Money Transfer: BOP modules worth a special mention:
            </p>
            <div class="medium-10 medium-offset-1 shadow-bot-top">
                <p class="bop-beta-list">the module of money laundering prevention;</p>
                <p class="bop-beta-list">electronic verification of registered users, using an external service "CallML - money laundering prevention and regulatory compliance". </p>
                <p class="bop-beta-list">ten steps of reconciliation ( the process of consolidation of bank payment with the money transfer); </p>
                <p class="bop-beta-list">authorization of bank payments and its management;</p>
            </div>
        </div>
        <p class="bop-beta-text">Obviously, in addition there were "standard" solutions for this kind of system: a variety of reports on financial transactions, work with clients , report on the operator's actions and other. In the system were introduced three types of users: super administrator, administrator, and operator. Besides, there was created the tree of rights, with which help it was possible to finely tune rights of each system user individually.
        </p>
    </div>
    <div class="row block no-pads">
        <div class="row quote-row">
            <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
            <p class="excerpt-text">The redirection of savings on the further development of information solution </p>
        </div>
    </div>
    <div class="row block no-pads">
        <div class="medium-12 column no-pads">
            <p class="bop-beta-text">Beta testing of the project was very intense: in the process were involved testers from both sides (the contractor's, and the client's). It should be also noted that from the customer's side in the final stages of development/testing was undertaken quite interesting step – money transfer was registered and processed in parallel in two systems: the old and the new one. It demanded from the customer's side just a little extra time, as the new system was focused primarily on the performance speed and convenience, but gave a great result:</p>
            <div class="medium-10 medium-offset-1 shadow-bot-top">
                <p class="bop-beta-list" style="display: list;">testing was as close to "combat" conditions, which allowed to identify the most "narrow" systems even before the launch, and in a timely manner find solutions;</p>
                <p class="bop-beta-list">at the time of the project launch operators were already fully prepared to work with the new system, allowing the client to redirect the savings to the further development of information solution;</p>
            </div>
        </div>
        <p class="bop-beta-text">We also can't to not mention that on the production server gone the software version with the number 0.9.9.5.</p>
    </div>
    <div class="row block no-pads">
        <div class="row quote-row">
            <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
            <p class="excerpt-text">Mini-project within the project</p>
        </div>
    </div>
    <div class="row block corner">
        <div class="row under-corner-wrap" data-equalizer="">
            <div class="medium-6 column panel" data-equalizer-watch="" style="height: 402px;">
                <p>As a separate paragraph should be mentioned the data migration from the old system to the new, which also helped to reduce the startup time of the project. During the old system performance  have been transferred all the data, which in the transfer process was adapted to the new database structure and the new functionality. In fact, it was a mini -project in the project: has been created a separate independent application, which worked with the export files. The biggest difficulty in this part of the project was the amount of data: we are talking about millions of records , some of which was not exported correctly , so the different periods of export data had to be processed differently , up to corrections / editing manually. Our company has also successfully coped with this task: in the first couple months of the project came just a few requests to modify the migration data.    </p>
            </div>
            <div class="medium-6 column panel" data-equalizer-watch="" style="height: 402px;">
                <img class="opex-corner-pic" src="http://ms-idi.eu/wp-content/uploads/2014/10/Vector-Smart-Object.png">
            </div>
        </div>
    </div>
    <div class="row block no-pads" style="margin-bottom: 5%;">
        <div class="row quote-row">
            <div class="quote"><img src="http://ms-idi.eu/wp-content/themes/serio/images/symbol.png"></div>
            <p class="excerpt-text">Green light was given to the next project</p>
        </div>
        <div class="medium-12 column">
            <p>Already in the process of developing a system Opal Money Transfer: BOP from the client's side was given the green light to the next project, dubbed Opal Money Transfer: COM (customer online module), development of which began immediately after launching.At the moment the system works successfully for the customer for more than a year, and from our side we provide the system's technical support that includes not only rapid response to requests for correction of minor bugs, but the introduction of new functionality on the client's request. </p>
        </div>
    </div>
</div>

@endsection