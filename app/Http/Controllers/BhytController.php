<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bhyt;
use PDF;


class BhytController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //->orderBy('denNgayDt')
        //->orderByDesc('denNgayDt')
        return Bhyt::filter($request->all())->orderByDesc('denNgayDt')->take(500)->get();
    }

    public function xoaHoGd(Request $request){
        return Bhyt::filter($request->all())->delete();
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
        $bhyt = Bhyt::firstOrNew([
            'maSoBhxh' => $request->soSoBhxh
        ]);

        $bhyt->tuNgayDt = $request->tuNgayDt;
        $bhyt->denNgayDt = $request->denNgayDt;
        if(isset($request->ngaySinhDt))
        $bhyt->ngaySinhDt = $request->ngaySinhDt;
        $bhyt->maKCB = $request->tenBenhVien;
        $bhyt->coTheUuTienCaoHon = $request->coTheUuTienCaoHon;
        if(isset($request->gioiTinh))
        $bhyt->gioiTinh = $request->gioiTinh;
        $bhyt->soTheBhyt = $request->soTheBhyt;
        $bhyt->soCmnd = $request->soCmnd;
        $bhyt->mqhChuHo = $request->mqhChuHo;
        $bhyt->ngay5Nam = $request->ngay5Nam;
        if(isset($request->soDienThoai))
        $bhyt->soDienThoai = $request->soDienThoai;
        if(isset($request->hoTen))
        $bhyt->hoTen = $request->hoTen;
        if(isset($request->maHoGd))
        $bhyt->maHoGd = $request->maHoGd;
        $bhyt->save();
        
        return $bhyt;
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
        if(isset($request->ngaySinhDt))
        $bhyt->ngaySinhDt = $request->ngaySinhDt;
        $bhyt->maKCB = $request->tenBenhVien;
        $bhyt->coTheUuTienCaoHon = $request->coTheUuTienCaoHon;
        if(isset($request->gioiTinh))
        $bhyt->gioiTinh = $request->gioiTinh;
        $bhyt->soTheBhyt = $request->soTheBhyt;
        $bhyt->soCmnd = $request->soCmnd;
        $bhyt->mqhChuHo = $request->mqhChuHo;
        $bhyt->ngay5Nam = $request->ngay5Nam;
        if(isset($request->soDienThoai))
        $bhyt->soDienThoai = $request->soDienThoai;
        if(isset($request->hoTen))
        $bhyt->hoTen = $request->hoTen;
        if(isset($request->maHoGd))
        $bhyt->maHoGd = $request->maHoGd;
        $bhyt->save();
        
        return $bhyt;
    }

    public function setCompleted(Request $request, $id){
        $bhyt = Bhyt::firstOrNew([
            'maSoBhxh' => $id
        ]);

        $bhyt->completed = $request->completed;
        $bhyt->save();
        return $bhyt;
    }

    public function setTongTien(Request $request, $id){
        $bhyt = Bhyt::firstOrNew([
            'maSoBhxh' => $id
        ]);
        $bhyt->update($request->all());
        // $bhyt->tongTien = $request->tongTien;
        // $bhyt->ngayLap = $request->ngayLap;
        // $bhyt->disabled = $request->disabled;
        // $bhyt->completed = $request->completed;
        // $bhyt->save();
        return $bhyt;
    }

    public function setDisabled(Request $request, $id){
        $bhyt = Bhyt::firstOrNew([
            'maSoBhxh' => $id
        ]);

        $bhyt->disabled = $request->disabled;
        $bhyt->save();
        return $bhyt;
    }

    public function setAuth(Request $request, $id){
        $bhyt = Bhyt::find(1);

        $bhyt->ghiChu = $request->ghiChu;
        $bhyt->save();
        return $bhyt;
    }
    public function getAuth(){
        $bhyt = Bhyt::find(1);
        return $bhyt->ghiChu;
    }

    public function themDanhSach(Request $request){
        $bhyt = Bhyt::insert($request->ds);
        return $bhyt;
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

    public function getAllMaHoGd(){
        // return Bhyt::select('maHoGd')->distinct()->count();
        return Bhyt::select('maHoGd')->distinct()->get();
    }

    public function getAllMaSoBhxh(){
        // return Bhyt::select('maSoBhxh')->count();
        // return Bhyt::select('hoTen','ngaySinhDt','soDienThoai')->whereNotNull('soDienThoai')->get();
        return Bhyt::select('maSoBhxh')->get();
    }

    public function getAllContacts(){
        // return Bhyt::select('maSoBhxh')->count();
        return Bhyt::select('hoTen','ngaySinhDt','soDienThoai')->whereNotNull('soDienThoai')->get();
        return Bhyt::select('maSoBhxh')->get();
    }

    public function inMauNopTienBHYT(Request $request, $id){
        $pdf = PDF::loadView('noptienbhyt', [
            'tienBHYT' => $request->tienBHYT,
            'tienBHXH' => $request->tienBHXH,
            'tienDien' => $request->tienDien,
            'bangKe' => [
                't500' => $request->t500,
                't200' => $request->t200,
                't100' => $request->t100,
                't50' => $request->t50,
                't20' => $request->t20,
                't10' => $request->t10,
                't5' => $request->t5,
                't2' => $request->t2,
                't1' => $request->t1
                ]
            ]);
        return $pdf->stream('Tu-Lap-Nop-Tien-BHYT.pdf');
    }
    public function inPhuLucThanhVienHoGiaDinh(Request $request, $id){
        // return $request->maSoBhxhs;
        $bhyts = Bhyt::filter($request->all())->orderBy('maSoBhxh')->get();
        $pdf = PDF::loadView('phuLucThanhVienHoGiaDinh', [
            'bhyts' => $bhyts,
        ]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('To-Khai-BHYT.pdf');
    }
    public function xemMauNopTienBHYT(Request $request, $id){
        return view('noptienbhyt', ['tienBHYT' => 1367820, 'tienBHXH' => 297000]);
    }
}
