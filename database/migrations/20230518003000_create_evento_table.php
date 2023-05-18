<?php

use Phinx\Migration\AbstractMigration;

class CreateEventoTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('evento');
        $table->addColumn('evento', 'string', ['limit' => 255])
            ->addColumn('descricao', 'string', ['limit' => 255])
            ->addColumn('local', 'string', ['limit' => 255])
            ->addColumn('data', 'date')
            ->addColumn('horario', 'time')
            ->addColumn('imagem', 'string', ['limit' => 255])
            ->create();
    }
}
