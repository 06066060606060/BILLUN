@extends(backpack_view('blank'))

@section('header')
    <section class="container-fluid">
        <h2>
            <span class="text-capitalize" selected>Ajouter une liste d'emails</span>
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
                            <li><i class="la la-info-circle" selected></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="/bulksaveemail" autocomplete="off">
                @csrf
                <div class="flex flex-col p-4 bg-white rounded-xl">



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
                        <div class="flex flex-col w-1/5 px-2">
                            <label>Adresse email:</label>
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="email" name="adresse[]" class="my-1 form-control" autocomplete="new-password">
                        </div>
                        <div class="flex flex-col w-1/5 px-2">
                            <label>Société:</label>
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="company[]" class="my-1 form-control" autocomplete="new-password">
                        </div>
                        <div class="flex flex-col w-1/5 px-2">
                            <label>prénom:</label>
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="firstname[]" class="my-1 form-control" autocomplete="new-password">
                        </div>
                        <div class="flex flex-col w-1/5 px-2">
                            <label>Nom:</label>
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="lastname[]" class="my-1 form-control" autocomplete="new-password">
                        </div>
                        <div class="flex flex-col w-1/5 px-2">
                            <label>Téléphone:</label>
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                            <input type="text" name="phone[]" class="my-1 form-control" autocomplete="new-password">
                        </div>
                       
                    </div>
                </div>


                <div id="saveActions" class="pt-2 form-group">
                    <input type="hidden" name="_save_action" value="save_list">
                    <button type="submit" class="btn btn-success">
                        <span class="la la-save" role="presentation" aria-hidden="true" selected></span> &nbsp;
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
