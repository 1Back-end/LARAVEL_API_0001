<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 1000 customers with random names, email addresses, and phone numbers
        Customer::factory()->count(25)->hasInvoices(10)->create();
        Customer::factory()->count(75)->hasInvoices(5)->create();
        Customer::factory()->count(25)->hasInvoices(5)->create();
        Customer::factory()->count(5)->create();
        //
    }
}
