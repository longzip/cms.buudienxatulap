<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Carbon\Carbon;
use App\Models\Bhyt;

class BhytFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    // public $relations = [];

    public function completed($completed)
    {
        return $this->where(function($q) use ($completed)
        {
            $homnay = new Carbon();
            return $q->where('completed', (int)$completed);
        });
    }

    public function disabled($disabled)
    {
        return $this->where(function($q) use ($disabled)
        {
            $homnay = new Carbon();
            return $q->where('disabled', (int)$disabled);
        });
    }

    //chỉ lọc những người cần gia hạn
    public function thang($thang)
    {
        return $this->where(function($q) use ($thang)
        {
            $homnay = new Carbon();
            return $q->where('denNgayDt','<=', $homnay->addMonthsNoOverflow(1) );
        });
    }

    public function name($name)
    {
        return $this->where(function($q) use ($name)
        {
            return $q->where('soTheBhyt', 'LIKE', "%$name%")
                ->orWhere('soDienThoai', 'LIKE', "%$name%")
                ->orWhere('hoTen', 'LIKE', "%$name%");
        });
    }

    public function maHoGd($maHoGd)
    {
        return $this->where(function($q) use ($maHoGd)
        {
            return $q->where('maHoGd', $maHoGd);
        });
    }

    public function chuaDongBo($cot){
        return $this->where(function($q) use ($cot)
        {
            return $q->whereNull($cot);
        });
    }
}
