<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 2/15/16
 * Time: 4:56 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function goal()
    {
        return view('pages.goal');
    }

    public function group()
    {
        return view('pages.group');
    }

    public function about()
    {
        return view('pages.about');//resources/views/pages/about.blade.php
    }

    public function login()
    {
        return view('pages.login');
    }
}