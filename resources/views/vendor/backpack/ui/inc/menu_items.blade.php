{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Secteurs" icon="la la-question" :link="backpack_url('secteur')" />
<x-backpack::menu-item title="Entreprises" icon="la la-question" :link="backpack_url('entreprise')" />
<x-backpack::menu-item title="Offres" icon="la la-question" :link="backpack_url('offre')" />