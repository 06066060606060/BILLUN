@php use \App\Http\Controllers\GlobalController; @endphp
@php  $users = GlobalController::getUsers();@endphp
@php  $emails = GlobalController::getEmails();@endphp
@php  $sites = GlobalController::getSites();@endphp

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
        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-96 md:ml-4 shadow-md shadow-black">

            <div class="flex flex-col w-full mx-1 overflow-auto">
                <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Derniéres Inscriptions
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.js"
            integrity="sha512-jG3l4wynNj06R0w9JW1WZaCDPvhqa4yz8EAVjYzWqibarcn8JeFDyNtUytcr7Idx+laN7OQDaoDNmUAI4nB1qA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                    Nombre d'utilisateurs : {{ $users->count() }}
                </div>
                <div class="px-4 py-1 text-sm text-gray-300 whitespace-nowrap time-container">
                @php $urls = env('APP_URL')&'/api/Site/Control' @endphp
                    @if (curl_init($urls) !== false)
                       API Online  <span class="px-2 py-1 text-xs font-medium leading-4 text-green-800 rounded-full">
                         <i class="las la-check la-2x"></i>
                        </span>
                    @else
                        API Offline  <span class="px-2 py-1 text-xs font-medium leading-4 text-red-800 rounded-full">
                            <i class="las la-times la-2x"></i>
                        </span>
                    @endif
                </div>
            </div>

        </div>
        <div class="flex flex-col md:w-1/2 bg-[#111827] rounded-xl h-64 md:ml-4 shadow-md shadow-black">
            <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Historique
            </h1>
            <div class="h-48 ct-chart ct-perfect-fourth"></div>

        </div>


    </section>











    <script>
        window.onload = function() {
            // chart 2 bar

            new Chartist.Bar('.ct-chart', {
                labels: ['September', 'October', 'November'],
                series: [{
                        className: "stroke-blue",
                        data: [450, 220, 180]
                    },
                    {
                        className: "stroke-black",
                        data: [100, 420, 40]
                    },
                    {
                        className: "stroke-grayd",
                        data: [390, 170, 280]
                    },
                    {
                        className: "stroke-grayl",
                        data: [300, 520, 310]
                    },
                ]
            }, {
                // Default mobile configuration
                stackBars: true,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value.split(/\s+/).map(function(word) {
                            return word[0];
                        }).join('');
                    }
                },
                axisY: {
                    offset: 20
                }
            }, [
                // Options override for media > 400px
                ['screen and (min-width: 300px)', {
                    reverseData: false,
                    horizontalBars: false,
                    stackBars: false,
                    axisX: {
                        labelInterpolationFnc: Chartist.noop
                    },
                    axisY: {
                        offset: 60
                    }
                }],
                // Options override for media > 800px
                ['screen and (min-width: 800px)', {
                    stackBars: false,
                    seriesBarDistance: 10
                }],
                // Options override for media > 1000px
                ['screen and (min-width: 1000px)', {
                    reverseData: false,
                    horizontalBars: false,
                    seriesBarDistance: 30
                }]
            ]);
        }
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



        .ct-label .ct-horizontal .ct-end {
            fill: white;
        }

        .ct-chart .ct-series.stroke-blue .ct-bar {
            stroke: #1E9FD9;
        }

        .ct-chart .ct-series.stroke-black .ct-bar {
            stroke: rgb(0, 0, 0);
        }

        .ct-chart .ct-series.stroke-grayd .ct-bar {
            stroke: rgba(73, 73, 73, 0.8);
        }

        .ct-chart .ct-series.stroke-grayl .ct-bar {
            stroke: rgba(164, 164, 164, 0.8);
        }

        .ct-label {
            margin-top: 10px;
            font-size: 18px;
        }

        .canvasjs-chart-credit {
            display: none;
        }

        .chartContainer>img {
            display: none;
        }

        .ct-label {
            color: white;
        }
    </style>
@endsection
