<h2>THÔNG TIN LIÊN HỆ</h2>
<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>

	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>
 			<p><?php echo $dong['thongtinlienhe'] ?></p>
	  	
	  <?php 
		}
   ?>

<div><img src="images/lienhe.webp"></div><hr>
<div>
		<p><strong> Địa chỉ: </strong> 144 Xuân Thủy, Dịch Vọng Hậu, Cầu Giấy, Hà Nội</p>
		<p><strong>Email: </strong>tuetn2002pt@gmail.com</p>
		<p><strong>Tổng đài: </strong>0359.371.609</p>

</div><hr>
<div class="duongdi">
       <h3>HƯỚNG DẪN ĐƯỜNG ĐI</h3>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9698697218894!2d105.78284949884535!3d21.03750782325152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454caaf9fa467%3A0xe0207e2709fbbcd0!2sG2%20auditorium%2C%20University%20of%20Engineering%20and%20Technology%20-%20Vietnam%20National%20University!5e0!3m2!1sen!2s!4v1649424055898!5m2!1sen!2s" 
      width="1290" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	 </div>


