<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $note = new Note();
        $note->title = "Primera Nota";
        $note->content = "contenido de la nota uno";
        $note->user_id = 1;
        $note->save();

        $note1 = new Note();
        $note1->title = "Segunda Nota";
        $note1->content = "contenido de la nota dos";
        $note1->user_id = 1;
        $note1->save();
    }
}
