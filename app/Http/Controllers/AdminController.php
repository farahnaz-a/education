<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subscriber;
use App\Models\ThemeSetting;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Shetabit\Visitor\Models\Visit;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        $total    = Visit::whereIn('browser', ['IE', 'Firefox', 'Chrome', 'Safari', 'Opera'])->whereDate('created_at', '>', Carbon::now()->subDays(28))->get();
        $chrome   = $total->where('browser', 'Chrome')->count();
        $firefox  = $total->where('browser', 'Firefox')->count();
        $internet = $total->where('browser', 'IE')->count();
        $safari   = $total->where('browser', 'Safari')->count();
        $opera    = $total->where('browser', 'Opera')->count();

        $total   = $total->count();
        $browser = [];

        $browser['chrome']   = round(($chrome /  $total) * 100);
        $browser['firefox']  = round(($firefox /  $total) * 100);
        $browser['internet'] = round(($internet /  $total) * 100);
        $browser['safari']   = round(($safari /  $total) * 100);
        $browser['opera']    = round(($opera /  $total) * 100);

        $today_page_views = Visit::whereDate('created_at', '=', Carbon::today())->count();

        $unique_users = User::count();


        $top_pages = Visit::select('url')
            ->selectRaw('COUNT(*) AS count')
            ->groupBy('url')
            ->orderByDesc('count')
            ->limit(10)
            ->get();
            $subs = Subscriber::select(array(DB::raw('DATE(created_at) AS date')), DB::raw('COUNT(code) AS count'))->groupBy('date')->get();

            $total = [];
            $date  = [];

            foreach($subs as $w){

                $total[] = Subscriber::whereDate('created_at', Carbon::parse($w->date))->get()->count();
                $date[] = Carbon::parse($w->date)->format('d M');

            }

        return view('admin.index',compact('browser', 'today_page_views', 'unique_users', 'top_pages', 'total', 'date','subs'));

    // End    
    }

    // User List
    public function userList(){

        $users = User::where('id', '!=' , Auth::id())->orderBy('role', 'asc')->get();

        return view('admin.users.index', compact('users'));
    }

    // User Create
    public function userCreate(){

        return view('admin.users.create');
    }

    // User Create
    public function userRegister(Request $request){

        $request->validate([
            'name'     => 'required', 
            'email'    => 'required|email|unique:users', 
            'password' => 'required|confirmed|min:8',
            'role'     => 'required',
        ]);

        $user = User::create([
            'name'       => $request->name, 
            'email'      => $request->email,
            'role'       => $request->role,
            'password'   => bcrypt($request->password), 
            'created_at' => Carbon::now(),
           ]);
         
        ThemeSetting::create([
            'user_id' => $user->id, 
            'created_at' => Carbon::now(), 
        ]); 


        // Return Back to List With Success Message
        return redirect()->route('users.index')->withSuccess('Registered Successfully');

    }

    // User Update
    public function userUpdate(Request $request,$id){

        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'role'  => 'required',
        ]);

        $user = User::find($id);

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();

        return back()->withSuccess('User Updated');
    }

    
     // User Delete
    public function userDestroy($id){

        $user = User::find($id);

        $data = Course::where('user_id', $user->id)->get();

        if ($data->count() > 0 ) {

            return back()->withWarning('this user has active course');
        }

        else{

            $user->delete();

            return back()->withSuccess('User deleted');
        }

        
    }
    
}
