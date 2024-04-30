<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeNote;

class TypeNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $note = new TypeNote();
        $note->type = 'Texto';
        $note->save();

        $note2 = new TypeNote();
        $note2->type = 'Voz';
        $note2->save();

        $note3 = new TypeNote();
        $note3->type = 'Imagen';
        $note3->save();
    }
}
