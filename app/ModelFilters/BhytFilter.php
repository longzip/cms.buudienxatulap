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
            return $q->where('completed', (int)$completed)
            ->where('denNgayDt','<=', $homnay->addMonthsNoOverflow(1) );
        });
    }

    // public function appointments($denNgayDt)
    // {
    //     // $stardate = new Carbon($denNgayDt[0]);
    //     // $enddate = new Carbon($denNgayDt[1]);
    //     // $denNgayDt[0] = $stardate->startOfDay()->toDateTimeString();
    //     // $denNgayDt[1] = $enddate->endOfDay()->toDateTimeString();

    //     $homnay = new Carbon()-addMonthsNoOverflow;

    //     return $this->where(function($q) use ($denNgayDt)
    //     {
    //         // return $q->whereBetween('denNgayDt', $denNgayDt);
    //         return $q->where('denNgayDt','<=', $homnay->addMonthsNoOverflow(1) );
    //     });
    // }

    public function name($name)
    {
        return $this->where(function($q) use ($name)
        {
            return $q->where('soTheBhyt', 'LIKE', "%$name%")
                ->orWhere('soDienThoai', 'LIKE', "%$name%")
                ->orWhere('hoTen', 'LIKE', "%$name%");
        });
    }

    // public function name($name)
    // {
    //     return $this->where(function($q) use ($name) {
    //         return $q->whereIn('kid_id', function ($query) use ($name) {
    //             $query->select('id')->from('kids')->where('DIA_CHI', 'LIKE', "%$name%");
    //         });
    //     });
    // }
}
