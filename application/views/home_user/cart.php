<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>site/file_css/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>site/file_css/slick/slick-theme.css">
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo public_url() ?>site/file_css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>site/file_css/css_home.css">
  <link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>site/file_css/css_buyed.css">
  <link rel="stylesheet" type="text/css" href="<?php echo public_url() ?>site/file_css/css_cart.css">

</head>
<body>

  <header>
  	<div class="container">
  	  <div class="content_head_1">
  		<div class="logo">
  			<img class="img_logo" src="<?php echo public_url()?>site/image/logo_logo_logo1.png ">
  			<p>
  				VAN THINH
  			</p>

  		</div>
  		<div class="content_seacher">
  			<div class="content_address">
  				<div class="icon_fa_market">
  						
  				</div>
  				<div class="address">
  					<div class="text_address_1">
  						554 Trường Chinh, Hà Nội
  					</div>
  					<div class="text_address_2">
  						024.35640860
  					</div>
  				</div>
  				<div class="icon_fa_market">
  						
  				</div>
  				<div class="address">
  					<div class="text_address_1">
  						554 Trường Chinh, Hà Nội
  					</div>
  					<div class="text_address_2">
  						024.35640860
  					</div>
  				</div>
  			</div>
  			<div class="seacher">
  				<input class="input_seacher" type="text" name="">
  				<button class="btn_seacher"></button>
  			</div>
  		</div>
  		<nav class="notify_icon">
  			<ul class="ul_notify">
  				<li class="li_notify">
  					<div class="notify_together notify_market"></div>
  					<a href="">Giỏ hàng</a>
  				</li>
  				<li class="li_notify">
  					<div class="notify_together notify_guide"></div>
  					<a href="">Hướng dẫn</a>
  				</li>
  				<li class="li_notify">
  					<div class="notify_together notify_support"></div>
  					<a href="">Hỗ trợ</a>
  				</li>
  			</ul>
  		</nav>
  	  </div>


  	  <nav class="category">
  	  	<ul class="ul_category">
  	  		<li class="li_category">
  	  		  <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_1"></i>
  	  			ĐIỆN THOẠI

              </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_2"></i>
  	  			TABLET
  	  			
              </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_3"></i>
  	  			LAPTOP
  	  			
              </a>
  	  		</li>
  	  		<li class="li_category">
  	  	      <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_4"></i>
  	  			ĐỒNG HỒ
  	  			
              </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_5"></i>
  	  			PHỤ KIỆN
  	  			
              </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category" href="">
  	  			<i class="icon_mobile_6"></i>
  	  			GIA DỤNG
  	  			
              </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category_7" href="">
  	  			ĐĂNG KÝ
  	  		  </a>
  	  		</li>
  	  		<li class="li_category">
  	  		  <a class="tag_a_category_8" href="">
  	  			ĐĂNG NHẬP
  	  		  </a>
  	  		</li>
  	  	</ul>
  	  </nav>


  	</div>
  </header>
<!-- main -->
  <main>

  <div class="container">
<!-- table -->
    <section>
     <table class="tb_cart">
       <thead class="head_cart">
         <tr>
           <th>
             STT
           </th>
           <th>
             Tên sản phẩm
           </th>
           <th>
             Giá sản phẩm
           </th>
           <th>
             Số lượng
           </th>
           <th>
             Tổng
           </th>
           <th>
             Xóa
           </th>
         </tr>
       </thead>
       <tbody class="body_cart">
         <tr>

           <td>
             1
           </td>

           <td class="name_product">
             <div class="img_product">
              <img class="img_cart" src="<?php echo public_url() ?>site/image/oppo-a9.jpg">
             </div>
             <div class="text_product">
               <div><b>oppo A9</b></div>
               <div style="color: red">Mã sản phẩm</div>
               <div>bảo hành:</div>
             </div>
           </td>

           <td class="">
              3.100.000 VND
           </td>

           <td>
             <input type="text" name="">
           </td>
           <td>
             3.100.000 VND
           </td>
           <td>
             <div class="icon_xoa">
               <img class="img_cart" src="<?php echo public_url() ?>site/image/icon_del.png">
             </div>
           </td>
         </tr>
       </tbody>
     </table>
       </section>
<!-- thong tin người mua  -->
   <div class="content_infor_buy">
    <section class="input_infor">
      <div class="title_infor">
        <span class="title_input">KHÁCH HÀNG KHAI BÁO THÔNG TIN</span>
      </div>
      <div class="body_infor">
        <div class="text_infor">
          Thông tin người mua (*) Thông tin bắt buộc
        </div>
        <div>
          Họ tên (*)
          <input type="text" name="">
        </div>
        <div>
          E-mail (*)
          <input type="text" name="">
        </div>
        <div>
          Điện thoại (*)
          <input type="text" name="">
        </div>
        <div>
          Địa chỉ (*)
          <input type="text" name="">
        </div>

      </div>
    </section>
    <section class="buy_right">
      
    </section>
   </div>
    </div>


  </main>

<!-- footer -->
  <footer>
	<div class="container">
	  <div class="content_footer">
		<nav class="nav_footer">
			<ul class="ul_footer">
				<li><a href="">Tìm hiểu về mua trả góp</a></li>
				<li><a href="">Chính sách bảo hành</a></li>
				<li><a href="">Chính sách đổi trả</a></li>
				<li><a href="">Giao hàng & Thanh toán</a></li>
			</ul>
		</nav>
		<nav class="nav_footer">
			<ul class="ul_footer">
				<li><a href="">Giới thiệu công ty (mwg.vn) </a></li>
				<li><a href="">Tuyển dụng</a></li>
				<li><a href="">Gửi góp ý, khiếu nại</a></li>
				<li><a href="">Tìm siêu thị (1908 shop) </a></li>
				<li><a href="">Xem bản mobile  </a></li>
			</ul>
		</nav>
		<nav class="nav_footer">
			<ul class="ul_footer ul_footer_phone">
				<li class="footer_phone">Gọi mua hàng <b>1800.1060</b>  (7:30 - 22:00)</li>
				<li class="footer_phone">Gọi khiếu nại  <b> 1800.1062 </b>(8:00 - 21:30)</li>
				<li class="footer_phone">Gọi bảo hành   <b> 1800.1064</b> (8:00 - 21:00)</li>
				<li class="footer_phone">Kỹ thuật      <b>     1800.1763</b> (7:30 - 22:00)</li>
			</ul>
		</nav>
		<nav class="nav_footer">
			<ul class="ul_footer">
				<li><a href="https://www.facebook.com/pham.van.90038"><img class="img_face_footer" src="<?php echo public_url()?>site/image/face.png ?>"></a></li>
			</ul>
		</nav>
	  </div>
	</div>
  </footer>
</body>
</html>