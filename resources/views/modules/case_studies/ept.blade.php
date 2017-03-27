@extends('master')

@section('content')
    <div id="ept" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-info ">
            <h1 class="ept-title center">ECOLINES PASSENGER TABLET</h1>
            <p class="ept-text centred">EPT - programmnodrošinājums, kas tika izstrādāts "Ecolines"
                autobusos pieejamajiem planšetdatoriem, lai brauciena laikā pasažieri varētu izmantot
                dažāda veida mediju saturu (kino, mūzika), spēles, globālo tīmekli, kā arī sekot brauciena maršrutam.
            </p>

            <div class="device-wrap col-xs-12 center">
                <img src="<?= env('ROOT_PATH')?>/images/ept/device.png">
            </div>

        </div>

        <div id="yellow-city" class="col-xs-12 clear-pads">
            <h1 class="ept-title">Par klientu</h1>
            <p class="ept-text">“ECOLINES” ir pasažieru pārvadājumu sniedzējs, kas piedāvā plašu braucienu maršrutu tīklu pa&nbsp;Baltiju, Eiropu, Krieviju un bijušajām NVS valstīm. Kopumā autobusu kustība tiek nodrošināta uz&nbsp;205 pilsētām.&nbsp;"ECOLINES" lepojas ar
                20 gadu pieredzi autobusu kustības jomā, tādēļ šobrīd ir kļuvis par vadošo&nbsp;autobusu operatoru Latvijā un Baltijā.
                Uzņēmums regulāri veic uzlabojumus savā darbībā, lai nodrošinātu kvalitatīvus pasažieru pārvadātāja
                pakalpojumus vietējā un starptautiskā līmenī.
            </p>
        </div>

        <div class="ept-project">
            <div class="col-sm-4 col-xs-12">
                <img class="ept-image" src="http://ms-idi.eu/wp-content/uploads/2017/02/11.png">
                <h2 class="ept-title">Problēma</h2>
                <p class="ept-text">Brauciens parasti ilgst vairākas stundas – nogurdinošs process</p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <img class="ept-image" src="http://ms-idi.eu/wp-content/uploads/2017/02/21.png">
                <h2 class="ept-title">ECOLINES risinājums</h2>
                <p class="ept-text">“ECOLINES” katram pasažierim autobusā nodrošina planšetdatoru</p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <img class="ept-image" src="http://ms-idi.eu/wp-content/uploads/2017/02/3.png">
                <h2 class="ept-title">MS-IDI risinājums</h2>
                <p class="ept-text">"MS-IDI" izstrādāja programmatūras paku
                    "Passenger Table Launcher" (EPL), kuru veido šādi moduļi: saskarnes valoda, kino, mūzika,
                    audiogrāmatas, globālais tīmeklis, spēles, maršruts, rokasgrāmata un informācija.</p>
            </div>
        </div>

        <div class="col-xs-12 clear-pads" id="yellow-shape">
            <img class="side-image hidden-sm hidden-xs v1" src="<?= env('ROOT_PATH')?>/images/ept/v1.png">
            <h1 class="ept-title">Projekta izstrāde - neordināru risinājumu process</h1>
            <p class="ept-item"><span class="ept-item-number-1">1</span><span class="ept-item-text">
                    Programmatūra tika pielāgota planšetdatora specifikai
                    (darbības funkcijas un iespējas ierobežoja dažādi ražotāju uzstādījumi),
                    saglabājot programmatūras funkcionalitāti pilnā apjomā;</span>
            </p>

            <p class="ept-item"><span class="ept-item-number-2">2</span><span class="ept-item-text">
                    Esošās operētājsistēmas&nbsp;tehnisko nianšu papildināšana; projekta gaitā tika ieviesti
                    arī vairāki uzlabojumi, piemēram, sava karšu sistēma, tā kā planšetdatorā nebija GPS moduļa;
                </span>
            </p>

            <p class="ept-item"><span class="ept-item-number-3">3</span><span class="ept-item-text">Mediju izmantošanas laikā notiek to mijiedarbība, proti, moduļi nepārklājas, bet uzsāk un turpina darbību neatkarīgi no iepriekšējā moduļa&nbsp;izmantošanas pozīcijas;</span></p>

            <p class="ept-item"><span class="ept-item-number-4">4</span><span class="ept-item-text">Katrs&nbsp;interaktīvais mediju modulis ir papildināts ar noteiktiem uzstādījumiem, piemēram, kino sadaļā (skatīšanās valodas izvēle), mūzikas pārlūka ievietošana un audiogrāmatu pārraidīšana, reklāmas moduļa daudzveidība (iekšējās un pasūtījuma reklāmas);</span></p>

            <p class="ept-item"><span class="ept-item-number-5">5</span><span class="ept-item-text">Novators aplikācijas grafiskais dizains.</span></p>

            <img class="side-image hidden-sm hidden-xs v2" src="<?= env('ROOT_PATH')?>/images/ept/v2.png">
            <img class="side-image hidden-sm hidden-xs v3" src="<?= env('ROOT_PATH')?>/images/ept/v3.png">
        </div>

        <div class="ept-team col-xs-12 clear-pads">
            <h1 class="ept-title">Projekta izpilde</h1>
            <p class="ept-text">Izmantojot Agile metodoloģiju, nodrošināta projekta pārredzamība, nepārtraukta attīstība un efektivitātes novērtējums. </p>
            <p class="ept-text">Iesaistītas 3 personas: projekta koordinators, mobilo aplikāciju izstrādātājs un “Ecolines” pārstāvis IT jomā. Nelielais projektā iesaistīto darbinieku skaits&nbsp;paildzināja tā norisi, taču produkta izstrādes laikā bija iespējams izmēģināt un ieviest sākotnēji neieplānoto funkcionalitāti un novērtēt programmatūras darbības efektivitāti, kā arī vairāk laika bija veltīts produkta testēšanai.</p>
        </div>

        <div class="col-xs-12 clear-pads" id="yellow-shape2">
            <h1 class="ept-title">PASSENGER TABLE LAUNCHER – DAUDZVEIDĪGA MEDIJU SATURA KOMPLEKTS</h1>
            <p class="ept-text">Elektroniskās ierīces ir&nbsp;paredzētas katram sēdētājam individuāli, pamatojoties
                uz viņa biļetes/sēdvietas numuru, lai nodrošinātu&nbsp;daudzveidīgas pasažieru laika
                pavadīšanas iespējas brauciena laikā,&nbsp;piedāvājot dažādu mediju saturu, kā arī komerciālo informāciju.
            </p>

            <h3 class="ept-sub-title">Programmatūras pakas “Passenger Tablet Launcher” interaktīvie moduļi:</h3>

            <div class="els-table">
                <div class="ept-block">
                    <p class="ept-title center">Publiskā daļa</p>
                    <p class="ept-text">Informācija par autobusa maršrutu un laiku,
                        EPL lietošanas instrukcija, Informācija par laikapstākļiem.</p>
                </div>
                <div class="ept-block">
                    <h4 class="ept-title center">Administratīvā daļa</h4>
                    <p class="ept-text">Kino, mūzika, audiogrāmatas,
                        globālais tīmeklis, spēles, reklāma.</p>
                </div>
            </div>
        </div>

        <div class="ept-evolution col-xs-12 clear-pads">
            <h1 class="ept-title">Līdzdalība "ECOLINES"&nbsp;informācijas tehnoloģiju attīstības jomā</h1>
            <p class="ept-text">Ir izveidota pamata aplikācijas paka, ko var izmantot kā bāzi "ECOLINES" sadarbības partneriem citās valstīs; konkrētais pasažieru pārvadātājs aplikācijā var veikt sev nepieciešamās izmaiņas, kas tiek automātiski
                saglabātas; procesā netiek izmainīta ierīces funkcionalitāte;</p>
            <p class="ept-text">Stabilitāte un sistēmas nodrošinājums, kas ļauj to&nbsp;pielāgot turpmākajiem uzņēmuma "ECOLINES" informācijas tehnoloģiju attīstības plāniem;</p>
            <p class="ept-text">Ērtas un daudzveidīgas planšetdatora izmantošanas iespējas transportlīdzeklī.</p>
            <h5 class="ept-sub-title">Uzlabota pasažieru apkalpošanas kvalitāte – pamats dinamiskai uzņēmuma attīstībai.</h5>
        </div>

        <div class="col-xs-12 clear-pads">
            <img src=>
        </div>

    </div>

@endsection