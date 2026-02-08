<?php

namespace Database\Factories\Adichan\Transaction\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Adichan\Transaction\Models\Transaction;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        return [
            'transactionable_id' => 1,
            'transactionable_type' => 'App\Models\User', // Default to User model
            'status' => 'pending',
            'total' => 0.0,
            'description' => $this->faker->sentence(),
            'metadata' => [],
        ];
    }

    /**
     * Set the transactionable model
     */
    public function forTransactionable($model): self
    {
        return $this->state([
            'transactionable_id' => $model->getKey(),
            'transactionable_type' => get_class($model),
        ]);
    }
}
