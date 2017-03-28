@extends('master')

@section('content')

    <div id="els" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-info">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white clear-pads center">
                <h1 class="els-title center">"ECOLINES" LOYALTY SYSTEM</h1>

                <p class="els-text" >
                    “Ecolines Loyalty System” (ELS) ir inovatīva informācijas sistēma, kas paredzēta pasažieru
                    pārvadājumu nozares attīstībai. Tās mērķis ir veicināt uzticību starptautisko autobusu operatoram
                    “Ecolines” un uzlabot sadarbību ar klientiem, tādējādi nodrošinot uzņēmuma
                    atpazīstamību un pozitīvo pieredzi publiskajā telpā.
                </p>
                <p class="els-text">
                    Projekta laikā tika izstrādātas divas informācijas sistēmas daļas: publiskā daļa,
                    kas paredzēta klientiem, un administratīvā daļa, kuru pārvalda "Ecolines" operatori.
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 els-ticket">
                    <div class="col-sm-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                            <p>
                                Project Manager:
                                <span class="bold">Edgar Rukmanis</span>
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                            <p>
                                Project start date:
                                <span class="bold">Aug 2015</span>
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                            <p>
                                Project end date:
                                <span class="bold">March 2016</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                            <p>
                                Platform:
                                <span class="bold">PHP</span>
                            </p>
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                            <p>
                                Basic technologies:
                                <span class="bold">PHP, Laravel, AngularJS, PostgreSQL, HTML, CSS, MySQL, Git, node.js.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>









        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-xs">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 els-ticket">
                <div class="col-sm-6">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                        <p>
                            Project Manager:
                            <span class="bold">Edgar Rukmanis</span>
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                        <p>
                            Project start date:
                            <span class="bold">Aug 2015</span>
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                        <p>
                            Project end date:
                            <span class="bold">March 2016</span>
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                        <p>
                            Platform:
                            <span class="bold">PHP</span>
                        </p>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
                        <p>
                            Basic technologies:
                            <span class="bold">PHP, Laravel, AngularJS, PostgreSQL, HTML, CSS, MySQL, Git, node.js.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about">
            <h1 class="els-title  center">PAR UZŅĒMUMU “ECOLINES”</h1>

            <p class="els-text light-black">
                “ECOLINES” ir lielākais un pieredzējušākais starptautisko autobusu operators Baltijā,
                kas ik dienas ļauj pasažieriem komfortabli ceļot starp 21 valsti un 205 pilsētām.
                Uzņēmums pozicionē sevi kā uzticamu, pieredzes bagātu, mūsdienīgu, komfortablu un
                kvalitatīvu pakalpojumu sniedzēju pasažieru pārvadājumu tirgū.
            </p>
            <p class="els-text light-black">
                “ECOLINES” starptautisko autobusu pārvadājumu tirgū darbojas jau 20 gadus.
                Ieguldot nopietnu darbu un nepārtraukti attīstoties, tas šobrīd piedāvā visplašāko
                maršrutu tīklu kā Baltijā, tā ceļojumos uz Rietumeiropu un Austrumeiropu. Savas
                darbības laikā “ECOLINES” kļuvis par vienu no lielākajiem un veiksmīgākajiem Latvijas uzņēmumiem.
            </p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 yellow clear-pads">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-white hidden-xs clear-pads"></div>

            <div id="road" class="col-lg-4 col-md-4 col-sm-5 col-xs-12 hidden-xs clear-pads">
                <img class="els-road-bus" src="<?= env('ROOT_PATH')?>/images/els/Bus.png">
                <img class="els-road-car" src="<?= env('ROOT_PATH')?>/images/els/red_car.png">
                <img class="els-road-clouds" src="<?= env('ROOT_PATH')?>/images/els/clouds.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 animation-block-text">
                <h1 class="els-title">“ECOLINES” LOJALITĀTES SISTĒMA (ELS)</h1>
                <h4 class="els-text bold">Kādēļ bija nepieciešama sistēma?</h4>
                <ul >
                    <li>Nepārskatāma un decentralizēta klientu pārvaldība.</li>
                    <li>Manuāla piedāvājumu izstrāde neļāva sniegt tik daudzveidīgus braucienu atlaižu piedāvājumus individuālajām personām un grupām.</li>
                    <li>Pakalpojumi nebija ērti lietojami un pārskatāmi.</li>
                    <li>Apgrūtinoša datu integrācija.</li>
                </ul>

                <p class="els-text">
                    <span class="bold">Risinājums:</span> izveidot unificētu sistēmas arhitektūru, kas centralizētu klientu pārvaldību,
                    un daudzveidīgu pasažieru pārvadājumu piedāvājumu sistēmu, kas uzlabotu “Ecolines”
                    funkcionalitāti un attiecības ar privātajiem un korporatīvajiem klientiem.
                </p>
                <p class="els-question bold">
                    “MS-IDI” SNIEDZA INFORMĀCIJAS TEHNOLOĢIJU RISINĀJUMU, KĀ IR IESPĒJAMS STRĀDĀT AR PIEDĀVĀJUMU SISTĒMU OPERATĪVI UN PĀRSKATĀMI.
                </p>

                <p class="els-text"><span class="bold">REALIZĀCIJA</span></p>
                <p class="els-text">
                    Projekta ietvaros tika izstrādāta starptautiskā autobusu operatora “Ecolines”
                    lojalitātes informācijas sistēma, kas paredzēta, lai sniegtu “Ecolines” klientiem
                    informāciju par saviem pirkumiem, piedāvājumiem, bonusiem un atlaidēm, kas tiek
                    piešķirtas par uzņēmuma pakalpojumu izmantošanu un uzkrāto naudu, nodrošinātu efektīvu un
                    viegli kontrolējamu lojalitātes sistēmas pārvaldi administratīvajai pusei, uzlabotu sadarbību ar jau
                    esošajiem klientiem un paaugstinātu to uzticības līmeni uzņēmumam, kā arī piesaisītu jaunus.
                </p>

                <h4 class="els-question">LOJALITĀTES INFORMĀCIJAS SISTĒMAS LIETOŠANAS IEGUVUMI</h4>
                <ul class="els-benefits">
                    <li>Operatīva un automātiska klientu apkalpošana;</li>
                    <li>Tirdzniecības procesu veidošana;</li>
                    <li>Biļešu pirkšana procesa aprēķināšana un atlaižu veidošana;</li>
                    <li> Aizsargāta klienta datu sistēma;</li>
                    <li>Elastīga un efektīva administratīvās puses darbībām un sniedz plašas iespējas privātajiem un korporatīvajiem klientiem;</li>
                    <li>Iespēja integrēt ELS esošajā “ECOLINES” pārdošanas sistēma.</li>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom-white hidden-xs clear-pads"></div>
        </div>

        <div id="infrastructure" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center clear-pads">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="els-title">INFRASTRUKTŪRA</h1>

                <p class="els-text">
                    Sistēma atvieglo uzņēmuma ikdienas darbu un iekļaujas citās “Ecolines” informācijas sistēmās un pārvaldītajos rīkos.
                </p>
                <p class="els-text">
                    “MS-IDI” izstrādātā sistēma tika izmantota par pamatu vēl vienam “Ecolines” pasūtījumam – OWS (Ecolines Operator`s Workspace).
                </p>
            </div>
            <div id="yellow-shape" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="<?= env( 'ROOT_PATH' );?>/images/els/workspace.png">
            </div>
            <p  class="els-text centred">
                Informācijas sistēmas infrastruktūra tika izstrādāta, izmantojot atvērtā pirmkoda programmatūru,
                un pielāgota specifisku uzdevumu risināšanai. Šāda izvēle ļāva efektīvāk realizēt klientu uzdevumus,
                jo tie pieprasīja daudzveidīgas variācijas un konfigurācijas ar datiem.
            </p>

            <div id="yellow-shape2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="<?= env( 'ROOT_PATH' );?>/images/els/MacBook-Air.png">
                <p  class="els-text centred">
                    Mūsdienīgs un piemērots dizains, kas piešķir uzņēmumam vienotu un viegli uztveramu stilu,
                    kas ir funkcionāls un atbilstošs piedāvājumu pozicionēšanai, klienta profilam un administratīvās daļas risinājumiem un iespējām.
                </p>
            </div>

        </div>

        <div class="els-project-team col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="els-title center">Projekta komanda</h1>
            <h3 class="els-subtitle">Kopumā projekta realizācijā piedalījās 10 “MS-IDI” darbinieki</h3>
            <p class="els-text">
                Projekta vadītājs<span class="els-separator">/</span>
                Analītiķis<span class="els-separator">/</span>
                Programmētāji<span class="els-separator">/</span>
                Dizaineris<span class="els-separator">/</span>
                Testētājs
            </p>
        </div>

        <div class="els-project-team col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
            <h1 class="els-title center">ELS DARBĪBAS SHĒMA</h1>
            <h3 class="els-text">Projekta realizācijas laikā tika izveidotas divas daļas</h3>



            <div class="els-border">
                <div class="table-cell">
                    <h4 class="els-title center">Publiskā daļa</h4>
                    <p class="els-text">(My Ecolines) pieejama klientam</p>
                </div>
                <div class="table-cell">
                    <h4 class="els-title center">Administratīvā daļa</h4>
                    <p class="els-text">pārvalda "Ecolines" operatori</p>
                </div>
            </div>

            <h3 class="els-text centred">ELS galvenais pamatprincips ir vienotā datu telpa, kurā mijiedarbojas klients,
                jau esošā Ecolines Booking System (EBS) un Ecolines Loyalty System.
            </h3>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads center">
                <img id="info-graphic" src="<?= env( 'ROOT_PATH' );?>/images/els/infographics.png">
                <img id="info-graphic-sm" class="els-info-graphics-img" src="http://ms-idi.eu/wp-content/uploads/2017/01/Path.png">
            </div>
        </div>

        <div id="yellow-bg" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
            <h1 class="els-title center">Lojalitātes sistēmas dalībnieku
                mijiedarbības process
            </h1>
            <p class="els-text centred">Izstrādātā sistēma nodrošina savienojamību un datu integrāciju ar EBS sistēmu,
                līdz ar to notiek operatīvas biļešu iegādes, piedāvājumu izvēles un biļešu apstiprināšanas un atcelšanas funkcijas.
            </p>
            <h4 class="els-subtitle center">Klienta un administratīvās daļas iespējas</h4>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container els-items clear-pads">
                    <div class="col-sm-3">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/1.png">
                        <p class="els-item-text">Aplūkot savu biļešu iegādes vēsturi</p>
                    </div>
                    <div class="col-sm-3">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/2.png">
                        <p class="els-item-text">Veikt autentifikāciju</p>
                    </div>
                    <div class="col-sm-3">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/3.png">
                        <p class="els-item-text">Rediģēt profila uzstādījumus</p>
                    </div>
                    <div class="col-sm-3">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/4.png">
                        <p class="els-item-text">Sazināties ar uzņēmumu</p>
                    </div>
                </div>
                <div class="container els-items clear-pads">
                    <div class="col-sm-4">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/5.png">
                        <p class="els-item-text">Klientu datu apstrāde un uzskaite</p>
                    </div>
                    <div class="col-sm-4">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/6.png">
                        <p class="els-item-text">ELS sistēmas operatoru autentifikācija</p>
                    </div>
                    <div class="col-sm-4">
                        <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/7.png">
                        <p class="els-item-text">Piedāvājumu veidošanu un rediģēšana</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <p class="els-text center">Operatoriem ir piešķirtas trīs veidu lietotāju tiesības. </p>
            <div class="container els-items clear-pads">
                <div class="col-sm-4 col-xs-6 clear-pads">
                    <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/11.png">
                    <h4 class="els-item-text">ELS Viewer</h4>
                </div>
                <div class="col-sm-4 col-xs-6 clear-pads">
                    <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/21.png">
                    <h4 class="els-item-text">ELS Admin</h4>
                </div>
                <div class="col-sm-4 clear-pads">
                    <img class="els-item-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/31.png">
                    <h4 class="els-item-text">ELS Superadmin</h4>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="container">
                <div class="els-quote">
                    <h1 class="els-title">Nozīmīgākais administratīvās daļas ieguvums ir piedāvājumu sadaļas</h1>
                    <p class="els-text">
                        To klāsts ir ļoti daudzveidīgs – speciālie piedāvājumi, papildus atlaides, kuponu veidošana,
                        piedāvājumi individuālajām personām un organizācijām.
                    </p>
                </div>

            </div>
        </div>

        <div id="yellow-bg2" class="col-xs-12">

                <div class="col-md-7 col-sm-6 col-xs-12 ipad-wrap">
                    <img class="els-block-image" src="http://ms-idi.eu/wp-content/uploads/2017/01/iPad-2-White.png">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 els-block-content">
                    <h1 class="els-block-title">ELS specifika un priekšrocības</h1>
                    <p class="els-block-text">• Krietni samazināts patērētais laiks piedāvājuma izstrādei; <br><br>
                        • Pārskatāma klientu datu bāze;<br><br>
                        • Daudzveidīgas piedāvājumu izveides un rediģēšanas iespējas;<br><br>
                        • Iespēja izmantot kā tehnisko pamatu citiem projektiem.</p>
                </div>

        </div>

        <div id="els-footer" class="col-xs-12">
            <div class="container">
                <h1 class="els-title center">ELS funkcijas</h1>
                <p class="els-text centred">• Sistēma ir pielāgota darbībai starptautiskajā līmenī, jo tā ir pieejama visās Eiropas valstīs, un&nbsp;klients var piekļūt     	  informācijai par pasažiera pārvadātāja piedāvājumiem jebkurā vietā un laikā. <br>
                    <br>
                    • Sistēma ir paredzēta darbībai lielas slodzes apstākļos – tā vienlaicīgi spēj apstrādāt lielu skaitu klientu un operatoru          	  darbību ar datiem. Šis faktors ir ļoti nozīmīgs klienta darbā, tā kā uzņēmums “Ecolines” pārvalda apjomīgu klientu datu bāzi. <br>
                    <br>
                    • ELS ir maksimāli elastīga attiecībā uz piedāvājumu variācijām, kas pirms tam nebija iespējamas, šobrīd tiek apvienoti dažādu bonusu un atlaižu veidi, pamatojoties uz pārvadātāja prasībām, proti, daudzveidīgiem parametriem, ar kuru palīdzību klientiem tiek veidoti braucienu piedāvājumi.
                </p>
            </div>
        </div>

    </div>
@endsection