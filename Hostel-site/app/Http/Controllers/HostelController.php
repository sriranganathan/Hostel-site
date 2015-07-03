<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hostels as Hostels;
class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   $hostels = Hostels::lists('name');
        return view('overview',compact('hostels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function hostelhome($hostel_name)
    {
        $hostel = Hostels::where('name', '=', $hostel_name)->first();
        return view('Hostels.home', ['details' => $hostel]);
    }
    
    public function hosteledit($hostel_name)
    {
        $hostel = Hostels::where('name', '=', $hostel_name)->first();
        return view('Hostels.edit', ['details' => $hostel]);
    }
    
    public function hostelupdate(Request $request,$hostel_name)
    {   
        $hostel_desc=$request->get('description');
        $hostel_tags=$request->get('tags');
    
         $save = Hostels::where('name','=',$hostel_name)->update(array(
            'description'   => $hostel_desc,
            'tags'  => $hostel_tags
            ));

        if($save)
            return 'Profile updated successfully';
        else
            return 'Profile could not be updated';

    }


    public function Zircon_A()
    {
        return view('Hostels.Zircon-A.home');
    }

    public function Zircon_A_council()
    {
        return view('Hostels.Zircon-A.council');
    }

    public function Zircon_A_gallery()
    {
        return view('Hostels.Zircon-A.gallery');
    }

    

    public function Zircon_B()
    {
        return view('Hostels.Zircon-B.home');
    }

    public function Zircon_B_council()
    {
        return view('Hostels.Zircon-B.council');
    }

    public function Zircon_B_gallery()
    {
        return view('Hostels.Zircon-B.gallery');
    }



   
    public function Zircon_C()
    {
        return view('Hostels.Zircon-C.home');
    }

    public function Zircon_C_council()
    {
        return view('Hostels.Zircon-C.council');
    }

    public function Zircon_C_gallery()
    {
        return view('Hostels.Zircon-C.gallery');
    }


}