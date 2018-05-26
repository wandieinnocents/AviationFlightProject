<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.






Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes


   CRUD::resource('place', 'PlaceCrudController');
   CRUD::resource('parking', 'ParkingCrudController');
   CRUD::resource('accomdation', 'AccomdationCrudController');
  CRUD::resource('shop', 'ShopCrudController');
  CRUD::resource('transport', 'TransportCrudController');
  CRUD::resource('hotel', 'HotelCrudController');
  CRUD::resource('inspiration', 'InspirationCrudController');
  CRUD::resource('tour', 'TourCrudController');
  CRUD::resource('embasy', 'EmbasyCrudController');
  CRUD::resource('forexbureau', 'ForexbureauCrudController');
  CRUD::resource('hospital', 'HospitalCrudController');


}); // this should be the absolute last line of this file
