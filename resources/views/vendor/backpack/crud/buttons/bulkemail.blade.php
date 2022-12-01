@if ($crud->hasAccess('bulkemail'))
<a  href="{{ url($crud->route.'/bulkemail') }}">
<button class="text-white bg-blue-500 btn btn-primary"><i class="la la-save"></i> Ajouter liste d'emails</button></a>
@endif