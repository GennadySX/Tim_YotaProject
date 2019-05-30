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
        $admin->name         = 'director';
        $admin->display_name = 'Главный Директор';
        $admin->description  = 'Вице Президент';
        $admin->save();
        //------------------------------------------

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Администратор'; 
        $admin->description  = 'Управляющий'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'directorShop';
        $admin->display_name = 'Секретар';
        $admin->description  = 'Менедджер по управления материалов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'secretary';
        $admin->display_name = 'Секретар'; 
        $admin->description  = 'Менедджер по управления материалов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'manager';
        $admin->display_name = 'Манеджер';
        $admin->description  = 'Менеджер компании';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'operator';
        $admin->display_name = 'Оператор ';
        $admin->description  = 'Call-Center сервис';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'master';
        $admin->display_name = 'Мастер';
        $admin->description  = 'Починит ободувание';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'seller';
        $admin->display_name = 'Продавец ';
        $admin->description  = 'Обучает студентов'; 
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'abonent';
        $admin->display_name = 'Абонент';
        $admin->description  = 'Потрибитель услуг комнапии или клиент';
        $admin->save();

    }
     public function run()
    {
         
        $this->roles();
       $this->call(PermissionSeeder::class);
    }
}
