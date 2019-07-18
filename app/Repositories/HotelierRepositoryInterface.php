<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 19:52
 */

 interface HotelierRepositoryInterface{
    //methodes pour les crud normaux
    public function  listHotelier();
    public function store(Array $inputs);
    public function update(Array $inputs);
    public function getPaginate($n);
}
