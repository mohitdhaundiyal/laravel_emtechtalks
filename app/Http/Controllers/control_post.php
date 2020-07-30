<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\post;
use App\admin;
use Session;
use App\message;

class control_post extends Controller
{
    function admin_login(Request $request)
    {
        $admin = admin::where('admin_username', $request->admin_username)->get();
        if (md5($request->admin_password) == $admin[0]->admin_password) {
            $request->session()->put('user', $request->input('admin_username'));
            $request->session()->flash('success_pass', 'Successfully Login!');
            return redirect('create');
        } else {
            $request->session()->flash('invalid_pass', 'Invalid Password!');
            return redirect('login');
        }
    }

    function create(Request $request)
    {
        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'cover_image_' . time() . '.' . $extension;
            // Upload Image
            // $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore); //real
            $file = request()->file('cover_image');
            $file->storeAs('cover_images', $fileNameToStore, ['disk' => 's3']);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //create post
        $post = new post;
        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('posts');
    }

    function view_post()
    {
        if (Session::get('user') == false) {
            return redirect('login');
        }
        $posts = post::OrderBy('id', 'desc')->paginate(5);
        return view('admin.posts', ["posts" => $posts]);
    }

    function show($id)
    {
        if (Session::get('user') == false) {
            return redirect('login');
        }
        $post = post::find($id);
        return view('admin.show', ['post' => $post]);
    }

    function logout_admin()
    {
        session()->forget('user');
        return redirect('login');
    }

    function delete_post($id)
    {
        $post = post::find($id)->delete();
        return redirect('posts');
    }

    function show_messages()
    {
        if (Session::get('user') == false) {
            return redirect('login');
        }
        $message = message::get();
        return view('admin.messages', ['messages' => $message]);
    }

    function delete_message($id)
    {
        $message = message::find($id)->delete();
        return redirect('messages');
    }
}
