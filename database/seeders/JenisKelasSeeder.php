<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JenisKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to the SQL file
        $path = database_path('sql/jeniskelas.sql');
        
        // Check if the file exists
        if (!File::exists($path)) {
            throw new \Exception("The SQL file at path {$path} does not exist.");
        }

        // Read the SQL file content
        $sql = File::get($path);

        // Execute the SQL statements
        DB::unprepared($sql);
    
    }
}
