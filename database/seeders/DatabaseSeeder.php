<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $test_user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::create([
            'user_id' => $test_user->id,
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listing::create([
            'user_id' => $test_user->id,
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend ,api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listing::create([
            'user_id' => $test_user->id,
            'title' => 'Laravel Developer',
            'tags' => 'laravel, vue, javascript',
            'company' => 'Wayne Enterprises',
            'location' => 'Gotham, NY',
            'email' => 'email3@email.com',
            'website' => 'https://www.wayneenterprises.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listing::create([
            'user_id' => $test_user->id,
            'title' => 'Backend Developer',
            'tags' => 'laravel, php, api',
            'company' => 'Skynet Systems',
            'location' => 'Newark, NJ',
            'email' => 'email4@email.com',
            'website' => 'https://www.skynet.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);

        Listing::create([
            'user_id' => $test_user->id,
            'title' => 'Junior Developer',
            'tags' => 'laravel, php, javascript',
            'company' => 'Wonka Industries',
            'location' => 'Boston, MA',
            'email' => 'email4@email.com',
            'website' => 'https://www.wonka.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?',
        ]);
    }
}
