<?php

namespace App\Http\Controllers;
use App\Models\Places;
use App\Models\BangladeshiPlaces;
use App\Models\BookingList;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage(){

        $otherPlaces = Places::all();
        $bdPlaces = BangladeshiPlaces::all();
        return view('frontend.index',['otherPlaces'=>$otherPlaces,'bdPlaces'=>$bdPlaces]);
    }

    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }

    public function bookingList(Request $request){

        if(!file_exists(public_path('Pass Images'))){
            mkdir(public_path('Pass Images'),0777,true);
        }

        $image = $request->pass_image;
        
        $name = $image->getClientOriginalName();
        $imageName = time()."_".$name;
        $destination = public_path('Pass Images');
        $image->move($destination, $imageName);


        $data['UserName']=$request->user_name;
        $data['UserEmail']=$request->user_email;
        $data['UserConNum']=$request->user_conNum;
        $data['UserAddress']=$request->user_address;
        $data['BdDes']=$request->user_des_inBD;
        $data['WorldDes']=$request->user_des_inWorld;
        $data['DepartDate']=$request->departing_date;
        $data['UserBudget']=$request->user_budget;
        $data['Member']=$request->user_budget;
        $data['PassImage']='Pass Images/'.$imageName;
        $data['Status']="In Progress";
        $data['UserMsg']=$request->message;


        BookingList::create($data);

        return redirect()->route('home');

    }

    public function bookingListView(){
        $bookingListView = BookingList::all();
        return view('placesList.BookingListTable',['bookingListView'=>$bookingListView]);
    }

    public function bookingStatus(){

        $bookingStatus = BookingList::all();
        return view('frontend.bookingStatus',['bookingStatus'=>$bookingStatus]);
    }

}
