<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;


class EmailReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kontrol eder';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->warn('selam');


        $now = Carbon::now();

        $users = User::where('is_send', false)->where('remind_at', '<', $now)->get();

        if (!$users) {
            $this->warn("There is no process now ");
            return;
        }

        /**
         * sending email
         */
        foreach ($users as $user) {
            try {
                Mail::send('email', [
                    'code' => "qwe",
                    'url'  => 'etiket'
                ], function ($m) use ($user) {
                    $m->from('testmailer986@gmail.com', "Hatırlatıcı Servisi"); /** gönderici */
                    $m->to("{$user->email}", "Berke")->subject("Bir hatırlatmanız var!");
                });
            } catch (\Exception $exception) {
                $this->warn($exception->getMessage());
                $this->warn($exception->getTraceAsString());
            }

        }


    }
}
