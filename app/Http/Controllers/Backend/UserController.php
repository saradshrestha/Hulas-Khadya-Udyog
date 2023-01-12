<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Requests\User\UserRequestUpdate;
use App\User;

use Cartalyst\Sentinel\Roles\EloquentRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

   
    public function index(){
        $users = User::all();
        return view('admin.user.index', compact('users'));

    }

    public function create(){
        return view('admin.user.create');
    }


    public function store(UserRequest $request){
        try{
            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->role = $request->role;
            $user->status = 'Active';
            $user->image = imageupload('/upload/user/', $request->file('image'));
            $response = $user->save();
            if($response){
                return redirect()->back()->with('success', 'User Successfully Created');
            }else{
                return redirect()->back()->with('error', 'Error while Creating User!!');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Creating User!!');
        }
    }


    public function edit($id)
    {
        $user = User::find($id);
        if($user){
            return view('admin.user.edit', compact('user'));
        }else{
            return redirect()->back()->with('errors', 'User Not Found!!! Refresh your page.');
        }
    }

    public function update(UserRequestUpdate $request){

        try{
            $user = User::where('id', $request->user_id)->first();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->status = $request->status;
            $user->phone = $request->phone;
            if ($request->hasFile('image')){
                imageDelete($user);
                $user->image = imageupload('/upload/user/', $request->file('image'));
            }
            if($user->update() == true){
                return redirect()->back()->with('success', 'User Successfully Updated.');
            }else{
                return redirect()->back()->with('error', 'Error while Updating User!!');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Updating User!!');
        }
    }
    
    
    
    public function passwordChange(ChangePasswordRequest $request){
        try{
            $user = User::where('id', $request->user_id)->first();
            $user->password = bcrypt($request->password);
            if($user->update() == true){
                return redirect()->back()->with('success', 'Password Changes Successfully.');
            }else{
                return redirect()->back()->with('errors', 'User Not Found!!! Refresh your page.');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Updating User!!');
        }

    }



    public function myProfile(){
        $user = Auth::user();
        if($user){
            return view('admin.user.profile', compact( 'user'));
        }else{
            return redirect()->back()->with('errors', 'User Not Found!!! Refresh your page.');
        }

    }


    public function myProfileUpdate(Request $request){
        try{
            $user = User::where('id',Auth::id())->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            if ($request->hasFile('image')){
                imageDelete($user);
                $user->image = imageupload('/upload/user/', $request->file('image'));
            }
            $response = $user->update();
            if($response){
                $inputs = $request->only(
                    'DOB',
                    'degination',
                    'address'

                );

                foreach ($inputs as $inputKey => $inputValue) {

                    $user->userInfo()->updateOrCreate(
                        ['key' => $inputKey],
                        ['value' => $inputValue]
                    );
                }
                return redirect()->back()->with('success', 'Profile Successfully Updated.');
            }else{
                return redirect()->back()->with('error', 'Error while Updating Profile!!');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error while Updating Profile!!');
        }
    }

}
