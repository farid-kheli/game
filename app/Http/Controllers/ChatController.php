<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\FriendRequestSent;
use App\Models\Friend;
use App\Models\User;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }
    public function request(Request $request)
    {
        $user = auth()->user();
        $friend = $request->input('friend_id');
        if (!$friend) {
            return response()->json(['error' => 'Friend ID is required.'], 400);
        }
        if ($user->id === $friend) {
            return response()->json(['error' => 'You cannot send a friend request to yourself.'], 400);
        }
        //if (Friend::where('user_id', $user->id)->where('friend_id', $friend)->exists()) {
        //    return response()->json(['error' => 'You are already friends with this user.'], 400);
        // }
        $id = Friend::create([
            'user_id' => $user->id,
            'friend_id' => $friend,
        ])->id;
    
        broadcast(new FriendRequestSent(User::find($friend),$id));
        return response()->json(['message' => 'Friend request sent successfully.']);
    }
    function accept(Request $request)
    {
        $user = auth()->user();
        $id = $request->input('id');
        
        if (!$id) {
            return response()->json(['error' => 'Friend ID is required.'], 400);
        }
        
        $friendRequest = Friend::where('id', $id)->first();
        
        if ($user->id != $friendRequest->friend_id) {
            return response()->json(['error' => 'Friend not authorised.'], 404);
        }
        
        $friendRequest->status = 'accepted';
        $friendRequest->save();
        
        return response()->json(['message' => 'Friend request accepted successfully.']);
    }
}
