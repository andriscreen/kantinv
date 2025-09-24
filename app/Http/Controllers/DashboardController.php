<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = [
            "Monday" => ["name" => "Grilled Chicken Salad", "desc" => "Fresh greens with grilled chicken breast", "price" => 8.5],
            "Tuesday" => ["name" => "Beef Stir Fry", "desc" => "Tender beef with vegetables and rice", "price" => 9],
            "Wednesday" => ["name" => "Fish and Chips", "desc" => "Crispy fish fillet with golden fries", "price" => 10],
            "Thursday" => ["name" => "Vegetarian Pasta", "desc" => "Creamy pasta with seasonal vegetables", "price" => 7.5],
            "Friday" => ["name" => "BBQ Pork Ribs", "desc" => "Slow-cooked ribs with coleslaw", "price" => 11],
            "Saturday" => ["name" => "Salmon Teriyaki", "desc" => "Glazed salmon with steamed vegetables", "price" => 12],
            "Sunday" => ["name" => "Roast Beef", "desc" => "Sunday roast with all the trimmings", "price" => 10.5],
        ];
        return view('index', compact('menu'));
    }

    public function formSchedule()
    {
        $menu = [
            "Monday" => ["name" => "Grilled Chicken Salad", "desc" => "Fresh greens with grilled chicken breast", "price" => 8.5],
            "Tuesday" => ["name" => "Beef Stir Fry", "desc" => "Tender beef with vegetables and rice", "price" => 9],
            "Wednesday" => ["name" => "Fish and Chips", "desc" => "Crispy fish fillet with golden fries", "price" => 10],
            "Thursday" => ["name" => "Vegetarian Pasta", "desc" => "Creamy pasta with seasonal vegetables", "price" => 7.5],
            "Friday" => ["name" => "BBQ Pork Ribs", "desc" => "Slow-cooked ribs with coleslaw", "price" => 11],
            "Saturday" => ["name" => "Salmon Teriyaki", "desc" => "Glazed salmon with steamed vegetables", "price" => 12],
            "Sunday" => ["name" => "Roast Beef", "desc" => "Sunday roast with all the trimmings", "price" => 10.5],
        ];
        return view('form-schedule', compact('menu'));
    }
}
