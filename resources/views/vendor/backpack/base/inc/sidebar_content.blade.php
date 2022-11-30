{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sites') }}"><i class="nav-icon la la-globe"></i> Sites</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('emails') }}"><i class="nav-icon la la-envelope"></i> Emails</a></li>

@if (backpack_user()->role == "admin")
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> Utilisateurs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Fichiers</span></a></li>
@endif