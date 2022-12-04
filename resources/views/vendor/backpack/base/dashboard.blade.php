@php use \App\Http\Controllers\GlobalController; @endphp
@php  $users = GlobalController::getUsers();@endphp
@php  $emails = GlobalController::getEmails();@endphp
@php  $sites = GlobalController::getSites();@endphp
@php  $sitesecure = GlobalController::getSitesecure();@endphp
@php  $sitesinsecure = GlobalController::getSitesinsecure();@endphp
@php  $settings = GlobalController::settings();@endphp

@extends(backpack_view('blank'))
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.css"
        integrity="sha512-V0+DPzYyLzIiMiWCg3nNdY+NyIiK9bED/T1xNBj08CaIUyK3sXRpB26OUCIzujMevxY9TRJFHQIxTwgzb0jVLg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="flex flex-col pt-1 md:flex-row">

        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-96 md:mr-4 mb-8 shadow-md shadow-black">
            <div class="flex flex-col w-full mx-1 overflow-auto">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Derniers Sites Ajoutés
                </h1>
                <table class="divide-y">
                    <thead class="">
                        <tr class="border-b border-gray-500 ">
                            <th scope="col"
                                class="pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                Verifié
                            </th>
                            <th scope="col"
                                class="pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Url
                            </th>
                            <th scope="col"
                                class="hidden pb-1 pl-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase lg:block">
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

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </section>

    <section class="flex flex-col pt-8 md:pt-1 md:flex-row">

        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-64 md:mr-4 mb-8 shadow-md shadow-black">
            <div class="flex flex-col w-full mx-1 overflow-hidden">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Statistiques
                </h1>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre de sites enregistrés : {{ $sites->count() }}
                </div>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre d'adresse email enregistrés : {{ $emails->count() }}
                </div>
                <div class="px-4 py-2 text-sm text-gray-300 whitespace-nowrap time-container">
                    Nombre de téléchargements: {{ $settings }}
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
            <div class="flex flex-col md:w-1/2 bg-[#111827] rounded-xl h-64 md:ml-4 shadow-md shadow-black">
            
                <div id="chartContainer" class=" flex w-[80%] h-64 mx-auto my-2 z-0">

            </div>
        @endif

    </section>











    <script>
        window.onload = function() {

            //chart 1 donut
            var chart = new CanvasJS.Chart("chartContainer", {
                    backgroundColor: "#111827",
                    animationEnabled: true,
                
                    data: [{
                        type: "doughnut",
                        showInLegend: true,
                        startAngle: 270,
                        innerRadius: 80,
                        
                        dataPoints: [{
                                y: {{ $sitesecure->count() }},
                                name: "Sécurisé",
                                color: "green",
                            },
                            {
                                y: {{ $sitesinsecure->count() }},
                                name: "Non Sécurisé",
                                color: "red"
                            },


                        ]
                    }],

                }

            );
            chart.render();
        };
    </script>
    <style>
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
