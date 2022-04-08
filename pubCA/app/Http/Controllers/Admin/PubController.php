<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pub;
use Illuminate\Http\Request;



class PubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }




    public function index()
    {
        $pubs = Pub::all();
        return view('admin.pubs.index', [
            'pubs' => $pubs
        ]);
    }

    public function create()
    {
        return view('admin.pubs.create');
    }

    public function store(Request $request)
    {
        // when user clicks submit on the create view above
        // the pub will be stored in the DB
        $request->validate([
            'name' => 'required',
            'street' =>'required|max:500',
            'manager_name' => 'required',
            'phone_number' => 'required|max:12'
        ]);


        //Makes a pub Object
        $pub = new Pub();
        $pub->name = $request->input('name');
        $pub->street = $request->input('street');
        $pub->manager_name = $request->input('manager_name');
        $pub->phone_number = $request->input('phone_number');


        //Puts them in the pub variable
        //pub is now an object
        //Saves it to the database
        $pub->save();

        //Then goes back to index if everything is correct
        return redirect()->route('admin.pubs.index');
    }


    public function show($id)
    {
        $pubs = Pub::findOrFail($id);

        return view('admin.pubs.show', [
            'pubs' => $pubs
        ]);
    }



    public function edit($id)
    {
        // get the pub by ID from the Database. passes through the function

        //Find or Fail check is it exists

        $pub = Pub::findOrFail($id);

        // Load the edit view and pass the pub to
        // that view
        return view('admin.pubs.edit', [
            'pub' => $pub
        ]);
    }



    public function update(Request $request, $id)
    {

        // first get the existing pub that the user is update
        //Id is passed through to make sure we update the right pub

        $pub = Pub::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'street' =>'required',
            'manager_name' => 'required',
            'phone_number' => 'required'
        ]);



        // if validation passes then update existing pub
        $pub->name = $request->input('name');
        $pub->street = $request->input('street');
        $pub->manager_name = $request->input('manager_name');
        $pub->phone_number = $request->input('phone_number');
        $pub->save();


        return redirect()->route('admin.pubs.index');
    }




    public function destroy($id)
    {
        $pub = Pub::findOrFail($id);
        $pub->delete();

        return redirect()->route('admin.pubs.index');
    }
}
