<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 0 ; $i < 10; $i++){

            $testProject = new Project();
            $testProject->name = "Name $i";
            $testProject->client = "Client $i";
            $testProject->description = "Description $i";
            
            $testProject->save();
            }

    }
}
