<?php
namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page{

    /* Método responsável por retornar o conteúdo (view) da nossa home
     @return string
     */
    
    public static function getHome() {
        $content = View::render('pages/home', [
            'name' => 'Yudistation - Canal',
            'description' => 'Canal do Youtube: https://youtube.com/yudistation',
            'site' => 'https://yudistation.com.br'
        ]);
        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('Yudistation - Canal - Home', $content);
    }

}