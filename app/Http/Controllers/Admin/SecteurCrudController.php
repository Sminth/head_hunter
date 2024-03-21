<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SecteurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SecteurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SecteurCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Secteur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/secteur');
        CRUD::setEntityNameStrings('un secteur ', 'secteurs d\'activité');
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
            'name' => 'libelle',
            'label' => 'Libelle',
        ]);


        // CRUD::setFromDb(); // set columns from db columns.
        $this->crud->addColumn([   // Upload
            'name'      => 'image',
            'label'     => 'image',
            'type'      => 'image',
            "disk" => "public"
            ]);



        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        // CRUD::setValidation(SecteurRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        $this->crud->addField([
            'name' => 'libelle',
            'label' => 'Libelle',
            'placeholder' => 'Votre libelle',
            'validationRules' => 'required|min:2',
            'validationMessages' => [
                'required' => 'ce champs est requis',
                'min' => 'More than 2 characters, bro. Wtf... You can do this!',
            ]
        ]);

        CRUD::addField([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true
            ]);


        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
