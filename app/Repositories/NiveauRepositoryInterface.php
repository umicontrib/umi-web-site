<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 12:47
 */
namespace App\Repositories;

interface NiveauRepositoryInterface{
    //methodes pour les crud normaux
    public function  listNiveau();
    public  function store( Array $inputs);
    public function update(Array $inputs);
    public function getPaginate($n);
}