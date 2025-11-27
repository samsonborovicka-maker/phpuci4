<?php

namespace App\Controllers;

use App\Models\BibleModel;

class BibleController extends BaseController
{
    public function index()
    {
        $model = new BibleModel();
        $cislo = $model->cisloSelmy();
        return "Cislo selmy je: " . $cislo;
    }
}
