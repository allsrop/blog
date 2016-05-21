<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Rde\Telegram\Connection;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test {msg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test description';

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
     * @return mixed
     */
    public function handle()
    {
        $msg = $this->argument('msg', null);
        echo $msg;
        echo '兩個電動牙刷.兩個補充刷頭.一個0-2y水杯.';
        $app = \App::make('app');
        $config = $app['config']['database']['telegram'];
        $conn = new Connection($config['token']);
        $conn->sendMessage(array(
            'chat_id' => $config['chat_id'],
            'text' => $msg
        ));
//        echo date('Y-m-d H:i:s') . " " . 995;
        //
    }
}
