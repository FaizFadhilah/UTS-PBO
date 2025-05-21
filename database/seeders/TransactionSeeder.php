<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;
use App\Models\Customer;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment = PaymentMethod::firstOrCreate([
            'name' => 'Cash',
            'description' => 'Cash payment',
        ]);

        $customer = Customer::firstOrCreate([
            'name' => 'Faiz',
            'phone' => '081234567890',
        ]);

        Transaction::firstOrCreate([
            'customer_id' => $customer->id,
            'amount' => 58000,
            'payment_method_id' => $payment->id,
            'date' => now(),
        ]);
    }
}
