<?php

namespace App\Exports;

use App\Models\Mineur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MineurExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mineur::select(
            'numOrd',
            'dateInscription',
            'numEnvoi',
            'dateEnvoi',
            'surce',
            'objeDomande',
            'dateRecherch',
            'destination',
            'dateprocedur',
            'objeProcedur',
            'note',
                            )->get();
    }
    public function headings(): array
    {
        return[
            [
                'المراسلات الواردة',
                'المرسلات الصادرة',
            ],

            [
                "الرقم الترتيبي",
                "تاريخ التسجيل",
                "رقم الارسال",
                "تاريخه",
                "مصدره",
                "موضوع الطلب",
                "تاريخ البحث",
                "الجهة الموجهة اليها",
                "تاريخ الاجراء ",
                "مضمون الاجراء",
                "ملاحظات",

            ]
        ];
    }
}
