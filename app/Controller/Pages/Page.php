<?php
namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }


    /* Método responsável por retornar o conteúdo (view) da nossa home
     @return string
     */
    
    public static function getPage($title,$content) {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content
        ]);
    }

}