<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\employee; // sesuaikan dengan model Employee yang Anda gunakan

class EmployesSeeder extends Seeder
{
    public function run()
    {
        // Isi dengan logika untuk menambahkan data ke tabel Employees
        Employee::create([
            'Book title' => 'roman picisan',
            'genre' => 'fiksi',
            'author' => 'zira',
           
        ]);
    }
}
