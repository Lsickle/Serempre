<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\City;
use App\Client;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class dataPredefinida extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'reinicia la base de datos para añadir usuarios, ciudades y clientes según la informacion de los archivos especificados';

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

        $CSVFile = public_path('data/users.csv');
        if(!file_exists($CSVFile) || !is_readable($CSVFile)){
            return false;
        }

        $header = null;
        $data = array();

        if (($handle = fopen($CSVFile,'r')) !== false){
            while (($row = fgetcsv($handle, 1000, ',')) !==false){
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $dataCount = count($data);
        for ($i = 0; $i < $dataCount; $i ++){
            User::withoutEvents(function () use ($data, $i) {
                User::create($data[$i]);
            });
        }

        $CSVFile = public_path('data/cities.csv');
        if(!file_exists($CSVFile) || !is_readable($CSVFile)){
            return false;
        }

        $header = null;
        $data = array();

        if (($handle = fopen($CSVFile,'r')) !== false){
            while (($row = fgetcsv($handle, 1000, ',')) !==false){
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $dataCount = count($data);
        for ($i = 0; $i < $dataCount; $i ++){
            City::create($data[$i]);
        }

        $CSVFile = public_path('data/clients.csv');
        if(!file_exists($CSVFile) || !is_readable($CSVFile)){
            return false;
        }

        $header = null;
        $data = array();

        if (($handle = fopen($CSVFile,'r')) !== false){
            while (($row = fgetcsv($handle, 1000, ',')) !==false){
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $dataCount = count($data);
        for ($i = 0; $i < $dataCount; $i ++){
            Client::create($data[$i]);
        }

        $this->info("Base de datos Actualizada.");

        return 0;
    }
}
