<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB, Auth, Hash, Validator, Exception, Log;

use App\Models\Bike;

use App\Helpers\Helper;

class UserController extends Controller
{
    /**
     * @method index()
     * 
     * @uses To display the landing page
     *
     * @created Naveen S
     *
     * @updated
     *
     * @param NULL
     *
     * @return view of Index Page
     *
     */
    public function index() {

        $bikes = Bike::paginate(8);

        return view('index')
                ->with('bikes', $bikes);

    }

    /**
     * @method register()
     * 
     * @uses To display the bike register page
     *
     * @created Naveen S
     *
     * @updated
     *
     * @param NULL
     *
     * @return view of Register Page
     *
     */
    public function register(Request $request) {

        return view('register');

    }

    /**
     * @method register_save()
     * 
     * @uses To save the bike details
     *
     * @created Naveen S
     *
     * @updated
     *
     * @param NULL
     *
     * @return view of Register Page
     *
     */
    public function register_save(Request $request) {

        try {

            DB::beginTransaction();

            $validator = Validator::make( $request->all(), [

                'name' => 'required|min:3|max:50|regex:/^[a-z A-Z]+$/',

                'brand' => 'required|min:1|max:50|regex:/^[a-z A-Z]+$/',

                'rent' => 'required|between:0,10000.00',

                'picture' => 'image|nullable|max:999|mimes:jpeg,bmp,png,jpg',                

            ]);

            if($validator->fails()) {

                $error = implode(',', $validator->messages()->all());

                throw new Exception($error, 101);
            }
            
            $bike_details = new Bike;

            $bike_details->brand = $request->brand ?: '';

            $bike_details->name = $request->name ?: '';

            $bike_details->rent = $request->rent ?: 0.00;

            if($request->hasFile('picture')){

                $bike_details->picture = Helper::upload_file($request->file('picture'), FILE_PATH_BIKE);

            } 

            if($bike_details->save()) {

                DB::commit();

                return redirect()->route('index')->with('success', 'Bike Registerd Successfully');
            
            }

            throw new Exception('Something Went Wrong', 1); 

        }  catch(Exception $e){ 

            return redirect()->back()->withInput()->with('error',$e->getMessage());
        }
    }

}
