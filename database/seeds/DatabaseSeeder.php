<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected function roles()
    {
        $owner = new Role();
        $owner->name         = 'root';
        $owner->display_name = 'Гуру'; 
        $owner->description  = 'Создатель'; 
        $owner->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Администратор'; 
        $admin->description  = 'Управляющий'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'secretary';
        $admin->display_name = 'Секретар'; 
        $admin->description  = 'Менедджер по управления материалов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'expert';
        $admin->display_name = 'Эксперт';
        $admin->description  = 'Судья который оценивает'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'teacher';
        $admin->display_name = 'Преподаватель'; 
        $admin->description  = 'Обучает студентов'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'student';
        $admin->display_name = 'Студент';
        $admin->description  = 'Обучаеющий в ВУЗ'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'alien';
        $admin->display_name = 'никто'; 
        $admin->description  = 'ГомоСапиенс'; 
        $admin->save();
    }
     public function run()
    {
         
        $this->roles();
       $this->call(PermissionSeeder::class);
    }
}
