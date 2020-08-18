<?php

namespace App\Controllers;
use App\Core\App;

class ApiShipsController {

    public function index()
    {
//        $user = api_check_auth();
        $ships = App::get('database')->getAll('ships');

        echo json_encode($ships);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('ships', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $ship = App::get('database')->getOne('ships', $_GET['id']);

        echo json_encode($ship);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('ships', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('ships', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}