<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\uues;
class uutController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $objs =  uues::all();
    $data['objs'] = $objs;
    //dd($objs);
    return view('admin.list.uut',$data);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $data['method'] = "post";
    $data['url'] = url('admin/uues/');
    return view('admin.form.uues',$data);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $obj = new uues();
    $obj ->name = $request['name'];
    $obj ->ark = $request['ark'];
    $obj ->save();
    return redirect(url('admin/uues'));
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $obj = uues::find($id);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $obj = uues::find($id);
    $data['url'] = url('admin/uues/'.$id);
    $data['method'] = "put";
    $data['obj'] = $obj;
    return view('admin.form.uues',$data);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $obj = uues::find($id);
    $obj ->name = $request['name'];
    $obj ->ark = $request['ark'];
    $obj ->save();
    return redirect(url('admin/uues'));

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $obj = uues::find($id);
    $obj->delete();
    return redirect(url('admin/uues'));
  }
}
