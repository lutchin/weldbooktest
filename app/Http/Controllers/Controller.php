<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $db;

    protected $table;


    public function __construct()
    {
        request('db')?$this->db = request('db'):$this->db = '';//если есть название БД
        request('table')?$this->table = request('table'):$this->table = '';//если есть название таблицы
    }



    public function createDB()
    {
        !request('table')?:$this->dropTable();//если есть параметр, то удаляем табл.

        return $this->sql();

    }

    public function insert()
    {
        if(Schema::hasTable($this->table)) {// проверяем есть ли таблица

            DB::table($this->table)->truncate();// очищаем таблицу

        }

        return $this->sql();
    }

    public function sql()
    {
        if(request('file') && Storage::disk('public')->exists('sql/'.request('file'))) { //проверяем есть ли файл

            $cmd = 'mysql --user='.config('app.db_user').' --password='.config('app.db_pass').' '.$this->db.' < "'.storage_path('app\public\sql\\'.request('file')).'"'; //подготавливаем комманду

            exec($cmd);//выполняем комманду

            return ['success' => 'DB created'];//вывводим сообщение об успехе

        } else{

            return ['error' => 'File name '.request('file').' is not exist!']; // выводим сообщение если файл не найден

        }
    }

    public function dropTable()
    {
        Schema::dropIfExists($this->table);
    }

}
