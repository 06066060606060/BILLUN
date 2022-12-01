@if ($crud->hasAccess('bulksite'))
<a  href="{{ url($crud->route.'/bulksite') }}">
<button class="text-white bg-blue-500 btn btn-primary"><i class="la la-save"></i> Ajouter liste de sites</button></a>
@endif