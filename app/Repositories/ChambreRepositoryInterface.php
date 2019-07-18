<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 11:21
 */
interface ChambreRepositoryInterface{
    public function listChambre();
    public function store(Array $inputs);
    public function update(Array $inputs);

}