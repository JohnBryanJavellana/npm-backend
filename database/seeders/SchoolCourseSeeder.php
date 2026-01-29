<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    MainCourse,
    MainSchool
};

class SchoolCourseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $schools = [
            ['school_name' => 'University of the Philippines Diliman', 'school_address' => 'Roxas Ave, Diliman, Quezon City, Metro Manila'],
            ['school_name' => 'De La Salle University Manila', 'school_address' => '2401 Taft Ave, Malate, Manila, 1004 Metro Manila'],
            ['school_name' => 'Ateneo de Manila University', 'school_address' => 'Katipunan Ave, Loyola Heights, Quezon City, 1108 Metro Manila'],
            ['school_name' => 'University of Santo Tomas', 'school_address' => '1817 España Blvd, Sampaloc, Manila, 1008 Metro Manila'],
            ['school_name' => 'Mapúa University', 'school_address' => '658 Muralla St, Intramuros, Manila, 1002 Metro Manila'],
            ['school_name' => 'Technological Institute of the Philippines', 'school_address' => '938 Aurora Blvd, Cubao, Quezon City, Metro Manila'],
            ['school_name' => 'FEU Institute of Technology', 'school_address' => 'Padre Paredes St, Sampaloc, Manila, 1015 Metro Manila'],
            ['school_name' => 'Adamson University', 'school_address' => '900 San Marcelino St, Ermita, Manila, 1000 Metro Manila'],
            ['school_name' => 'University of the East - Caloocan', 'school_address' => '105 Samson Road, Caloocan City, Metro Manila'],
            ['school_name' => 'Polytechnic University of the Philippines', 'school_address' => '1016 Anonas, Santa Mesa, Manila, Metro Manila'],
            ['school_name' => 'Pamantasan ng Lungsod ng Maynila', 'school_address' => 'Gen. Luna cor. Muralla St., Intramuros, Manila'],
            ['school_name' => 'Technological University of the Philippines', 'school_address' => 'Ayala Blvd, Ermita, Manila, 1000 Metro Manila'],
            ['school_name' => 'Saint Louis University', 'school_address' => 'A. Bonifacio St, Baguio City, Benguet'],
            ['school_name' => 'University of San Carlos', 'school_address' => 'P. del Rosario St, Cebu City, Cebu'],
            ['school_name' => 'MSU-Iligan Institute of Technology', 'school_address' => 'Andres Bonifacio Ave, Iligan City, Lanao del Norte'],
        ];

        $courses = [
            ['course_name' => 'BS in Information Technology (BSIT)'],
            ['course_name' => 'BS in Computer Science (BSCS)'],
            ['course_name' => 'BS in Information Systems (BSIS)'],
            ['course_name' => 'BS in Cybersecurity'],
            ['course_name' => 'BS in Data Science and Analytics'],
            ['course_name' => 'BS in Entertainment and Multimedia Computing'],
            ['course_name' => 'BS in Computer Engineering (BSCpE)'],
            ['course_name' => 'BS in Electronics Engineering (BSECE)'],
            ['course_name' => 'BS in Software Engineering'],
            ['course_name' => 'BS in Civil Engineering (BSCE)'],
            ['course_name' => 'BS in Mechanical Engineering (BSME)'],
            ['course_name' => 'BS in Electrical Engineering (BSEE)'],
            ['course_name' => 'BS in Industrial Engineering (BSIE)'],
            ['course_name' => 'BS in Chemical Engineering (BSChE)'],
        ];

        foreach ($schools as $school) {
            $main_school = new MainSchool();
            $main_school->school_name = $school['school_name'];
            $main_school->school_address = $school['school_address'];
            $main_school->save();
        }

        foreach ($courses as $course) {
            $main_course = new MainCourse();
            $main_course->course_name = $course['course_name'];
            $main_course->save();
        }
    }
}
