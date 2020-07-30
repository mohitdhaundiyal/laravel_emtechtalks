<?php

namespace App\Http\Controllers;

use App\post;
use App\comment;
use App\message;
use Illuminate\Http\Request;

class main_controller extends Controller
{
   function index()
   {
      $posts = post::OrderBy('id', 'desc')->paginate(9);
      $recent = post::OrderBy('id', 'desc')->paginate(4);
      return view('index', ["posts" => $posts, "recents" => $recent]);
   }

   function show_post($id)
   {
      //recent footer
      $recent_footer = post::OrderBy('id', 'desc')->paginate(4);
      //comments
      $comment = comment::where('post_id', $id)->OrderBy('id', 'desc')->get();
      //recent card
      $recent = post::OrderBy('id', 'desc')->paginate(5);
      //post
      $post = post::find($id);
      return view('post', ['post' => $post, 'recent' => $recent, 'recents' => $recent_footer, 'comments' => $comment]);
   }
   function message(Request $request)
   {
      $message = new message;
      $message->contact_name = $request->contact_name;
      $message->contact_email = $request->contact_email;
      $message->contact_message = $request->contact_message;
      $message->save();
      $request->session()->flash('message', 'Thanks for your message.');
      return redirect('/#msg');
   }

   function news(Request $request)
   {
      //post
      $post = post::OrderBy('id', 'desc')->paginate(3);

      //search
      $title = $request->input('search_item');

      $search_item = post::where('post_title', "LIKE", "%{$title}%")->OrderBy('id', 'desc')->paginate(5);
      return view('news', ['posts' => $post, 'search_items' => $search_item]);
   }

   function comment(Request $request)
   {
      //return $request->post_id;
      $comment = new comment;
      $comment->post_id = $request->post_id;
      $comment->comment_name = $request->comment_name;
      $comment->comment_email = $request->comment_email;
      $comment->comment = $request->comment;
      $comment->save();
      $post_id = $request->post_id;
      return redirect('post-' . $post_id);
   }
}
