<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Places;
use App\Models\BangladeshiPlaces;
use App\Models\BookingList;

class DashBoardController extends Controller
{
    public function adminIndex(){
        return view('adminPanel.adminIndex');
    }
    public function addPlacesForm(){
        return view('addPlaces.addNewPlaces');
    }


    public function newPlaces(Request $request){ //capturing dada from from so its method is POST
        //dd($request -> all());

        if(!file_exists(public_path('images'))){
            mkdir(public_path('images'),0777,true);
        }

        $image = $request->image;
        $name = $image->getClientOriginalName();
        $imageName = time()."_".$name;
        $destination = public_path('images');
        $image->move($destination, $imageName);


        $data['countryName'] = $request->country_name;
        $data['placeName'] = $request->place_name_oc;
        $data['Image']='images/'.$imageName;
        $data['Expense'] = $request->expense;

        Places::create($data);

        return redirect() -> route('addPlaces');
    }

    public function newPlacesList(){
        $newPlacesList = Places::all();

        return view('placesList.placesList',['newPlacesList'=>$newPlacesList]);
    }




    public function addPlacesBDForm(){
        return view('addPlaces.addPlacesBD');
    }
    public function newBDPlaces(Request $request){//capturing dada from from so its method is POST
        //dd($request -> all());

        if(!file_exists(public_path('bdImages'))){
            mkdir(public_path('bdImages'),0777,true);
        }

        $image = $request->image;
        $name = $image->getClientOriginalName();
        $imageName = time()."_".$name;
        $destination = public_path('bdImages');
        $image->move($destination, $imageName);

        $data['placeName'] = $request->place_name_bd;
        $data['Image']='bdImages/'.$imageName;
        $data['Expense'] = $request->expense;

        BangladeshiPlaces::create($data);

        return redirect()->route('addPlacesBDForm');

    }


    public function bdPlacesList(){
        $bdPlacesList = BangladeshiPlaces::all();

        return view('placesList.bdPlacesList',['bdPlacesList'=>$bdPlacesList]);
    }


    // delete Countries
    public function deleteCountry($id){
        $countryId = Places::where(['id'=>$id]) -> first();
        if($countryId){
            $countryId -> delete();
            return redirect()->route('newPlacesList');
        }
    }

    public function deletePlacesBD($id){
        $bdPlaceId = BangladeshiPlaces::where(['id'=>$id]) -> first();
        if($bdPlaceId){
            $bdPlaceId -> delete();
            return redirect()->route('bdPlacesList');
        }
    }

    public function changeUserStatus($id){
        // $data = BookingList::find($id);
        // $data['status']='You are Listed';
        // $data->save();
        // return redirect()->back();

        $member = BookingList::find($id);
        $member['status']='Listed';
        $member->save();
        return redirect()->back();
    }

}
