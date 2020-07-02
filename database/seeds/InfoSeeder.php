<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert([
            'product_id' =>'2',
            'post' => 
            '<h2>Samsung S20 Plus - Flagship màn hình lớn, cấu hình cao</h2>
            <p>Galaxy S20 Plus được biết là phiên bản có cấu hình mạnh hơn của Samsung S20 và Samsung S20 Ultra. Samsung S20 Plus có kính thước màn hình lớn hơn và cấu hình khá tương đồng với người anh em Galaxy S20.</p>
            
            Thiết kế Samsung S20 Plus với màn hình đục lỗ, mặt lưng kính bóng bẩy
            Samsung Galaxy S20 Plus sở hữu thiết kế mặt trước tương tự các sản phẩm Samsung Galaxy S khác. Bạn vẫn có màn hình không viền với hai cạnh bên cong tràn. Tuy nhiên vị trí đặt camera trước đã chuyển ra trung tâm, điều này khá giống Galaxy Note 10. Phần lỗ camera này cũng được làm nhỏ hơn, kết hợp với phần viền siêu mỏng nên Samsung S20 Plus cho diện tích hiển thị gần như tuyệt đối. Giúp tăng không gian trải nghiệm cho người dùng.
          
            Mặt sau Galaxy S20 Plus gây ấn tượng bởi modul camera hình chữ nhật, khá giống với Samsung Galaxy A51 và Galaxy A71 từng được ra mắt trước đó. Samsung cũng đã loại bỏ nút Bixby trên thiết kế Galaxy S20 Plus cùng jack tai nghe 3.5mm. Nút nguồn, tăng giảm âm lượng được thiết kế bên phải thiết bị.
            Ngoài khả năng hiển thị tốt, S20 Plus còn sở hữu công nghệ vân tay âm màn hình mới nhất của Samsung. Công nghệ mở khóa sinh trắc học này với thời gian xử lý nhanh chóng cùng sự bảo mật cao.

            Samsung S20 Plus trang bị cụm 4 camera sau, camera chính 12MP 
            Tương tự người anh em Galaxy S20, Samsung S20 Plus sở hữu cụm 4 camera trên, đèn flash LED trên modul hình chữ nhật. Trong đó, cảm biến chính có độ phân giải lên tới 12MP cùng khả năng chụp góc rộng. Cùng với đó là ống kính siêu rộng 12MP, ống kính tele 64MP, cảm biến ToF 0.3MP. Các cảm biến được xắp xếp đối xứng.
            Camera trên Samsung Galaxy S20 Plus có khả năng hợp 9 pixel thành một giúp cải thiện ảnh chụp trong điều kiện thiếu sáng. Ngoài ra Galaxy S20 Plus,  cũng được trang bị những tính năng chụp thông minh khác như: lấy nét tự động bằng laser, chụp liên tục, kiểm soát ISO, nhận diện khuôn mặt,...
            Samsung Galaxy S20 Plus sở hữu camera trước với độ phân giải 10MP, nằm trong phần nốt ruồi. Cảm biến 10MP cho khả năng chụp selfie ấn tưởng cho ra những bức ảnh nịnh mắt, độ chi tiết cao. Ngoài khả năng chụp ảnh, Galaxy S20 Plus còn cho khả năng quay video 8K.

            Hiệu năng mạnh mẽ với chip Exynos 990 cùng 8GB RAM
            Samsung S20 Plus được trang bị chip Exynos 990. Con chip do Samsung sản xuất và tối ưu hóa riêng cho điện thoại Samsung. Nhờ vậy, Galaxy S20 Plus cho hiệu năng xử lý tốt, thời gian load ứng dụng nhanh. Cùng với đó là 8GB RAM mang lại khả năng đa nhiệm tốt. Không gặp hiện tượng load lại khi mở nhiều ứng dụng.
            Samsung S20 Plus được cài sẵn hệ điều hành Android 10 cùng giao diện One UI 2.1 mới nhất của Samsung. Cùng 128GB bộ nhớ trong, mang lại khả năng lưu trữ lớn.

            Dung lượng pin 4500 mAh, hỗ trợ sạc nhanh 25W
            Galaxy S20 Plus được trang bị viên pin Li-ion không thể tháo rời với dung lượng lớn 4500 mAh. Đây là điện thoại Galaxy S có dung lượng pin lớn nhất từ trước tới nay của Samsung. Với mức dụng lượng này cho thời gian sử dụng lớn. Bên cạnh đó, S20 Plus còn được trang bị công nghệ sạc nhanh 25W.
            Ngoài ra, tính năng sạc nhanh không dây, sạc ngược cũng không thể thiếu trên chiếc điện thoại cao cấp này.

            Mua ngay điện thoại Samsung Galaxy S20 Plus chính hãng - giá rẻ tại CellPhoneS
            Bên cạnh Samsung Galaxy S20 thì Samsung Galaxy S20 Plus là những smartphone được mong đợi nhất những ngày đầu năm 2020. Nếu bạn quan tâm sản phẩm này và có nhau cầu sở hữu cho mình một flagship đến từ Samsung hãy đến CellPhoneS. Hiện điện thoại Samsung Galaxy S20 Plus chính hãng được bán tại chuỗi bán lẻ điện thoại CellphoneS với mức giá ưu đãi cùng nhiều chính sách hấp dẫn như trả góp 0% cùng nhiều quà tặng, khuyến mãi khác.

            ',
            'updated_at' =>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
