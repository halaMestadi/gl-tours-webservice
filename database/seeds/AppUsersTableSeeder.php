<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class AppUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::where("role_id", "=", 1)->count() == 0) {
            $role = Role::where('name', 'company')->firstOrFail();

            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id' => $role->id,
            ]);
        } else {
            factory(User::class, 50)->create();
        }
    }
}
