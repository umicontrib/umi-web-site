<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 15/11/2018
 * Time: 14:55
 */

namespace App\Repositories;


interface DisponibiliteRepositoryInterface
{
    public function listerDisponibilite();
    public function creerDisponibilitePourElement(Array $inputs);
    public function store(Array $inputs);
    public function update(Array $inputs);
    public function rechercheDisponibilite();
}