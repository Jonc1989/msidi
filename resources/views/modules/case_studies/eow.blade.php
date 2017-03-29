@extends('master')

@section('content')
    <div id="eow" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-info white">
            <h1 class="ows-title center">Ecolines Operators Workspace</h1>
            <p class="ows-text centred">Ecolines Operators Workspace&nbsp;(OWS) ir interaktīva informācijas
                sistēma, kas izstrādāta, lai uzlabotu pasažieru pārvadātāja “Ecolines” operatoru darba
                efektivitāti un klientu apakalpošanas procesus.
                Sistēma ļauj saņemt un organizēt datus par braucienu un ar to saistīto informāciju
                (par autobusu kustību, pieturām, maršrutu, braucieniem, pasažieru sarakstu, biļetēm u.c.).</p>


        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ows-technologies" style="background-image: url('<?= env('ROOT_PATH')?>/images/eow/BGffff.png')">
                <h4 class="ows-title">Tehnoloģijas</h4>
                <p class="ows-text">Laravel, AngularJS, PHP, HTML, CSS, JavaScript, Google Maps API</p>
            </div>
        </div>

        <div class="col-xs-12 clear-pads ows-about">
            <div class="col-sm-7 col-xs-12">
                <div class="ows-content-block">
                    <h1 class="ows-title">Par uzņēmumu</h1>
                    <p class="ows-text">ECOLINES ir lielākais pasažieru pārvadātājs Baltijā, kas nodrošina autobusu kustību uz 21 valsti un vairāk kā 200 pilsētām visā Austrumeiropā un
                        Rietumeiropā. Uzņēmums pārvadājumu tirgū darbojas jau 20 gadus.
                        Šajā laikā ECOLINES ir pierādījis, ka spēj nodrošināt kvalitatīvus pakalpojumus, un regulāri pilnveido to efektivitāti, tādējādi ir kļuvis par vienu no lielākajiem un veiksmīgākajiem Latvijas uzņēmumiem.</p>
                    <h3 class="ows-title">Ecolines Operators Workspace – visaptveroša informācija par autobusa kustību</h3>
                    <p class="ows-text">Projekta uzdevums – izstrādāt iekšējo uzņēmuma sistēmu, kuru varētu
                        pārvaldīt ECOLINES operatori. OWS realizācijā tika izmantota ELS (Ecolines Loyalty System) funkcionālā arhitektūra.</p>
                    <h4 class="ows-title">ECOLINES OWS pamatfunkcijas:</h4>
                    <p class="ows-text">• sniegt datus par autobusu kustību, pieturām, maršrutu, pasažieriem, biļetēm u.c. informāciju, kā arī veikt to filtrāciju;<br>
                        • atainot ģeogrāfiskos rādījumus interaktīvajā kartē (autobusa atrašanās vieta, maršruts, pārvietošanās).</p>
                </div>
            </div>
            <div class="col-sm-5 clear-pads">
                <div class="ows-float-right">
                    <img class="ows-map" src="<?= env('ROOT_PATH')?>/images/eow/1.png">
                </div>
            </div>
        </div>

        <div id="yellow-bg" class="col-xs-12">
            <h1 class="ows-title">Projekta īstenošana</h1>
            <p class="ows-text">Projekta īstenošanā piedalījās tā koordinators, programmētājs, dizaineris un testētājs.
                Darbs tika organizēts, izmantojot Agile metodoloģiju.</p>
            <p class="ows-text">Darba procesā tika izveidotas
                <b>autobusu, pieturu, braucienu, pasažieru, aģentu, garāžu, brauciena un biļetes detaļu</b>
                saraksta formas.
            </p>
            <div class="ows-maps center">
                <img src="<?= env('ROOT_PATH')?>/images/eow/Maps.png">
            </div>

        </div>

        <div class="ows-features col-xs-12">
            <h1 class="ows-title">Interaktīvās kartes iespēju daudzveidība</h1>
            <p class="ows-text">Sistēma Ecolines OWS tika izstrādāta, izmantojot&nbsp;Google Maps&nbsp;API rīkus un metodes, kas ļauj atainot ģeogrāfisko informāciju, līdz ar to ir iespējams izveidot personalizētu ECOLINES vietni.</p>
            <p class="ows-text">Vietne satur <b>detalizētu informāciju par katra autobusa kustību un sastāvu:</b></p>
            <div class="ows-list row">
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Atrašanās vieta</div><div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Pasažieru saraksts</div><div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Autobusu garāžu saraksts</div><div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Maršrutā esošās pieturas</div><div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Nopirktās biļetes</div><div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Informācija par ECOLINES aģentiem un viņu dislokāciju</div>        </div>
            <p class="ows-text bold">Informācija par konkrēto maršrutu regulāri tiek koordinēta, un operators ir informēts par tā atrašanās vietu vai braukšanas situāciju, piemēram, kavēšanos, izmaiņām, ko radījuši satiksmes ierobežojumi, u.tml.</p>
        </div>

        <div id="yellow-bg2" class="col-xs-12 clear-pads">
            <div class="col-lg-6 clear-pads">
                <img src="<?= env('ROOT_PATH')?>/images/eow/planchet.png">
            </div>
            <div class="col-lg-6 text-column">
                <p class="ows-text">Ecolines OWS nodrošina pieeju daudzveidīgiem un apjomīgiem datiem, tādēļ
                    ir paredzēta to filtrācija, apstrāde, datu eksports XLS formātā un ievietošana noteiktās
                    formās, lai operators var strādāt ar sev nepieciešamo informāciju, piemēram, konkrētām datu kombinācijām.
                </p>
                <p class="ows-text bold">Šīs iespējas ļauj izsekot uzņēmuma produktivitātei, jo iegūtie dati
                    reprezentē autobusu kustības regularitāti un precizitāti, tādējādi ir
                    iespējams veiksmīgi plānot turpmākos maršrutus.
                </p>

            </div>
        </div>

        <div class="ows-benefits col-xs-12 clear-pads">
            <h1 class="ows-title">ECOLINES operatoru darba efektivitātes uzlabojums</h1>
            <div class="ows-list row">
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Ērts lietotnes dizains</div>
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Datu pārskatamība</div>
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Filtrācija</div>
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Logrīku daudzveidība interaktīvajā kartē</div>
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Pārvietošanās atainojums reālajā laikā</div>
                <div class="ows-list-item col-sm-4 col-xs-12"><span class="ows-line">|</span>Sistēmas darbības ātrums</div>
            </div>

            <div class="center">
                <img class="ows-quality hidden-xs" src="<?= env('ROOT_PATH')?>/images/eow/scheme.png">
                <img class="ows-quality visible-xs-inline" style="margin-left: -60px"
                     src="<?= env('ROOT_PATH')?>/images/eow//Scheme_mob.png">
            </div>

        </div>
    </div>


@endsection