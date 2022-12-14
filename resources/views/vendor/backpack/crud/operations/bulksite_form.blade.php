@extends(backpack_view('blank'))

@section('header')
    <section class="container-fluid">
        <h2>
            <span class="text-capitalize">Ajouter une liste de sites</span>
        </h2>
    </section>
@endsection

@section('content')
    <div class="">
        <div class="bold-labels">
            @if ($errors->any())
                <div class="pb-0 alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li><i class="la la-info-circle"></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="/bulksave">
                @csrf
                <div class="flex flex-col p-4 bg-white rounded-xl">

                    <label>Urls:</label>

                    {{-- radio button to chose secure or not secure --}}
                    <div class="flex flex-row justify-center">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="secure" value="1" checked>
                            <span class="mx-2 text-green-800">Securisé</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="secure" value="0">
                            <span class="mx-2 text-red-800">Non Sécurisé</span>
                        </label>
                    </div>
                    <div class="flex w-full">
                        <div class="flex flex-col w-1/2 px-2">

                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                        </div>
                        <div class="flex flex-col w-1/2">

                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                            <input type="text" name="urls[]" class="my-1 form-control">
                        </div>
                    </div>
                </div>

                <div id="saveActions" class="pt-2 form-group">
                    <input type="hidden" name="_save_action" value="save_list">
                    <button type="submit" class="btn btn-success">
                        <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                        <span data>Enregister la liste</span>
                    </button>
                    <div class="btn-group" role="group">
                    </div>
                    <a href="{{ url($crud->route) }}" class="btn btn-default"><span class="la la-ban"></span>
                        &nbsp;Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
