<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 15:26
 */

namespace App\Repositories;


interface SalleceremonieRepositoryInterface
{
    public function listSalleceremonie();
    public function store(Array $inputs);
    public function update(Array $inputs);

}