<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show()
    {
        $services = [];
        // $services = service::all();
        //$services = Service::where('city', 'Vadodara')->orderBy('name')->get();
        //chunking result
        // Service::chunk(2, function ($service) {
        //     echo 'chunk of Data <br>';
        //     foreach ($service as $serv) {
        //         echo $serv->name;
        //         echo '<br>';
        //     }
        // });
        //Retrive data with primary key
        //$services = service::find(1);

        //$services = Service::Where('city', 'Vadodara')->first();
        //$services = Service::firstWhere('city', 'Vadodara');
        // $services = Service::Where('marks', '=', 90)->firstOr(function () {
        //     echo 'First not found so function executed';
        // });

        //firstOrCreate(saved on db)
        // $services = Service::firstOrCreate(
        //     ['name' => 'Visha'],
        //     ['email' => 'visha@gmail.com', 'city' => 'Ahemdabad', 'marks' =>  85],
        // );

        //firstOrNew(show but nevre saved on db)
        // $services = Service::firstOrNew(
        //     ['name' => 'Sonal'],
        //     ['email' => 'sonal@gmail.com', 'city' => 'badoda', 'marks' =>  85],
        // );

        //to save call save()

        // $services = Service::firstOrNew(
        //     ['name' => 'Sonal'],
        //     ['email' => 'sonal@gmail.com', 'city' => 'badoda', 'marks' =>  85],
        // );
        // $services->save();

        //Aggregate
        //$services = service::where('city', 'Vadodara')->count();
        //$services = service::where('city', 'Vadodara')->min('marks');
        //dd($services);

        //insert
        // $service = new Service;
        // $service->name = 'jack';
        // $service->email = 'jack@gmail.com';
        // $service->city = 'Vadodara';
        // $service->marks = 89;
        // $service->save();

        // $service = new Service;
        // $service->name = 'Akku';
        // $service->email = 'akku@gmail.com';
        // $service->city = 'Vadodara';
        // $service->marks = 87;
        // $service->save();

        //insert new data
        // $name = 'harry';
        // $email = 'harry@gmail.com';
        // $city = 'Gandhinagar';
        // $marks = 75;
        // $service = new Service;
        // $service->name = $name;
        // $service->email = $email;
        // $service->city = $city;
        // $service->marks = $marks;
        // $service->save();

        //insert new record using create method
        // $service = service::create([
        //     'name' => 'abcd',
        //     'email' => 'ab@gmail.com',
        //     'city' => 'Abcde',
        //     'marks' => 70

        // ]);

        //update
        // $service = Service::find(25);
        // $service->name = 'hema';
        // $service->email = 'hema@gmail.com';
        // $service->city = 'bharuch';
        // $service->marks = 90;
        // $service->save();

        //mass update
        // service::where('city', 'Vadodara')->update(['marks' => 90]);

        //update or create
        // service::updateOrCreate(
        //     ['name' => 'Akku'],
        //     ['email' => 'hello@gmail.com', 'city' => 'dumka', 'marks' => 80],
        // );

        // //update or create
        // service::updateOrCreate(
        //     ['name' => 'hetal'],
        //     ['email' => 'hetal@gmail.com', 'city' => 'bharuch', 'marks' => 60],
        // );

        //delete using delete method
        // $service = service::find(10);
        // $service->delete();

        //delete using destroy method
        // $service = service::destroy(6);
        // dd($service);

        //delete using query
        // $service = service::where('city', 'Vadodara')->delete();
        // dd($service);

        //truncate method(clear all data rom table)
        service::truncate();

        return view('welcome', ['services' => $services]);
    }
}
