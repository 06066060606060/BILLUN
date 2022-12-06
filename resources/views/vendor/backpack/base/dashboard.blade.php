@php use \App\Http\Controllers\GlobalController; @endphp
@php  $users = GlobalController::getUsers();@endphp
@php  $emails = GlobalController::getEmails();@endphp
@php  $emailsecure = GlobalController::getEmailsecure();@endphp
@php  $emailinsecure = GlobalController::getEmailinsecure();@endphp
@php  $sites = GlobalController::getSites();@endphp
@php  $allsites = GlobalController::getallSites();@endphp
@php  $sitesecure = GlobalController::getSitesecure();@endphp
@php  $sitesinsecure = GlobalController::getSitesinsecure();@endphp
@php  $settings = GlobalController::settings();@endphp
@extends(backpack_view('blank'))
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.css"
        integrity="sha512-V0+DPzYyLzIiMiWCg3nNdY+NyIiK9bED/T1xNBj08CaIUyK3sXRpB26OUCIzujMevxY9TRJFHQIxTwgzb0jVLg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="flex flex-col pt-1 md:flex-row">

        <div x-data="{ tab: 'description' }" id="tab_wrapper"
            class="flex flex-col md:w-1/2 bg-[#111827] rounded-xl h-96 md:mr-4 mb-8 shadow-md shadow-black">
            <div class="flex justify-around  border-b border-gray-500 py-2 ">
                <a :class="{ 'active': tab === 'description' }" @click.prevent="tab = 'description'" href="#">
                    <h1 class="text-xs lg:text-lg font-bold text-center text-white">Derniers Sites Ajoutés</h1>
                </a>
                @if (backpack_user()->role == 'admin')
                    <a :class="{ 'active': tab === 'reviews' }" @click.prevent="tab = 'reviews'" href="#">
                        <h1 class="text-xs lg:text-lg font-bold text-center text-white">Derniers Sites Signalés</h1>
                    </a>
                @endif
            </div>
            <div class="flex flex-col w-full overflow-auto">
                <table x-show="tab === 'description'" class="divide-y">
                    <thead class="">
                        <tr class="border-b border-gray-500">
                            <th scope="col"
                                class="py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                Verifié
                            </th>
                            <th scope="col"
                                class="py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Url
                            </th>
                            <th scope="col"
                                class="hidden py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase lg:block">
                                Editer
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @foreach ($allsites->take(6) as $allsite)
                            <tr class="mx-2 border-b border-gray-500">
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap time-container">
                                    @if ($allsite->secure == 1)
                                        <span class="px-2 py-1 text-xs font-medium leading-4 text-green-800 rounded-full">
                                            <i class="las la-check la-2x"></i>
                                        </span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium leading-4 text-red-800 rounded-full">
                                            <i class="las la-times la-2x"></i>
                                        </span>
                                    @endif
                                </td>
                                <td
                                    class="xl:max-w-[230px] max-w-[165px] p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container overflow-hidden">
                                    {{ $allsite->url }}
                                </td>
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container">
                                    <a href="/admin/sites/{{ $allsite->id }}/edit">
                                        <i class="las la-edit la-2x"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <table x-show="tab === 'reviews'" class="divide-y">
                    <thead class="">
                        <tr class="border-b border-gray-500">
                            <th scope="col"
                                class="py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                Verifié
                            </th>
                            <th scope="col"
                                class="py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Url
                            </th>
                            <th scope="col"
                                class="hidden py-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase lg:block">
                                Editer
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @foreach ($sites->take(6) as $site)
                            <tr class="mx-2 border-b border-gray-500">
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap time-container">
                                    @if ($site->secure == 1)
                                        <span class="px-2 py-1 text-xs font-medium leading-4 text-green-800 rounded-full">
                                            <i class="las la-check la-2x"></i>
                                        </span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium leading-4 text-red-800 rounded-full">
                                            <i class="las la-times la-2x"></i>
                                        </span>
                                    @endif
                                </td>
                                <td
                                    class="xl:max-w-[230px] max-w-[165px] p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container overflow-hidden">
                                    {{ $site->url }}
                                </td>
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container">
                                    <a href="/admin/sites/{{ $site->id }}/edit">
                                        <i class="las la-edit la-2x"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>
        @if (backpack_user()->role == 'admin')
            <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-96 md:ml-4 shadow-md shadow-black">
                <div class="flex flex-col w-full mx-1 overflow-auto">
                    <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Derniéres
                        Inscriptions
                    </h1>
                    <table class="divide-y ">
                        <thead class="">
                            <tr class="border-b border-gray-500 ">
                                <th scope="col"
                                    class="pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                    Nom
                                </th>
                                <th scope="col"
                                    class="pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Email
                                </th>
                                <th scope="col"
                                    class="pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Role
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">

                            @foreach ($users as $user)
                                <tr class="mx-2 border-b border-gray-500">
                                    <td
                                        class="max-w-[200px] p-4 text-sm font-normal text-gray-300 whitespace-nowrap time-container  overflow-hidden">
                                        {{ $user->name }}
                                    </td>
                                    <td
                                        class="xl:max-w-[230px] max-w-[165px]  p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container overflow-hidden">
                                        {{ $user->email }}
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container">
                                        {{ $user->role }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        {{-- 
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.js"
            integrity="sha512-jG3l4wynNj06R0w9JW1WZaCDPvhqa4yz8EAVjYzWqibarcn8JeFDyNtUytcr7Idx+laN7OQDaoDNmUAI4nB1qA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </section>

    <section class="flex flex-col pt-8 md:pt-1 md:flex-row">

        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-72 md:mr-4 mb-8 shadow-md shadow-black">
            <div class="flex flex-col w-full mx-1 overflow-hidden">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Statistiques
                </h1>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre de sites enregistrés : {{ $allsites->count() }}
                </div>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre d'adresse email enregistrés : {{ $emails->count() }}
                </div>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre de téléchargement local : {{ $settings }}
                </div>
                <div id="totaldown" class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                </div>
                @if (backpack_user()->role == 'admin')
                    <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                        Nombre d'utilisateurs : {{ $users->count() }}
                    </div>
                @endif
                <div class="px-4 py-1 text-sm text-gray-300 whitespace-nowrap time-container">
                    @php $urls = env('APP_URL')&'/api/Site/Control' @endphp
                    @if (curl_init($urls) !== false)
                        API Online <span class="px-2 py-1 text-xs font-medium leading-4 text-green-800 rounded-full">
                            <i class="las la-check la-2x"></i>
                        </span>
                    @else
                        API Offline <span class="px-2 py-1 text-xs font-medium leading-4 text-red-800 rounded-full">
                            <i class="las la-times la-2x"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        @if (backpack_user()->role == 'admin')
            <div class="flex flex-col md:w-1/4 bg-[#111827] rounded-xl h-72 md:ml-4 shadow-md shadow-black mb-4">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Sites:</h1>
                <div class="ct-chart z-0 flex mx-auto w-auto py-1">
                </div>
                <div class="flex justify-center">
                    <li class="flex flex-row mx-2 pb-2">
                        <div class="w-4 h-4 bg-green-600 rounded-full"></div>
                        <div class="ml-2 text-sm text-gray-300">Sécurisé</div>
                    </li>
                    <li class="flex flex-row mx-2 pb-2">
                        <div class="w-4 h-4 bg-red-600 rounded-full"></div>
                        <div class="ml-2 text-sm text-gray-300">Non Sécurisé</div>
                    </li>
                </div>
            </div>
            <div class="flex flex-col md:w-1/4 md:pt-0 bg-[#111827] rounded-xl h-72 md:ml-4 shadow-md shadow-black">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Emails:</h1>
                <div class="ct-chart2 z-0 flex mx-auto w-auto py-1">
                </div>
                <div class="flex justify-center">
                    <li class="flex flex-row mx-2 pb-2">
                        <div class="w-4 h-4 bg-green-600 rounded-full"></div>
                        <div class="ml-2 text-sm text-gray-300">Sécurisé</div>
                    </li>
                    <li class="flex flex-row mx-2 pb-2">
                        <div class="w-4 h-4 bg-red-600 rounded-full"></div>
                        <div class="ml-2 text-sm text-gray-300">Non Sécurisé</div>
                    </li>
                </div>
            </div>
        @endif

    </section>
    @if (backpack_user()->role == 'admin')
        <p class="rounded text-xs py-2  bg-gray-900 text-gray-200 w-full px-4">
            Derniéres mise à jour: <br>
            -nettoyage des entrées http/https.<br>
            -filtrage entrées unique.
        </p>
    @endif


    <script>
        $(function() {
            $('#navigation').click(function() {
                $('#navigation').removeClass('selected');
                $(this).addClass('selected');

            });
        });


        window.onload = function() {

            var chart = new Chartist.Pie('.ct-chart', {
                series: [{{ $sitesecure->count() }}, {{ $sitesinsecure->count() }}],

                labels: [{{ $sitesecure->count() }}, {{ $sitesinsecure->count() }}]
            }, {
                donut: true,
                donutWidth: 30,
                showLabel: true,
            });

            chart.on('draw', function(data) {
                if (data.type === 'slice') {
                    // Get the total path length in order to use for dash array animation
                    var pathLength = data.element._node.getTotalLength();

                    // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                    data.element.attr({
                        'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                    });

                    // Create animation definition while also assigning an ID to the animation for later sync usage
                    var animationDefinition = {
                        'stroke-dashoffset': {
                            id: 'anim' + data.index,
                            dur: 1000,
                            from: -pathLength + 'px',
                            to: '0px',
                            easing: Chartist.Svg.Easing.easeOutQuint,
                            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                            fill: 'freeze'
                        }
                    };

                    // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                    if (data.index !== 0) {
                        animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                    }

                    // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
                    data.element.attr({
                        'stroke-dashoffset': -pathLength + 'px'
                    });

                    // We can't use guided mode as the animations need to rely on setting begin manually
                    // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                    data.element.animate(animationDefinition, false);
                }
            });


            var chart2 = new Chartist.Pie('.ct-chart2', {
                series: [{{ $emailsecure->count() }}, {{ $emailinsecure->count() }}],

                labels: [{{ $emailsecure->count() }}, {{ $emailinsecure->count() }}]
            }, {
                donut: true,
                donutWidth: 30,
                showLabel: true,
            });

            chart.on('draw', function(data) {
                if (data.type === 'slice') {
                    // Get the total path length in order to use for dash array animation
                    var pathLength = data.element._node.getTotalLength();

                    // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                    data.element.attr({
                        'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                    });

                    // Create animation definition while also assigning an ID to the animation for later sync usage
                    var animationDefinition = {
                        'stroke-dashoffset': {
                            id: 'anim' + data.index,
                            dur: 1000,
                            from: -pathLength + 'px',
                            to: '0px',
                            easing: Chartist.Svg.Easing.easeOutQuint,
                            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                            fill: 'freeze'
                        }
                    };

                    // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                    if (data.index !== 0) {
                        animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                    }

                    // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
                    data.element.attr({
                        'stroke-dashoffset': -pathLength + 'px'
                    });

                    // We can't use guided mode as the animations need to rely on setting begin manually
                    // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                    data.element.animate(animationDefinition, false);
                }
            });

            var chromeExtensionWebstoreURL =
                'https://chrome.google.com/webstore/detail/billun/ecodhgndejkcckkabdnigikdcdhchfgc';

            $.getJSON('https://api.allorigins.win/get?url=' + encodeURIComponent(chromeExtensionWebstoreURL) +
                '&callback=?',
                function(response) {
                    var numUsers = (("" + response.contents.match(
                        /<span class="e-f-ih" title="([\d]*?) users">([\d]*?) users<\/span>/)).split(",")[
                        2]);

                    document.getElementById("totaldown").innerHTML = "Nombre de téléchargement WebStore: " +
                        numUsers;
                });
        };
    </script>
    <style>
        .selected {
            color: blue;
        }

        .ct-series-a .ct-bar,
        .ct-series-a .ct-line,
        .ct-series-a .ct-point,
        .ct-series-a .ct-slice-donut {
            stroke: green;
        }

        .ct-series-b .ct-bar,
        .ct-series-b .ct-line,
        .ct-series-b .ct-point,
        .ct-series-b .ct-slice-donut {
            stroke: red;
        }

        .ct-chart {
            margin: auto;
            width: 300px;
            height: 300px;
        }

        .ct-chart2 {
            margin: auto;
            width: 300px;
            height: 300px;
        }

        .ct-label {
            margin-top: 10px;
            font-size: 14px;
            fill: white;
        }



        * {
            scrollbar-width: thin;
            scrollbar-color: #86878B #05070C;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            margin-top: 5px;
            margin-bottom: 5px;
            background: #05070C;
            border-radius: 5px;
        }

        *::-webkit-scrollbar-thumb {
            margin-top: 5px;
            background-color: #86878B;
            border-radius: 14px;
            border: 3px solid #05070C;
        }

        .canvasjs-chart-credit {
            display: none;
        }

        .chartContainer>img {
            display: none;

        }
    </style>
@endsection
