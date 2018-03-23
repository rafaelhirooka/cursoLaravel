<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

    public function lista() {
        return (object)[
            'nome' => 'Meu pau de 4',
            'telefone' => '19996941420'
        ];
    }
}
