<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index(Request $req)
    {
        $validator = \Validator::make($req->all(), [
            'count' => 'min:1|max:100',
            'q' => 'required|min:1|max:150',
        ]);
        if(!isset($req->count)){
            $req->count = 100;
        }
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()
            ], 400);
        }
        $novels = \App\Novel::where('title', 'like', '%' . $req->q . '%')
                ->whereOr('description', 'like', '%' . $req->q . '%')
                ->distinct()
                ->select('title', 'description');
        return $novels->paginate($req->count);
    }
}
