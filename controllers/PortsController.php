<?php

namespace App\Controllers;
use App\Core\App;

class PortsController
{

    public function index()
    {
        $ports = App::get('database')->getAll('ports');

        return view('ports-index', compact('ports'));
    }

    public function create()
    {
        return view('ports-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('ports', $_POST);

        return redirect('/ports');
    }

    public function show()
    {
        $port = App::get('database')->getOne('ports', $_GET['id']);

        return view('ports-show', compact('port'));
    }

    public function edit()
    {
        $port = App::get('database')->getOne('ports', $_GET['id']);

        return view('ports-edit', compact('port'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('ports', $_POST);

        return redirect('/ports');
    }

    public function destroy()
    {
        App::get('database')->delete('ports', $_GET['id']);

        return redirect('/ports');

    }

}
