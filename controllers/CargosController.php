<?php

namespace App\Controllers;
use App\Core\App;

class  CargosController
{

    public function index()
    {
        $cargos = App::get('database')->getAll('cargos');

        return view('cargos-index', compact('cargos'));
    }

    public function create()
    {
        return view('cargos-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('cargos', $_POST);

        return redirect('/cargos');
    }

    public function show()
    {
        $cargo = App::get('database')->getOne('cargos', $_GET['id']);

        return view('cargos-show', compact('cargo'));
    }

    public function edit()
    {
        $cargo = App::get('database')->getOne('cargos', $_GET['id']);

        return view('cargos-edit', compact('cargo'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('cargos', $_POST);

        return redirect('/cargos');
    }

    public function destroy()
    {
        App::get('database')->delete('cargos', $_GET['id']);

        return redirect('/cargos');

    }

}
