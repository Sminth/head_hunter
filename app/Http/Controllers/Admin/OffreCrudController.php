<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OffreRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OffreCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OffreCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Offre::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/offre');
        CRUD::setEntityNameStrings('offre', 'offres');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::addButtonFromModelFunction('line', 'voir candidats', 'openCandidats', 'beginning');
        $this->crud->addColumn([
            'name' => 'libelle',
            'label' => 'Intitulé',

        ]);




        $this->crud->addColumn(
            [
                'label'     => 'Entreprise', // Table column heading
                'type'      => 'select',
                'name'      => 'identreprise', // the column that contains the ID of that connected entity;
                'entity'    => 'entreprise', // the method that defines the relationship in your Model
                'attribute' => 'libelle', // foreign key attribute that is shown to user
                'model'     => "App\Models\\entreprise", // foreign key model
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],
        );

        $this->crud->addColumn(
            [
                'label'     => 'Domaine', // Table column heading
                'type'      => 'select',
                'name'      => 'idsecteur', // the column that contains the ID of that connected entity;
                'entity'    => 'secteur', // the method that defines the relationship in your Model
                'attribute' => 'libelle', // foreign key attribute that is shown to user
                'model'     => "App\Models\secteur", // foreign key model
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],
        );

        $this->crud->addColumn(
            [
                'name'    => 'type',
                'label'   => 'Type de contrat',
                           ]
        );




        $this->crud->addColumn([
            'name' => 'date_cloture',
            'type' => 'date',
            'label' => 'Date de cloture ',
            'wrapper'   => [
                'class'      => 'form-group col-md-6'
             ],
        ]);



        $this->crud->addColumn(
            [
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'upload',
                'withFiles' => true,
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],

        );


        $this->crud->addColumn(
            [
                'name'    => 'status',
                'label'   => 'Status',

            ]

        );

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
        // CRUD::setValidation(OffreRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.



        $this->crud->addField([
            'name' => 'libelle',
            'label' => 'Intitulé',
            'validationRules' => 'required|min:2',
            'validationMessages' => [
                'required' => 'ce champs est requis',
                'min' => 'More than 2 characters, bro. Wtf... You can do this!',
            ]
        ]);


        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'summernote',
            'validationRules' => 'required|min:2',
            'validationMessages' => [
                'required' => 'ce champs est requis',
                'min' => 'More than 2 characters, bro. Wtf... You can do this!',
            ]
        ]);


        $this->crud->addField(
            [
                'label'     => 'Entreprise', // Table column heading
                'type'      => 'select',
                'name'      => 'identreprise', // the column that contains the ID of that connected entity;
                // 'entity'    => 'parent', // the method that defines the relationship in your Model
                'attribute' => 'libelle', // foreign key attribute that is shown to user
                'model'     => "App\Models\\entreprise", // foreign key model
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],
        );

        $this->crud->addField(
            [
                'label'     => 'Domaine', // Table column heading
                'type'      => 'select',
                'name'      => 'idsecteur', // the column that contains the ID of that connected entity;
                // 'entity'    => 'parent', // the method that defines the relationship in your Model
                'attribute' => 'libelle', // foreign key attribute that is shown to user
                'model'     => "App\Models\secteur", // foreign key model
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],
        );

        $this->crud->addField(
            [
                'name'    => 'type',
                'label'   => 'Type de contrat',
                'type'    => 'select_from_array',
                'options' => ['CDD' => 'CDD', 'CDI' => 'CDI', 'Stage' => 'Stage'],
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ]
        );


        $this->crud->addField([
            'name' => 'salaire',
            'label' => 'Salaire',
            'wrapper'   => [
                'class'      => 'form-group col-md-6'
             ],
        ]);

        $this->crud->addField([
            'name' => 'adresse',
            'label' => 'Adresse',
            'wrapper'   => [
                'class'      => 'form-group col-md-6'
             ],
        ]);




        $this->crud->addField(
            [
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'upload',
                'withFiles' => true,
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ],

        );

        $this->crud->addField([
            'name' => 'date_cloture',
            'type' => 'datetime',
            'label' => 'Date de cloture ',
            'wrapper'   => [
                'class'      => 'form-group col-md-6'
             ],
        ]);

        $this->crud->addField(
            [
                'name'    => 'status',
                'label'   => 'Status',
                'type'    => 'select_from_array',
                'options' => ['publier' => 'Publier', 'cloturer' => 'Cloturer'],
                'wrapper'   => [
                    'class'      => 'form-group col-md-6'
                 ],
            ]

        );


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
