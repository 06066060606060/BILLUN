<?php

namespace App\Http\Controllers\Admin\Operations;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

trait BulksiteOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupBulksiteRoutes($segment, $routeName, $controller)
    {
        Route::get($segment.'/bulksite', [
            'as'        => $routeName.'.bulksite',
            'uses'      => $controller.'@bulksite',
            'operation' => 'bulksite',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupBulksiteDefaults()
    {
        CRUD::allowAccess('bulksite');

        CRUD::operation('bulksite', function () {
            CRUD::loadDefaultOperationSettingsFromConfig();
        });

        CRUD::operation('list', function () {
             CRUD::addButton('top', 'bulksite', 'view', 'crud::buttons.bulksite');
            // CRUD::addButton('line', 'bulksite', 'view', 'crud::buttons.bulksite');
        
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function bulksite()
    {
        CRUD::hasAccessOrFail('bulksite');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
   

        // load the view
        return view('crud::operations.bulksite_form', $this->data);
    }
}