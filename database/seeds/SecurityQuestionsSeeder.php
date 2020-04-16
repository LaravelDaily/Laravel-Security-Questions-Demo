<?php

use Illuminate\Database\Seeder;
use App\SecurityQuestion;

class SecurityQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SecurityQuestion::create(['question' => 'What was the street name you lived in as a child?']);
        SecurityQuestion::create(['question' => 'What primary school did you attend?']);
        SecurityQuestion::create(['question' => 'In what city or town was your first job?']);
        SecurityQuestion::create(['question' => 'What was the make and model of your first car?']);
        SecurityQuestion::create(['question' => 'What is your oldest cousin\'s first and last name?']);
    }
}
