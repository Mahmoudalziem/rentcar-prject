<?php

namespace App\Http\Controllers;
use session;
use App\Users;
use App\rating;
use App\Mail\activeAccount;
use App\Mail\forgetAccount;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        Users::where('account_verify', $id)->update([
            'account_verify' => null,
            'account_active' => 1
        ]);

        return redirect('login')->with('error', 'Account Active Success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('formContent')) {

            $form = $request->input('formContent');

            parse_str($form, $_POST);

            $name = $_POST['name'];

            $email = $_POST['email'];

            $password = $_POST['password'];

            $verify_code = rand(454364645, 456456565464546);

            $checkEmail = User::where('email', $email)->exists();

            if ($checkEmail) {

                return response()->json([
                    'status' => 'This Account Already Found'
                ]);
            } else {

                Users::create([
                    'name' => $name,
                    'email' => $email,
                    'account_active' => 0,
                    'account_verify' => $verify_code,
                    'password' => bcrypt($password)
                ]);


                $activeMail = ['name' => $name, 'email' => $email, 'verify_code' => $verify_code];

                $activeMail = new activeAccount($activeMail);

                Mail::to($email)->send($activeMail);

                return response()->json([
                    'status' => 'Go To Your E-Mail To Active Your Account'
                ]);
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forget(Request $request)
    {
        if($request->has('email')){

            $email = $request->input('email');

            $user = Users::where('email',$email);

            if($user->exists()){

                $forget = rand(454364645, 456456565464546);

                $forgetPassword = new forgetAccount([
                    'name' => $user->get()[0]->name,
                    'id' => $forget
                ]);

                Mail::to($email)->send($forgetPassword);

                $user->update([
                    'account_verify' => $forget
                ]);

                return back()->with('error', 'Go To Your E-Mail To Rest Your Password');

            }else{
                return back()->with('error','Account Not Found');
            }
        }
    }

    public function reset($id){

        $user = Users::where('account_verify',$id);

        if($user->exists()){

            $name = $user->get()[0]->name;

            $email = $user->get()[0]->email;

            session()->put('email',$email);

            return view('pages.reset')->with('name',$user->get()[0]->name);

        }else{

            return redirect('login');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->has('password') && $request->exists('confirm_password')){

            $name = $request->input('name');

            $password = $request->input('password');

            $id = Auth::guard('web')->user()->id;

            users::find($id)->update([
                'name' => $name,
                'password' => bcrypt($password)
            ]);

            return $name;
        }
    }

    public function updateImage(Request $request){

        if($request->has('image')){

            $image = $request->input('image');

            $user = Auth::guard('web')->user()->get();

            $avatar = $user[0]->avatar;

            $id =  $user[0]->id;

            if(is_file(public_path($avatar))){

                unlink(public_path($avatar));
            }

            $nameImage = rand(11111, 99999) . '.jpg';

            $image1 = explode(';', $image);

            $image2 = explode(',', $image1[1]);

            $image = base64_decode($image2[1]);

            $path = public_path('images/users/') . $nameImage;

            file_put_contents($path, $image);

            $image = ('images/users/') . $nameImage;

            if(Auth::check()){

                Users::find($id)->update([
                    'avatar' => $image
                ]);
            }
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->has('password') && $request->exists('confirm_password')){

            $request->validate([
                'password' => 'min:6|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:6'
            ]);

            $password = $request->input('password');

            if(session()->has('email')){

                $email = session()->get('email');

                Users::where('email', $email)->update([

                    'password' => bcrypt($password)
                ]);

                session()->forget('email');

                return redirect('login')->with('error','Password Updated Success');

            }else{

                return false;
            }
        }
    }

    public function enroll(Request $request){

        if($request->has('car')){

            $id = $request->input('car');

            $idUser = Auth::guard('web')->user()->id;

            $cars = Auth::guard('web')->user()->cars;

            if($cars == ''){

                $cars = $id;

            }else{

                $arraycars = explode(',',$cars);

                if(!in_array($id,$arraycars)){

                    $cars = $cars . ',' . $id;

                }else{

                    return 'car Already Found';
                }
            }

            Users::find($idUser)->update([
                'cars' => $cars
            ]);

            return 'car Added Success';
        }
    }

    public function rate(Request $request){

        if(Auth::guard('web')){

            if ($request->has('rate') && $request->has('car')) {

                $rate = $request->input('rate');

                $car = $request->input('car');

                $user_id = Auth::guard('web')->user()->id;

                $ratingCheck = rating::where('user_id', $user_id)->where('car_id', $car);

                if ($ratingCheck->exists()) {

                    $ratingCheck->update([
                        'user_id' => $user_id,
                        'car_id' => $car,
                        'rating' => $rate
                    ]);
                } else {

                    rating::updateOrCreate([
                        'user_id' => $user_id,
                        'car_id' => $car,
                        'rating' => $rate
                    ]);
                }

                $ratingSum = rating::fetchCountRating($car);

                return response()->json($ratingSum);
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
