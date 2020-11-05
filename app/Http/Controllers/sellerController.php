<?php

namespace App\Http\Controllers;
use App\sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers  = sellers::all();

        return view('seller/viewseller',['sellers' => $sellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller/addseller');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('image') && $request->exists('descri')) {

            $name = $request->input('name');

            $email = $request->input('email');

            $phone = $request->input('phone');

            $image = $request->input('image');

            $descri = $request->input('descri');

            $nameImage = rand(11111, 99999) . '.jpg';

            $image1 = explode(';', $image);

            $image2 = explode(',', $image1[1]);

            $image = base64_decode($image2[1]);

            $path = public_path('images/sellers/') . $nameImage;

            file_put_contents($path, $image);

            sellers::create([
                'name' => $name,
                'email' => $email,
                'image' => ('images/sellers/') . $nameImage,
                'phone' => $phone,
                'descri' => $descri
            ]);

            return 'done';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $seller = str_replace('_', ' ', $id);

        $seller = sellers::where('name', $seller)->get();

        return view('seller.updateseller', ['seller' => $seller]);
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
        if ($request->has('image') && $request->exists('descri')) {

            $name = $request->input('name');

            $email = $request->input('email');

            $phone = $request->input('phone');

            $descri = $request->input('descri');

            $seller_id = $request->seller_id;

            $image = $request->input('image');

            $checkImage = explode('.',$image);

            $checkImage = last($checkImage);

            if (!in_array($checkImage, ['jpg', 'png', 'jpeg', 'gif'])) {

                $obj = sellers::find($seller_id) ;

                $oldPath = $obj->image;

                if(is_file(public_path($oldPath))){

                    unlink(public_path($oldPath));
                }

                $nameImage = rand(11111, 99999) . '.jpg';

                $image1 = explode(';', $image);

                $image2 = explode(',', $image1[1]);

                $image = base64_decode($image2[1]);

                $path = public_path('images/sellers/') . $nameImage;

                file_put_contents($path, $image);

                $image = ('images/sellers/') . $nameImage;
            }

            sellers::find($seller_id)->update([
                'name' => $name,
                'email' => $email,
                'image' => $image,
                'phone' => $phone,
                'descri' => $descri
            ]);

            return 'done';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $obj = sellers::find($id);

        $image = $obj->image;

        if (is_file(public_path($image))) {

            unlink(public_path($image));
        }

        $obj->delete();
    }
}
