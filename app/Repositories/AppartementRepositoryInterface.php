<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 14:28
 */

interface AppartementRepositoryInterface{
    public function listAppartement();
    public function store(Array $inputs);
    public function update(Array $inputs);
}