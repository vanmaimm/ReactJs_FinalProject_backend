<?php

use Illuminate\Database\Seeder;

class TyperoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typerooms")->insert([
            'name'=>"Phòng Đơn",
            "image"=>"public/exam.jfif",
            "area"=>"40m2",
            "price_per_day"=>450000,
            "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
            "max_person"=>2
        ]);
        DB::table("typerooms")->insert([
            'name'=>"Phòng Đôi",
            "image"=>"public/4.jpg",
            "area"=>"50m2",
            "price_per_day"=>600000,
            "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
            "max_person"=>3
        ]);
        DB::table("typerooms")->insert([
            'name'=>"Phòng Gia Đình",
            "image"=>"public/exam.jfif",
            "area"=>"60m2",
            "price_per_day"=>750000,
            "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
            "max_person"=>4
        ]);
    }
}
