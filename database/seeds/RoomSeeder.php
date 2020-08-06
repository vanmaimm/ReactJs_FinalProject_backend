<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            if($i<5){
                DB::table("rooms")->insert([
                       "room_number"=>"A10".$i,
                       "image"=>"public/exam.jfif",
                       "typeroom" =>1,
                       "area"=>"40m2",
                       "price_per_day"=>450000,
                       "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
                       "max_person"=>2
                    ]);
            }else if($i<10){
                DB::table("rooms")->insert([
                    "room_number"=>"A20".$i,
                    "image"=>"public/4.jpg",
                    "typeroom" =>2,
                    "area"=>"50m2",
                    "price_per_day"=>600000,
                    "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
                    "max_person"=>3
                 ]);
            }else if($i<15){
                DB::table("rooms")->insert([
                    "room_number"=>"A30".$i,
                    "image"=>"public/exam.jfif",
                    "typeroom" =>3,
                    "area"=>"60m2",
                    "price_per_day"=>750000,
                    "description"=>"Phòng nghỉ cực kỳ hiện đại và phong cách này của chúng tôi, mang đến không gian hoàn hảo, để Quý khách nghỉ ngơi thư giãn sau một ngày làm việc căng thẳng hoặc vui chơi hết mình. Thậm chí ngay cả với phòng nghỉ có kích thước khiêm tốn nhất, thì các tiện nghi hoàn hảo vẫn sẽ mang lại cho Quý khách cảm giác thoải mái, bình yên và ấm áp như đang ở trong chính ngôi nhà thân yêu của mình. Một số phòng có ban công với hướng nhìn tuyệt đẹp ra sông Hàn hoặc cầu Thuận Phước.",
                    "max_person"=>4
                 ]);
                }
    }
    }
}
