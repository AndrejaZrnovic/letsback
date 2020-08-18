<?php

namespace App\Controllers;
use App\Core\App;

class ApiCargosController {

    public function index()
    {
        $user = api_check_auth();
        $ships = App::get('database')->getOneByField('cargos', ['user_id' => $user->id]);

        echo json_encode($cargos);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('cargos', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $post = App::get('database')->getOne('cargos', $_GET['id']);

        echo json_encode($cargo);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('cargos', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('cargos', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}