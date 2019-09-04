<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pedscore/crqmaster', function () {

    $crq[] = [ 'crq_id' => 1, 'crq_desc' => 'CRQ1'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ2'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ3'];
    $crq[] = [ 'crq_id' => 4, 'crq_desc' => 'CRQ4'];
    $crq[] = [ 'crq_id' => 5, 'crq_desc' => 'CRQ5'];
    $crq[] = [ 'crq_id' => 6, 'crq_desc' => 'CRQ6'];
    $crq[] = [ 'crq_id' => 7, 'crq_desc' => 'CRQ7'];
    $crq[] = [ 'crq_id' => 8, 'crq_desc' => 'CRQ8'];
    $crq[] = [ 'crq_id' => 9, 'crq_desc' => 'CRQ9'];
    $crq[] = [ 'crq_id' => 10, 'crq_desc' => 'CRQ10'];
    $crq[] = [ 'crq_id' => 11, 'crq_desc' => 'CRQ11'];
    $crq[] = [ 'crq_id' => 12, 'crq_desc' => 'CRQ12'];
    $crq[] = [ 'crq_id' => 13, 'crq_desc' => 'CRQ13'];
    $crq[] = [ 'crq_id' => 14, 'crq_desc' => 'CRQ14'];
    $crq[] = [ 'crq_id' => 15, 'crq_desc' => 'CRQ15'];
    $crq[] = [ 'crq_id' => 16, 'crq_desc' => 'CRQ16'];

    $ayears[] = ['id'=> 1, 'name' => 'ปี 1'];
    $ayears[] = ['id'=> 2, 'name' => 'ปี 2'];
    $ayears[] = ['id'=> 3, 'name' => 'ปี 3'];
    return view('pedscore.crqmaster')->with(['crqs'=>$crq, 'ayears'=>$ayears]);
});



Route::post('/pedscore/crqmaster', function(Illuminate\Http\Request $request){
    //return $request->all();
    $validation = $request->validate([
        'crq_desc'=> 'required|max:255',
        'ayear'=> 'required'
    ]);

    App\Crqmastertb::create($request->all()); //function create เพื่อรับค่าเข้าตาราง แต่เราต้องไปบันทึก fillable ที่ file task.php
    return redirect()->back()->with('success','Created Successfully !!');
});

Route::get('/pedscore/index', function(){

    $crq[] = [ 'crq_id' => 1, 'crq_desc' => 'CRQ1'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ2'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ3'];
    $crq[] = [ 'crq_id' => 4, 'crq_desc' => 'CRQ4'];
    $crq[] = [ 'crq_id' => 5, 'crq_desc' => 'CRQ5'];
    $crq[] = [ 'crq_id' => 6, 'crq_desc' => 'CRQ6'];
    $crq[] = [ 'crq_id' => 7, 'crq_desc' => 'CRQ7'];
    $crq[] = [ 'crq_id' => 8, 'crq_desc' => 'CRQ8'];
    $crq[] = [ 'crq_id' => 9, 'crq_desc' => 'CRQ9'];
    $crq[] = [ 'crq_id' => 10, 'crq_desc' => 'CRQ10'];
    $crq[] = [ 'crq_id' => 11, 'crq_desc' => 'CRQ11'];
    $crq[] = [ 'crq_id' => 12, 'crq_desc' => 'CRQ12'];
    $crq[] = [ 'crq_id' => 13, 'crq_desc' => 'CRQ13'];
    $crq[] = [ 'crq_id' => 14, 'crq_desc' => 'CRQ14'];
    $crq[] = [ 'crq_id' => 15, 'crq_desc' => 'CRQ15'];
    $crq[] = [ 'crq_id' => 16, 'crq_desc' => 'CRQ16'];

    $ayears[] = ['id'=> 1, 'name' => 'ปี 1'];
    $ayears[] = ['id'=> 2, 'name' => 'ปี 2'];
    $ayears[] = ['id'=> 3, 'name' => 'ปี 3'];
   
    return view('pedscore/crqindex')->with(['ayears'=>$ayears,'crqs' =>\App\Crqmastertb::all()]);

});

Route::get('/pedscore/{id}', function($id){

    $crq[] = [ 'crq_id' => 1, 'crq_desc' => 'CRQ1'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ2'];
    $crq[] = [ 'crq_id' => 2, 'crq_desc' => 'CRQ3'];
    $crq[] = [ 'crq_id' => 4, 'crq_desc' => 'CRQ4'];
    $crq[] = [ 'crq_id' => 5, 'crq_desc' => 'CRQ5'];
    $crq[] = [ 'crq_id' => 6, 'crq_desc' => 'CRQ6'];
    $crq[] = [ 'crq_id' => 7, 'crq_desc' => 'CRQ7'];
    $crq[] = [ 'crq_id' => 8, 'crq_desc' => 'CRQ8'];
    $crq[] = [ 'crq_id' => 9, 'crq_desc' => 'CRQ9'];
    $crq[] = [ 'crq_id' => 10, 'crq_desc' => 'CRQ10'];
    $crq[] = [ 'crq_id' => 11, 'crq_desc' => 'CRQ11'];
    $crq[] = [ 'crq_id' => 12, 'crq_desc' => 'CRQ12'];
    $crq[] = [ 'crq_id' => 13, 'crq_desc' => 'CRQ13'];
    $crq[] = [ 'crq_id' => 14, 'crq_desc' => 'CRQ14'];
    $crq[] = [ 'crq_id' => 15, 'crq_desc' => 'CRQ15'];
    $crq[] = [ 'crq_id' => 16, 'crq_desc' => 'CRQ16'];

    $ayears[] = ['id'=> 1, 'name' => 'ปี 1'];
    $ayears[] = ['id'=> 2, 'name' => 'ปี 2'];
    $ayears[] = ['id'=> 3, 'name' => 'ปี 3'];


    $crq = App\Crqmastertb::find($id);

    $crqs = App\Crqmastertb::all();

    return view('pedscore.crqindex')
            ->with([
                'crq'=>$crq,
                'ayears'=>$ayears,
                'crqs'=>$crqs,
                ]);
});

Route::put('/pedscore/{id}',function(Illuminate\Http\Request $request,$id ){

    $validation = $request->validate([
        'crq_desc'=> 'required|max:255',
        'ayear'=> 'required'
    ]);

    App\Crqmastertb::find($id)->update($request->all());
    return redirect()->back()->with('success','Edited Successfully !!');
});