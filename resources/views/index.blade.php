@extends('layouts.app')
@if (session('Message_envoye'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000, PopupUser())" class="flex justify-center w-full pt-1 pr-4">
        <div id="popmenu" class="px-4 py-2 text-xs btnmenu text-emerald-500">&zwnj; Email envoyé</div>
    </div>
@endif
@if (session('already_send'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000, PopupUser())" class="flex justify-center w-full pt-1 pr-4">
        <div id="popmenu" class="px-4 py-2 text-xs btnmenu text-emerald-500">&zwnj; Vous avez déja envoyé un
            message aujourd'hui</div>
    </div>
@endif
<script>
    function PopupUser() {
        console.log('okpop');
        var updateElement = document.getElementById("popmenu");
        updateElement.classList.toggle("active");

    }
</script>
@section('main')
    <!-- BLOCK 1 -->
    @include('parts.header')
    @include('parts.home')

@endsection
