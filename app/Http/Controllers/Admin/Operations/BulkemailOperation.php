<?php

namespace App\Http\Controllers\Admin\Operations;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

trait BulkemailOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupBulkemailRoutes($segment, $routeName, $controller)
    {
        Route::get($segment.'/bulkemail', [
            'as'        => $routeName.'.bulkemail',
            'uses'      => $controller.'@bulkemail',
            'operation' => 'bulkemail',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupBulkemailDefaults()
    {
        CRUD::allowAccess('bulkemail');

        CRUD::operation('bulkemail', function () {
            CRUD::loadDefaultOperationSettingsFromConfig();
        });

        CRUD::operation('list', function () {
             CRUD::addButton('top', 'bulkemail', 'view', 'crud::buttons.bulkemail');
            // CRUD::addButton('line', 'bulkemail', 'view', 'crud::buttons.bulkemail');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function bulkemail()
    {
        CRUD::hasAccessOrFail('bulkemail');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;


        // load the view
        return view('crud::operations.bulkemail_form', $this->data);
    }
}