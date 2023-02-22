<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($id)
    {
        return "<ul> 
        <li><a href='/news'>https://www.educastudio.com/news</a></li>
        <li><a href='/news/educ-studio-berbagi-untuk-warga-sekitar'>https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19</a></li>
        </ul> 
    " . $id;
    }
}
