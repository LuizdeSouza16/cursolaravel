<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert(
            'insert into produtos
            (nome, quantidade, valor, descricao)
            values (?,?,?,?)',
            array(
                'Geladeira', 2, 5900.00,
                'Side by Side com gelo na porta'
            )
        );

        DB::insert(
            'insert into produtos 
            (nome, quantidade, valor, descricao)
            values (?,?,?,?))',
            array(
                'Fogão', 6, 950.00,
                'Paínel automático e forno elétrico'
            )
        );


        DB::insert(
            'insert into produtos 
            (nome, quantidade, valor, descricao)
            values (?,?,?,?))',
            array(
                'Microondas', 1, 1520.00,
                'Manda sms quando termina de esquentar'
            )
        );
    }
}
