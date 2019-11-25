<?php

namespace App\Http\Controllers;

use App\Started;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Charts\StartedCharts;
use App\Charts\Column;
use App\Charts\test;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcome;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function Started(){

        $month= Carbon::now()->month;
        //$a=Started::whereDate('created_at','2019-'.$month.'-'.$month)->count();


        $data = collect([]);
        $chart=new StartedCharts();
        for ($days_backwards = 0; $days_backwards < 32; $days_backwards++) {
            $data->push(Started::whereDate('created_at','2019-'.$month.'-'.$days_backwards)->count());
        }

        $dataBlu = collect([]);
        $month4=4;
        for ($days_backwards = 0; $days_backwards < 32; $days_backwards++) {
            $dataBlu->push(Started::whereDate('created_at','2019-'.$month4.'-'.$days_backwards)->count());
        }

        //Tao bieu do
        $chart->labels($data->keys());
        $chart->dataset('My dataset', 'line', $data->values())->color('#000099');
        $chart->dataset('My dataset', 'line', $dataBlu->values())->color('#33CC00');



        //Bieu do 2
        $column=new Column();
        $data1 = collect([]);
        for ($days_backwards1 = 0; $days_backwards1 < 32; $days_backwards1++) {
            $data1->push(Started::whereDate('created_at','2019-'.$month.'-'.$days_backwards1)->count());
        }


        //Tao bieu do
        $column->labels($data1->keys());
        $column->dataset('My dataset', 'line', $data1->values());


        //Bieu do 3
        $test=new test();
        $data2 = collect([]);
        for ($days_backwards2 = 0; $days_backwards2 < 32; $days_backwards2++) {
            $data2->push(Started::whereDate('created_at','2019-'.$month.'-'.$days_backwards2)->count());
        }


        //Tao bieu do
        $test->labels($data2->keys());
        $test->dataset('My dataset', 'line', $data2->values());


        return view('Started.index',compact('chart','column','test'));
    }
    public function StartedMonth(){
        $chart=new StartedCharts();

        $data=collect([]);
        for ($i=0;$i<12;$i++){
            $data->push(Started::whereMonth('created_at',$i))->count();
        }

        dd($data);

    }
    public function email(){

        Mail::to(Auth::user()->email)->send(new NewUserWelcome());
        //Mail::to() gửi từ điện chỉ... với nội dung trong send

//        Mail::send(['text'=>'mail'],['name','Sarthak'],function($message){
//            $message->to('dragonbibio@gmail.com','to Test')->subject('test email');
//            $message->from('dragonbibio@gmail.com','Test');
//        });
        return redirect()->route('home');
    }
}
