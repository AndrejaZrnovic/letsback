<?php

namespace App\Controllers;
use App\Core\App;

class ApiPortsController {

    public function index()
    {
//        $user = api_check_auth();
        $ports = App::get('database')->getAll('ports');

        echo json_encode($ports);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('ports', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $port = App::get('database')->getOne('ports', $_GET['id']);

        echo json_encode($port);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('ports', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('ports', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}