<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bhyt;

class BhytController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Bhyt::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bhyt = Bhyt::firstOrCreate([
            'maSoBhxh' => $id
        ]);
        return $bhyt;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $bhyt = Bhyt::firstOrNew([
            'maSoBhxh' => $id
        ]);

        // $bhyt->name = $request->name;

        $bhyt->tuNgayDt = $request->tuNgayDt;
        $bhyt->denNgayDt = $request->denNgayDt;
        $bhyt->ngaySinhDt = $request->ngaySinhDt;
        $bhyt->maKCB = $request->maKCB;
        $bhyt->coTheUuTienCaoHon = $request->coTheUuTienCaoHon;
        $bhyt->gioiTinh = $request->gioiTinh;
        $bhyt->soTheBhyt = $request->soTheBhyt;
        $bhyt->soCmnd = $request->soCmnd;
        $bhyt->ngay5Nam = $request->ngay5Nam;
        $bhyt->soDienThoai = $request->soDienThoai;
        $bhyt->hoTen = $request->hoTen;

        $bhyt->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
