<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    function index()
    {
        echo "
        <ul>
            <li>Kurir</li>
            <li>Magang</li>
            <li>Kunjungan Industri</li>
            </ul>";
    }
}
