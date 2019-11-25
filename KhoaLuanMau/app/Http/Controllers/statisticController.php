<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Meeting;
use Illuminate\Support\Facades\DB;

use App\Charts\statisticMetting;
use App\Charts\statisticPost;

class statisticController extends Controller
{
    //
    public function post(){
        $date = Carbon::now()->day;
        $month= Carbon::now()->month;
        $year=Carbon::now()->year;

        $postDate=Post::whereDate('created_at', '=', $date)->get();
        $postMonth=Post::whereMonth('created_at', '=', $month)->get();
        $postYear=Post::whereYear('created_at', '=', $year)->get();

        $posts=Post::all();

        //oder

        $orderDate=Meeting::whereDate('created_at', '=', $date)->get();
        $orderMonth=Meeting::whereMonth('created_at', '=', $month)->get();
        $orderYear=Meeting::whereYear('created_at', '=', $year)->get();

        $priceDate = DB::table('meetings')->whereDate('created_at', '=', $month)->sum('describe');
        $priceMonth = DB::table('meetings')->whereMonth('created_at', '=', $month)->sum('describe');
        $priceYear = DB::table('meetings')->whereMonth('created_at', '=', $month)->sum('describe');


        $orders=Meeting::all();

        return view('Statistic.post',compact('postMonth','postDate','posts','postYear'
            ,'orderDate','orderMonth','orderYear','orders','priceDate','priceMonth','priceYear'));
    }
    public function chart(){
        $month= Carbon::now()->month;
        //$a=Started::whereDate('created_at','2019-'.$month.'-'.$month)->count();
        $chart=new statisticMetting();

        $month5 = collect([]);
        for ($days_backwards = 0; $days_backwards < 32; $days_backwards++) {
            $month5->push(Meeting::whereDate('created_at','2019-'.$month.'-'.$days_backwards)->count());
        }

        $month4 = collect([]);
        $yesterday=$month-1;
        for ($days_backwards1 = 0; $days_backwards1 < 32; $days_backwards1++) {
            $month4->push(Meeting::whereDate('created_at','2019-'.$yesterday.'-'.$days_backwards1)->count());
        }
        $month3 = collect([]);
        $Days2Ago=$month-2;
        for ($days_backwards2 = 0; $days_backwards2 < 32; $days_backwards2++) {
            $month3->push(Meeting::whereDate('created_at','2019-'.$Days2Ago.'-'.$days_backwards2)->count());
        }

        //Tao bieu do
        $chart->labels($month5->keys());
        $chart->dataset('Order month now', 'line', $month5->values())->color('#000099');
        $chart->dataset('Order last month', 'line', $month4->values())->color('#33CC00');
        $chart->dataset('Order 2 month ago', 'line', $month3->values())->color('#FF3333');




        //Biểu mẫu Post
        $posts=new statisticPost();

        $rooms = collect([]);
        for ($days_backwards2 = 0; $days_backwards2 < 32; $days_backwards2++) {
            $rooms->push(Room::whereDate('created_at','2019-'.$month.'-'.$days_backwards2)->count());
        }

        $posts5 = collect([]);
        for ($days_backwards = 0; $days_backwards < 32; $days_backwards++) {
            $posts5->push(Post::whereDate('created_at','2019-'.$month.'-'.$days_backwards)->count());
        }

        $posts4 = collect([]);
        $yesterday=$month-1;
        for ($days_backwards1 = 0; $days_backwards1 < 32; $days_backwards1++) {
            $posts4->push(Post::whereDate('created_at','2019-'.$yesterday.'-'.$days_backwards1)->count());
        }
        $posts3 = collect([]);
        $Days2Ago=$month-2;
        for ($days_backwards2 = 0; $days_backwards2 < 32; $days_backwards2++) {
            $posts3->push(Post::whereDate('created_at','2019-'.$Days2Ago.'-'.$days_backwards2)->count());
        }
        $posts->labels($posts5->keys());
        $posts->dataset('waiting room', 'line', $rooms->values())->color('#FFFF00');
        $posts->dataset('Posts month now', 'line', $posts5->values())->color('#000099');
        $posts->dataset('Posts last month', 'line', $posts4->values())->color('#33CC00');
        $posts->dataset('Posts 2 month ago', 'line', $posts3->values())->color('#FF3333');

        //Biểu đồ rooms và post


        //Xử lý dữ liệu truyền sang

        $postDate=Post::whereDate('created_at',today())->get();
        $postMonth=Post::whereMonth('created_at',today())->get();
        $postYear=Post::whereYear('created_at',today())->get();

        $orderDate=Meeting::whereDate('created_at', today())->get();
        $orderMonth=Meeting::whereMonth('created_at', today())->get();
        $orderYear=Meeting::whereYear('created_at', today())->get();

        $priceDate = DB::table('meetings')->whereDate('created_at', today())->sum('describe');
        $priceMonth = DB::table('meetings')->whereMonth('created_at', today())->sum('describe');
        $priceYear = DB::table('meetings')->whereYear('created_at', today())->sum('describe');

        return view('Statistic.chart',compact('chart','posts',
                'postDate','postMonth','postYear',
                'orderDate','orderMonth','orderYear',
                'priceDate','priceMonth','priceYear'
        ));
    }
}
