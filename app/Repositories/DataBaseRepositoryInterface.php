<?php
namespace App\Repositories;

interface DataBaseRepositoryInterface
{

    public function filter($orderBy, $direction);

    public function sql($file, $db);

}