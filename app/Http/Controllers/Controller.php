<?php

namespace App\Http\Controllers;


use App\Repositories\DataBaseRepositoryInterface as DataBase;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $dataBase;

    protected $db;

    protected $table;


    public function __construct(DataBase $dataBase)
    {
        $this->dataBase = $dataBase;
        request('db')?$this->db = request('db'):$this->db = '';//если есть название БД
        request('table')?$this->table = request('table'):$this->table = '';//если есть название таблицы
    }



    public function createDB()
    {
        !request('table')?:$this->dropTable();//если есть параметр, то удаляем табл.

        return $this->dataBase->sql(request('file'), $this->db);

    }

    public function insert()
    {
        if(Schema::hasTable($this->table)) {// проверяем есть ли таблица

            DB::table($this->table)->truncate();// очищаем таблицу

        }

        return $this->dataBase->sql(request('file'), $this->db);
    }

    public function dropTable()
    {
        Schema::dropIfExists($this->table);
    }

}
