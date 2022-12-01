<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EmailsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EmailsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EmailsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \App\Http\Controllers\Admin\Operations\BulkemailOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Emails::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/emails');
        CRUD::setEntityNameStrings('email', 'emails');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('secure')->label('Verifié')->type('boolean');
        CRUD::column('adresse');
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
        CRUD::setValidation(EmailsRequest::class);

        CRUD::field('adresse');
        $this->crud->addField(
            [   // select_from_array
            'name'        => 'secure',
            'label'       => "Vérifié",
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
        // CRUD::field('utilisateur');
        // CRUD::field('categorie');

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
