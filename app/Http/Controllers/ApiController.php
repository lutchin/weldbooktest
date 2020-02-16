<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function data()
    {
        $status = 1;
        $error = '';
        $body = [];

        $orderBy = 'id';
        $direction = 'ASC';

        $filter = explode(',',request('filter'));//достаем параметры фильтра

        if(count($filter) > 1){
            $orderBy = $filter[0];
            $direction = $filter[1];
        }

        try {
            $results = DB::table('test')->select('*')->orderBy($orderBy, $direction)->get();//получаем данные из таблицы
        } catch(\Exception $e){

            $status = 0;
            $error = $e->getMessage();// если есть ошибка пишем ее

            return $this->json($status, $error);//выводим ошибку
        }

        $data = $results->chunk(request('limit'));//разбиваем по лимиту

        $page = (int)request('page')-1;

        if(!array_key_exists($page,$data->toArray())){//проверяем есть ли "стр"
            $status = 0;

            $error = 'Page number '. request('page').' is not exist';
            count($data) > 0?:$error = 'No data';

            return $this->json($status, $error);//выводим ошибку
        }

        foreach($data[$page] as $item)
        {
            $item = json_decode(json_encode($item), true);

            $head = array_keys($item);//получаем массив имен

            array_push($body,array_values($item));//плучаем массив значений

        }

        return $this->json($status, $error, $head, $body); //выводим ответ
    }

    public function json($status, $error, $head = [], $body = [])
    {
        $data = [
            'status' => $status,
            'error' => $error,
            'data' => [
                'head' => $head,
                'body' => $body
            ]];// подготавливаем ответ

        return json_encode($data); //выводим ответ
    }
}
