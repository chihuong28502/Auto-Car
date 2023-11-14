<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Imports\MyImport; // Thay thế 'App\Imports' bằng namespace chính xác của lớp MyImport nếu cần thiết
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HandleController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function getForm()
    {
        return view('form');
    }

    public function handleRequest(Request $request)
    {
        // $user = User::where(['email' => $request->email, 'password' => $request->password])->first();
        // // return $user;
        // if ($user) {
        //     // Tạo token cho người dùng
        //     $token = $request->user()->createToken('token-name')->accessToken;
        //     return ['token' => $token];
        // } else {
        //     return response()->json(['message' => 'Unauthorized'], 401);
        // }

        // $user = User::where('email', $request->email)->first();
        // if ($user) {
        //     $success['token'] =  $user->createToken('MyApp')->accessToken;
        //     return response()->json(['success' => $success]);
        // } else {
        //     return response()->json(['error' => 'Unauthorised'], 401);
        // }
        $request->validate(['file' => ['required', 'file', 'mimes:xlsx,xls,csv']]);
        $uploadedFile = $request->file('file');
        // $folder = time();
        // $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        // $path = $uploadedFile->storeAs($folder, $fileName, 'temp');
        // $data = Excel::toCollection(new MyImport, storage_path('app/temp/' . $path))->first();
        dd($uploadedFile);
    }
    public function auth()
    {
        // $query = User::all();
        return 'minhDzai';
    }
}
