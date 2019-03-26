<?php

namespace App\Imports;

use App\Mentahgen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class MentahgenImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mentahgen([
            'year'=>$row['year'],
            'month'=>$row['month'],
            'mo_no'=>$row['mo_no'],
            'agent_name'=>$row['agent_name'],
            'sub_agent_name'=>$row['sub_agent_name'],
            'client_name'=>$row['client_name'],
            'product_name'=>$row['product_name'],
            'barcode'=>$row['barcode'],
            'version_name'=>$row['version_name'],
            'line_no'=>$row['line_no'],
            'po_no'=>$row['po_no'],
            'add_flag'=>$row['add_flag'],
            'banner'=>$row['banner'],
            'title_program'=>$row['title_program'],
            'duration_program'=>$row['duration_program'],
            'date_program'=>$row['date_program'],
            'start_time_program'=>$row['start_time_program'],
            'end_time_program'=>$row['end_time_program'],
            'air_date'=>$row['air_date'],
            'air_time'=>$row['air_time'],
            'actual_time'=>$row['actual_time'],
            'cb'=>$row['cb'],
            'update_date'=>$row['update_date'],
            'bookingdatetime'=>$row['bookingdatetime'],
            'spot_type'=>$row['spot_type'],
            'spot_type_desc'=>$row['spot_type_desc'],
            'flag_rate'=>$row['flag_rate'],
            'po_type'=>$row['po_type'],
            'po_type_desc'=>$row['po_type_desc'],
            'ket_inventory'=>$row['ket_inventory'],
            'tx_code'=>$row['tx_code'],
            'dur'=>$row['dur'],
            'seq'=>$row['seq'],
            'agency_rate'=>$row['agency_rate'],
            'net'=>$row['net'],
            'rate_code'=>$row['rate_code'],
            'slot_rate'=>$row['slot_rate'],
            'catslot'=>$row['catslot'],
            'notes'=>$row['notes'],
            'inv_no'=>$row['inv_no'],
            'special_position'=>$row['special_position'],
            'ntc'=>$row['ntc'],
            'tc'=>$row['tc'],
            'id_am'=>$row['id_am'],
            'id_sgm'=>$row['id_sgm'],
            'id_sm'=>$row['id_sm'],
            'id_adv'=>$row['id_adv'],
            'id_ap'=>$row['id_ap'],
            'id_agc'=>$row['id_agc'],
            'unit_order'=>$row['unit_order'],
            'client'=>$row['client'],
            'billcom'=>$row['billcom'],
            'termin'=>$row['termin'],
            'value'=>$row['value'],
            'seasonal'=>$row['seasonal'],
            'ordernya'=>$row['order'],
            'platform'=>$row['platform'],
            'unit'=>$row['unit'],
            'program_code'=>$row['program_code'],
            'spot'=>$row['spot'],
            'package'=>$row['package']
        ]);
    }

    public function chunkSize(): int
	{
		return 200;
	}
}
