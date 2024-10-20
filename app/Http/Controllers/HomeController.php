<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $city = ['name' => 'Pindamonhangaba', 'igm' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Bras%C3%A3o_Pindamonhangaba.png'];
        $units = [
            ['id' => 1, 'name' => 'Central'],
            ['id' => 2, 'name' => 'Sul'],
        ];

        $newsList = [
            ['id' => 1, 'sub_title' => 'Noticiado assim, mas não assado....','title' => 'Notícia 1', 'content' => 'Conteúdo da notícia 1', 'img' => 'https://medicilandia.pa.gov.br/wp-content/uploads/2022/03/logo-pm-medicilandia-2022-2.png', 'title' => 'Não perca este teste!!'],
            ['id' => 2, 'sub_title' => 'Noticiado assim, mas não assado....','title' => 'Notícia 2', 'content' => 'Conteúdo da notícia 2', 'img' => 'https://medicilandia.pa.gov.br/wp-content/uploads/2022/07/BOLETIM-12-JULHO.png', 'title' => 'Não perca este teste!!'],
        ];

        $books = [
            ['id' => 1, 'title' => 'Livro 1', 'img' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781476740195/the-library-book-9781476740195_lg.jpg'],
            ['id' => 2, 'title' => 'Livro 2', 'img' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781476740195/the-library-book-9781476740195_lg.jpg'],
        ];

        return view('components.templates.home-page', compact('city', 'units', 'newsList', 'books'));
    }
}
