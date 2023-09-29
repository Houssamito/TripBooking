<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeActivityRequest;
use App\Http\Requests\updateActivityRequest;
use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'Activity';
        $data['Activity']=Activity::select('id','titre', 'sous-titre', 'image', 'Categorie','prix')->get();
        return view('admin.Activity.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'Activity';
        $data['categories'] = Category::select('id','name')->get();
        return view('admin.Activity.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeActivityRequest $request)
    {

        try {
            $validate = $request->validated();
            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('public/assets/uploads/Category');
            } else {
                $image = null; // Affecter une valeur par défaut si aucune image n'est importée
            }
            
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2')->store('public/assets/uploads/Category');
            } else {
                $image2 = null; // Affecter une valeur par défaut si aucune image n'est importée
            }
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3')->store('public/assets/uploads/Category');
            } else {
                $image3 = null; // Affecter une valeur par défaut si aucune image n'est importée
            }
            
            

            $activity = new Activity();
            $activity->titre = $request->titre;
            $activity->{'sous-titre'} = $request->soustitre;
            $activity->description = $request->description;
            $activity->Categorie = $request->Catégorie;
            $activity->is_showing = $request->is_showing ? '1' : '0';
            $activity->image = $image;
            $activity->image2 = $image2;
            $activity->image3 = $image3;
            $activity->prix = $request->prix;
            $activity->Nombre_places = $request->places;
            $activity->Date = $request->date;
            $activity->Duree = $request->duration;
            $activity->ResponsableAct = $request->responsable;
            $activity->Activite1 = $request->act1;
            $activity->Activite2 = $request->act2;
            $activity->Activite3 = $request->act3;
            $inclus = $request->input('Inclus', []);
            $activity->inclus = json_encode($inclus);
            $activity->save();

            return redirect()->route('Activity.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $Activity)
    {
        $data['Activity'] = $Activity;
        $data['route'] = 'Activity';
        
        return view('admin.Activity.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $Activity)
    {
        $data['Activity'] = $Activity;
        $data['route'] = 'Activity';
        
        return view('admin.Activity.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateActivityRequest $request, Activity $Activity)
    {

        try {
            $validate = $request->validated();
            $inclus = $request->input('Inclus', []);
            $image = $Activity->image;
            if ($request->hasFile('image')) {
                Storage::delete($image);
                $image = $request->file('image')->store('public/assets/uploads/Category');
            }
            $image2 = $Activity->image2;
            if ($request->hasFile('image2')) {
                Storage::delete($image2);
                $image2 = $request->file('image2')->store('public/assets/uploads/Category');
            }
            $image3 = $Activity->image3;
            if ($request->hasFile('image3')) {
                Storage::delete($image3);
                $image3 = $request->file('image3')->store('public/assets/uploads/Category');
            }

            $Activity->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'is_showing' => $request->is_showing ? '1' : '0',
            'image' => $image,
            'image2' => $image2,
            'image3' => $image3,
            'sous-titre' => $request->{'soustitre'},
            'Categorie' => $request->Catégorie,
            'prix' => $request->prix,
            'Date' => $request->date,
            'Duree' => $request->duration,
            'Nombre_places' => $request->places,
            'Activite1' => $request->act1,
            'Activite2' => $request->act2,
            'Activite3' => $request->act3,
            'inclus' => json_encode($inclus),
            ]);
            

            return redirect()->route('Activity.index')->with('success',trans("messages_trans.success_update"));;
        } catch (\Exception $e) {
            return redirect()->withErrors('error', $e->getMessage());

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $Activity)
    {
        if ($Activity->image){
        Storage::delete($Activity->image);
        }
        $Activity->delete();
        return redirect()->route('Activity.index')->with('success',trans("messages_trans.success_delete"));
    }

   


    }
