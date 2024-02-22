<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Aspirasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class AspirasiController extends Controller
{
    public function index(): View
    {
        $aspirasis = Aspirasi::all(); //->sortByDesc('id') (optional)
        
        return view('index')->with('aspirasis', $aspirasis);
    }
    
    public function foto(): View
    {
        $aspirasis = Aspirasi::all()->sortByDesc('id'); //->sortByDesc('id') (optional)
        
        return view('fotosekolah')->with('aspirasis', $aspirasis);
    }
    

    public function admin(): View
    {
        $aspirasis = Aspirasi::all()->sortByDesc('id'); //->sortByDesc('id') (optional)
        
        return view('admin')->with('aspirasis', $aspirasis);
    }

    public function add(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png',
            'keterangan'     => 'required|min:5',
            'nissekolah' => 'required',
    
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Aspirasi::create([
            'foto'     => $image->hashName(),
            'nama'     => $request->nama,
            'nissekolah' => $request->nissekolah ?? 'default_value', // Assign default if null
            'lokasi' => $request->lokasi,
            'keterangan'   => $request->keterangan,
            'jenis' => $request->content
        ]);
        
        // $aspirasi->status = false;
        // $aspirasi->save();

        return redirect('/');
    }

    public function status(Request $request, $id): RedirectResponse
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->status = !$aspirasi->status;
        $aspirasi->save();
        
        return redirect('/admin-tampilan');
    }

    public function delete(Request $request, $id): RedirectResponse
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();

        return redirect('/admin-tampilan');
    }

    public function admin_tampilan(): view
    {
        $aspirasis = Aspirasi::all(); //->sortByDesc('id') (optional)
        return view('admin-tampilan')->with('aspirasis', $aspirasis);
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $aspirasis = Aspirasi::whereDate('created_at',$request->search)->get();
        }
        else{
            $aspirasis = Aspirasi::all();
        }

        return view('index')->with('aspirasis', $aspirasis);
    }
}


