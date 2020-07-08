<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $nuovo_prodotto = new Product();
        // $nuovo_prodotto->name='smartphone';
        // $nuovo_prodotto->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        // $nuovo_prodotto->price=499.99;
        // $nuovo_prodotto->save();

        // $dati_prodotti = config('prodottiRaccolta');
        // foreach ($dati_prodotti as $dati) {
        //     $nuovo_prodotto = new Product();
        //     $nuovo_prodotto->name=$dati['nome'];
        //     $nuovo_prodotto->description=$dati['descrizione'];
        //     $nuovo_prodotto->price=$dati['prezzo'];
        //     $nuovo_prodotto->save();
        // }

        for ($i=0; $i < 10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name=$faker->sentence(4);
            $nuovo_prodotto->description=$faker->text(100);
            $nuovo_prodotto->price=$faker->randomFloat(2, 10, 1000);
            $nuovo_prodotto->save();
        }

    }
}
