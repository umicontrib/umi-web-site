<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 17:30
 */
interface ReservationRepositoryInterface{
    //methodes pour les crud normaux
    public function  listReservation();
    public  function store( Array $inputs);
    public function update(Array $inputs);
    public function getPaginate($n);
}
