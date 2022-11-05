<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('admin.admin_name')) {
            User::firstOrCreate(
                ['email' => config('admin.admin_email')], [
                    'name' => config('admin.admin_name'),
                    'password' => bcrypt(config('admin.admin_password')),
                    'role'=>'admin',
                    'image' => 'uploads/1V4y82mIwn6p6gTTcUBAZsVgRcJzSf9ettyfj4Te.png'
                ]
            );
        }
    }
}