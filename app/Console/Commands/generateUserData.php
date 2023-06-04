<?php
namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GenerateUserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:generate-users {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates test user data and inserts it into the database.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $count = $this->argument('count');
        for ($i = 0; $i < $count; $i++) {
            User::factory()->create();
        }
    }
}
