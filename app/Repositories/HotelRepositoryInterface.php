<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 10:21
 */

namespace App\Repositories;

interface HotelRepositoryInterface{
    //methodes pour les crud normaux
    public function  listHotel();
    public  function store(Array $inputs);
    public function update(Array $inputs);
    public function getPaginate($n);

    //mise à jour les images
    public  function  ajouterImage($name, $value);
    public  function  modifierImage($name, $value);

    //mise à jour des attributs booleen
    public function updateBooleanAttribute($value);
    public function updateBooleanAttributes(Array $inputs);

    //mise à jour des attributs textuels
    public function updateTextAttribute($value);
    public function updateTextAttributes(Array $inputs);

    //mise à jour des attributs numeriques
    public function updateNumberAttribute($value);
    public function updateNumberAttributes(Array $inputs);




}