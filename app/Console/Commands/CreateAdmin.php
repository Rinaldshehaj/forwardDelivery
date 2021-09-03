<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to create admin.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is your Full Name ?');
        if (empty($name)) {
            throw new \Exception('Pleas provide your name!');
        }
        $email = $this->ask('What is your Email Address ?');
        if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            throw new \Exception('Sorry, email address you provided is not correct!');
        }
        $password = $this->secret('What is your Password ?');
        $confirm_password = $this->secret('Confirm your password again ?');
        if (empty($password) || strlen($password) < 6) {
            throw new \Exception('Sorry, password you provided is too short!');
        }
        if ($password === $confirm_password) {
            $user = config('roles.models.defaultUser')::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
            ]);//choose the default role upon user creation.
            $role = config('roles.models.role')::where('name', '=', 'Admin')->first();
            $user->attachRole($role);
        }
        return 0;
    }
}
