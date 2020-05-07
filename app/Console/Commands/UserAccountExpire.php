<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserAccountExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Account Expired';

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
        try {
            DB::beginTransaction();
            $users = User::whereDate('expired_at','<=' ,Carbon::today())->where('status', '!=', User::STATUS['Expired'])
                ->where('role', User::ROLE['Customer'])->get();
            if(empty($users)){
                throw new \Exception('No User Found For Expired. Date: '.Carbon::now(), 404);
            }
            $ExpiredUsers = User::whereIn('id', $users->pluck('id'))->update([
                'status'=> User::STATUS['Expired'],
            ]);
            if(!empty($ExpiredUsers)){
                DB::commit();
                Log::info('User Expired Successfully');
            }else {
                throw new \Exception('User Expired Operation Failed. Date:'.Carbon::now(), 400);
            }
        }catch (\Exception $ex){
            DB::rollBack();
            Log::info($ex->getMessage());
        }

    }
}
