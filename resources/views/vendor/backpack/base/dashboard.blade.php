@php use \App\Http\Controllers\GlobalController; @endphp
@extends(backpack_view('blank'))
@section('content')

    <section class="flex flex-col pt-1 md:flex-row">

        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-96 md:mr-4 mb-8">

        </div>
        <div class="flex md:w-1/2 bg-[#111827] rounded-xl h-96 md:ml-4">

            <div class="flex flex-col w-full mx-1 overflow-hidden">
            <h1 class="py-2 text-xl font-bold text-center text-white border-b border-gray-500">Dernieres Inscriptions</h1>
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
                        </tr>
                    </thead>
                    <tbody class="">
                        @php  $users = GlobalController::getUsers();@endphp
                        @foreach ($users as $user)
                            <tr class="mx-2 border-b border-gray-500">
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap time-container">
                                    {{ $user->name }}
                                </td>
                                <td class="p-4 text-sm font-normal text-gray-300 whitespace-nowrap rate-container">
                                    {{ $user->email }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    


    </section>

    <style>
        .ct-label {
            fill: black;
        }
    </style>
@endsection
