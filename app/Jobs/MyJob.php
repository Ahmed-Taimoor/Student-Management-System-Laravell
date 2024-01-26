<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
    public $header;

    public function __construct($data, $header)
    {
        $this->data = $data;
        $this->header = $header;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        foreach ($this->data as $user) {
            $userData = array_combine($this->header, $user);
            $userData['name'] = $userData['Name'];
            $userData['email'] = $userData['Email'];
            $userData['password'] = $userData['Password'];
            $userData['role'] = 'student';
            User::create($userData);
        }
    }
}
// DELETE FROM `users` WHERE `role` = 'student' AND `id` > 25;