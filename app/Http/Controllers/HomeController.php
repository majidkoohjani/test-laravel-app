<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage() {
        $username = "کاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستیکاربر تستی";
        $username2 = "کاربر تستی";

        $students = [
            "1" => ["name" => "Mahdi", "age" => 15],
            "2" => ["name" => "Hassan", "age" => 14],
            "3" => ["name" => "Mohammad", "age" => 12],
            "4" => ["name" => "Majid", "age" => 10],
        ];

        return view("home", ["username" => $username, "students" => $students]);
    }
}
