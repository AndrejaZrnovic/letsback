<?php

namespace App\Controllers;
use App\Core\App;

class ShipsController
{

    public function index()
    {
        $ships = App::get('database')->getAll('ships');

        return view('ships-index', compact('ships'));
    }

    public function create()
    {
        return view('ships-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('ships', $_POST);

        return redirect('/ships');
    }

    public function show()
    {
        $ship = App::get('database')->getOne('ships', $_GET['id']);

        return view('ships-show', compact('ship'));
    }

    public function edit()
    {
        $ship = App::get('database')->getOne('ships', $_GET['id']);

        return view('ships-edit', compact('ship'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('ships', $_POST);

        return redirect('/ships');
    }

    public function destroy()
    {
        App::get('database')->delete('ships', $_GET['id']);

        return redirect('/ships');

    }

}
