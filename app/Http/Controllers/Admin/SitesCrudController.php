<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SitesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SitesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SitesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \App\Http\Controllers\Admin\Operations\BulksiteOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Sites::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sites');
        CRUD::setEntityNameStrings('site', 'sites');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name'    => 'secure',
            'label'   => 'Sécurisé',
            'type'    => 'boolean',
            'options' => [0 => 'Non', 1 => 'Oui'], // optional
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($column['text'] == 'Oui') {
                        return 'badge badge-success';
                    } else {
                        return 'badge badge-danger';
                    }
        
                    return 'badge badge-default';
                },
            ],
        ]);
        CRUD::column('url');
        // CRUD::column('categorie');
        CRUD::column('updated_at')->label('Date');;

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SitesRequest::class);

        CRUD::field('url');
        $this->crud->addField(
            [   // select_from_array
            'name'        => 'secure',
            'label'       => "Status",
            'type'        => 'select_from_array',
            'options'     => [
                '1' => 'Securisé',
                '0' => 'Non Sécurisé',
            ],
            'allows_null' => false,
            'default'     => 'one',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        // $this->crud->addField([   // select_from_array
        //     'name'        => 'pays',
        //     'label'       => "Pays",
        //     'type'        => 'select_from_array',
        //     'options'     => [
        //         '1' => 'Autre',
        //         '0' => 'France',
        //     ],
        //     'allows_null' => false,
        //     'default'     => '1',
        //     // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        // ]);
        // $this->crud->addField([   // select_from_array
        //     'name'        => 'categorie',
        //     'label'       => "Categories",
        //     'type'        => 'select_from_array',
        //     'options'     => [
        //         '0' => 'Divers',
        //         '1' => 'option 1',
        //     ],
        //     'allows_null' => false,
        //     'default'     => '0',
        //     // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        // ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
