<?php

namespace App\Http\Controllers;

use App\cars;
use App\rating;
use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class pagesController extends Controller
{
    /// Home

    public function home(){

        $cars = cars::orderBy('id','asc')->limit(8)->get();

        $images = DB::table('images')->orderBy('id')->get();

        return view('pages/home',['cars' => $cars,'images' => $images]);
    }

    /// About Us

    public function about(){

        return view('pages/about');
    }

    /// Contact Us

    public function contact(){

        return view('pages/contact');
    }

    public function contactForm(Request $request){

        if($request->has('name') && $request->exists('email')){

            $request->validate([
                'name' => 'required|string|min:6',
                'email' => 'required|email',
                'subject' => 'required|min:10',
                'message' => 'required|min:30'
            ]);

            ////////

            $user = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message')
            ];

            /////////

            $obj = new contact($user);

            Mail::to('mbdalzym376@gmail.com')->send($obj);


            return redirect('contact')->with('success','Message Success Send');
        }
    }
    /// Login

    public function login(){

        return view('pages/login');
    }

    /// Profile

    public function profile()
    {
        $cars = Auth::guard('web')->user()->cars;

        $cars = explode(',', $cars);

        $carsArray =  [];

        $imageArray = [];

        for($i=0;$i<count($cars);$i++){

            $car = cars::find($cars[$i]);

            array_push($carsArray,$car);
        }

        $images = DB::table('images')->get();

        return view('renter/profile',['cars' => $carsArray,'images' => $images]);
    }

    /// Profile

    public function admin()
    {
        $cars = cars::paginate(12);

        $images = DB::table('images')->orderBy('id')->get();

        return view('admin/dashboard',['cars' => $cars,'images' => $images]);
    }

    /// forget

    public function forget()
    {
        return view('pages/forget');
    }

    /// register

    public function register(){

        return view('pages/register');
    }


    public function services()
    {

        $cars = cars::paginate(12);

        $images = DB::table('images')->orderBy('id')->get();

        return view('pages.services', ['cars' => $cars,'images' => $images]);
    }

    public function filter(){

        if(request()->has('property') && request()->exists('bath')){

            $property = request()->input('property');

            $bed = request()->input('bed');

            $bath = request()->input('bath');

            $min_price = request()->input('min_price');

            $max_price = request()->input('max_price');

            $min_sqft = request()->input('min_sqft');

            $max_sqft = request()->input('max_sqft');

            $cars = cars::where('property',$property)
            ->where('bedroom', $bed)
            ->where('bathroom', $bath)
            // ->whereIn('price',[$min_price,$max_price])
            // ->whereIn('sqft', [$min_sqft, $max_sqft])   
            ->get();

            // print_r($cars);
            return redirect('services')->with('cars',$cars);
        }
    }

    public function accessLocation(Request $request){

        if($request->has('lat') && $request->exists('long')){

            $circle_radius = 3959;
            
            $max_distance = 20;

            $lat = $request->input('lat');

            $lng = $request->input('long');

            $candidates = DB::select(
                        'SELECT * FROM
                                (SELECT id, title, location, geolocation, (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
                                cos(radians(longitude) - radians(' . $lng . ')) +
                                sin(radians(' . $lat . ')) * sin(radians(latitude))))
                                AS distance
                                FROM cars) AS distances
                                WHERE distance < ' . $max_distance . '
                                ORDER BY id
                                OFFSET 0
                                LIMIT 12;
                        ');
        }
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           

    public function show($id)
    {
        $car = str_replace('_',' ',$id);

        $car = cars::where('title',$car)->get();

        $images = DB::table('images')->where('course_id',$car[0]->id)->orderBy('id')->get();

        $seller = DB::table('sellers')->where('id',$car[0]->seller)->orderBy('id')->get();

        $car_id =  $car[0]->id;

        $rating = rating::fetchCountRating($car_id);
        
        if(empty($car)){

            return redirect('services');

        }else{

            return view('pages.car_show', ['car' => $car, 'images' => $images,'seller' => $seller,'rating' => $rating]);
        }
    }
}
