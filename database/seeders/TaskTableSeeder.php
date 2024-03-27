<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task 1',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-15 00:00:00',
            'status' => 'Pendiente',
        ]);

        Task::create([
            'title' => 'Task 2',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-16 00:00:00',
            'status' => 'Pendiente',
        ]);

        Task::create([
            'title' => 'Task 3',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-17 00:00:00',
            'status' => 'En Progreso',
        ]);

        Task::create([
            'title' => 'Task 4',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-18 00:00:00',
            'status' => 'En Progreso',
        ]);

        Task::create([
            'title' => 'Task 5',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-19 00:00:00',
            'status' => 'Completada',
        ]);

        Task::create([
            'title' => 'Task 6',
            'description' => 'Task Descripcion',
            'due_date' => '2024-03-20 00:00:00',
            'status' => 'Completada',
        ]);
        //
    }
}
