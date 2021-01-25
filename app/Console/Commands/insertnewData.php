<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\City;
use App\Client;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class insertnewData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:fakedata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reinicia la base de datos para añadir usuarios, ciudades y clientes según las cantidades especificadas';

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
        $this->call('migrate:fresh');

        User::withoutEvents(function () {
            $adminUser = User::create([
                'name' => 'Camilo Rojas',
                'email' => 'crojas@serempre.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        });

        $users = $this->askValid(
            '¿Cuantos USUARIOS desea ingresar?',
            'usuarios',
            'required|integer|min:1'
        );

        $ciudades = $this->askValid(
            '¿Cuantas CIUDADES desea ingresar?',
            'ciudades',
            'required|integer|min:1'
        );

        $clientes = $this->askValid(
            '¿Cuantos CLIENTES desea ingresar?',
            'clientes',
            'required|integer|min:1'
        );

        User::withoutEvents(function () use ($users) {
            factory(User::class, intval($users))->create();
        });

        factory(City::class, intval($ciudades))->create();

        factory(Client::class, intval($clientes))->create();

        $this->info("Base de datos Actualizada.");

        return 0;
    }


    protected function askValid($question, $field, $rules)
    {
        $value = $this->ask($question);

        if($message = $this->validateInput($rules, $field, $value)) {
            $this->error($message);

            return $this->askValid($question, $field, $rules);
        }

        return $value;
    }


    protected function validateInput($rules, $fieldName, $value)
    {
        $validator = Validator::make([
        $fieldName => $value
        ], [
        $fieldName => $rules
        ]);

        return $validator->fails()
            ? $validator->errors()->first($fieldName)
            : null;
    }
}
