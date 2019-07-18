<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 17:14
 */

namespace App\Repositories;


interface ParkingRepositoryInterface
{
    public function listParking();
    public function store(Array $inputs);
    public function update(Array $inputs);

}