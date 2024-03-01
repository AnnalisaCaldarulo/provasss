<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Info;
use App\Models\Project;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $employees = [
            ['name' => 'Mario'],
            ['name' => 'Giovanni'],
            ['name' => 'Lucia'],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }

        $projects = [
            ['name' => 'Mars Rover'],
            ['name' => 'Manhattan'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
        
        $info = [
            ['project_id' => 1, 'employee_id' => 1, 'date' => '2021-08-26', 'hours' => 5],
            ['project_id' => 2, 'employee_id' => 2, 'date' => '2021-08-30', 'hours' => 3],
            ['project_id' => 1, 'employee_id' => 1, 'date' => '2021-08-31', 'hours' => 3],
            ['project_id' => 1, 'employee_id' => 3, 'date' => '2021-08-31', 'hours' => 3],
            ['project_id' => 2, 'employee_id' => 1, 'date' => '2021-08-26', 'hours' => 2],
            ['project_id' => 2, 'employee_id' => 2, 'date' => '2021-08-31', 'hours' => 4],
        ];  

        foreach ($info as $i) {
            Info::create($i);
        }
    }
}
