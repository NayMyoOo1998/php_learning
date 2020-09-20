<?php
namespace App\Controllers;
use App\core\App;
class PageController
{
    public function index()
    {
        // die(var_dump('home'));
        $tasks = App::get('database')->selectAll('todos');

        $users = App::get('database')->selectAll('users');



        // var_dump($tasks);
        return view('index',['tasks' => $tasks, 'users' => $users]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function addTodos(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
        
            $result = App::get('database')->Insert('users',[
                'name' => $name,
                'email' => $email,
            ]);
        
            return redirect('');
        }
    }
}
