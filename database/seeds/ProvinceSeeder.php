<?php

use Illuminate\Database\Seeder;
use App\City;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Hồ Chí Minh',
            'Hà Nội',
            'Hải Phòng',
            'Đà Nẵng',
            'Cần Thơ',
            'Phú Yên',
            'Yên Bái',
            'Vĩnh Phúc',
            'Vĩnh Long',
            'Tuyên Quang',
            'Trà Vinh',
            'Tiền Giang',
            'Thừa Thiên Huế',
            'Thanh Hóa',
            'Thái Nguyên',
            'Thái Bình',
            'Tây Ninh',
            'Sơn La',
            'Sóc Trăng',
            'Quảng Trị',
            'Quảng Ninh',
            'Quảng Ngãi',
            'Quảng Nam',
            'Quảng Bình',
            'Phú Thọ',
            'Ninh Thuận',
            'Ninh Bình',
            'Nghệ An',
            'Nam Định',
            'Long An',
            'Lào Cai',
            'Lạng Sơn',
            'Lâm Đồng',
            'Lai Châu',
            'Kon Tum',
            'Kiên Giang',
            'Khánh Hòa',
            'Hưng Yên',
            'Hòa Bình',
            'Hậu Giang',
            'Hải Dương',
            'Hà Tĩnh',
            'Hà Nam',
            'Hà Giang',
            'Gia Lai',
            'Đồng Tháp',
            'Đồng Nai',
            'Điện Biên',
            'Đắk Nông',
            'Đắk Lắk',
            'Cao Bằng',
            'Cà Mau',
            'Bình Thuận',
            'Bình Phước',
            'Bình Dương',
            'Bình Định',
            'Bến Tre',
            'Bắc Ninh',
            'Bạc Liêu',
            'Bắc Kạn',
            'Bắc Giang',
            'Bà Rịa - Vũng Tàu',
            'An Giang',
        ];

        foreach ($cities as $value) {
            City::create([
                'name' => $value
            ]);
        }
    }
}
