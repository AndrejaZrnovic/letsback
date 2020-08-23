<?php

namespace App\Controllers;
use App\Core\App;

class OrdersController
{

    public function index()
    {
        $orders = App::get('database')->getAll('orders');

        return view('orders-index', compact('orders'));

    }

    public function create()
    {
        return view('orders-create');

    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('orders', $_POST);

        return redirect('/orders');

    }

    public function show()
    {
        $order = App::get('database')->getOne('orders', $_GET['id']);


        return view('orders-show', compact('order'));

    }

    public function edit()
    {

        $order = App::get('database')->getOne('orders', $_GET['id']);

        return view('orders-edit', compact('order'));

    }



    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('orders', $_POST);

        return redirect('/orders');

    }

    public function destroy()
    {
        App::get('database')->delete('orders', $_GET['id']);

        return redirect('/orders');

    }

}
