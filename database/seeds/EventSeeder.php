<?php

use Phinx\Seed\AbstractSeed;

class EventSeeder extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'evento' => 'Nome do Evento',
                'descricao' => 'Descrição do evento',
                'local' => 'Local do evento',
                'data' => '2023-05-17',
                'horario' => '10:00:00',
                'imagem' => 'nome_da_imagem.jpg'
            ]
        ];
        $table = $this->table('evento');
        $table->insert($data)->save();
    }
}
