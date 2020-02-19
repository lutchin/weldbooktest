<?php
namespace App\Repositories;

use App\DataBase;
use Illuminate\Support\Facades\Storage;

class DataBaseRepository implements DataBaseRepositoryInterface
{

    public function filter($orderBy, $direction)
    {

        return DataBase::orderBy($orderBy, $direction)->get();
    }

    public function sql($file, $db)
    {
        if($file && Storage::disk('public')->exists('sql/'.$file)) { //проверяем есть ли файл

                $cmd = 'mysql --user='.config('app.db_user').' --password='.config('app.db_pass').' '.$db.' < "'.storage_path('app\public\sql\\'.request('file')).'"'; //подготавливаем комманду

                exec($cmd,$output, $result);//выполняем комманду

                if ( $result === 0) {

                    return ['success' => 'DB created'];

                }else{

                    return ['error'  => $output];

                }

        } else {

            return ['error' => 'File name '.$file.' is not exist!']; // выводим сообщение если файл не найден

        }
    }
}