<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;


class assigningrole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:assigningrole';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Creating Roles
        // $adminRole = Role::create(['name' => 'admin']);
        // $teacherRole = Role::create(['name' => 'teacher']);
        // $studentRole = Role::create(['name' => 'student']);

        //Selecting Roles
        $adminRole = Role::where('name', 'admin')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $studentRole = Role::where('name', 'student')->first();

        // Creating Users
        // $admin = User::create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('password'),
        //     'role' =>'admin',
        // ]);

        // $teacher = User::create([
        //     'name' => 'Teacher User',
        //     'email' => 'teach@teach.com',
        //     'password' => bcrypt('password'),
        //     'role' =>'teacher',
        // ]);

        // $student = User::create([
        //     'name' => 'Student User',
        //     'email' => 'student@student.com',
        //     'password' => bcrypt('password'),
        //     'role' =>'student',
        // ]);
        
        //Selecting users
        $admin = User::where('role', 'admin')->first();
        $teacher = User::where('role', 'teacher')->first();
        $student = User::where('role', 'student')->first();

        $student->assignRole($studentRole);
        $teacher->assignRole($teacherRole);
        $admin->assignRole($adminRole);
        
        $this->info('Role assigned successfully.');
        // php artisan app:assigningrole
    }
}