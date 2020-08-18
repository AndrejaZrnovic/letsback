<?php

namespace App\Controllers;
use App\Core\App;

class ApiOrdersController {

    public function index()
    {
        $user = api_check_auth();
        $orders = App::get('database')->getOneByField('orders', ['user_id' => $user->id]);

        echo json_encode($orders);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('orders', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $order = App::get('database')->getOne('orders', $_GET['id']);

        echo json_encode($order);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('orders', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('orders', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}