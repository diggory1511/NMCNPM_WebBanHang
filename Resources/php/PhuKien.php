<?php
<<<<<<< HEAD
    session_start();
    require_once './config.php';

    $sql = "SELECT * FROM `product` WHERE `Product category ID` = 2;";
    $all_product = $con->query($sql);
    include_once './components/headerphanloai.php';
=======
session_start();
require_once './config.php';

$sql = "SELECT * FROM `product`
    WHERE `Product category ID` = 2;";
$all_product = $con->query($sql);

include_once("./components/header.php");
>>>>>>> parent of a0113a0 (Điều chỉnh_Tiên Lê)
?>
<body>
    <div id="content">
        <div class="phanloai">
            <h2>PHÂN LOẠI</h2>
            <div class="loai">
                <p id="aonu"><a href="./AoNu.php">&nbsp;&nbsp;&nbsp;Áo nữ</a></p>
                <p id="aonam"><a href="./AoNam.php">&nbsp;&nbsp;&nbsp;Áo nam</a></p> 
                <p id="quanvaynu"><a href="./QuanVayNu.php">&nbsp;&nbsp;&nbsp;Quần váy nữ</a></p>
                <p id="quannam"><a href="./QuanNam.php">&nbsp;&nbsp;&nbsp;Quần nam</a></p> 
                <p id="phukien"><a href="./PhuKien.php">&nbsp;&nbsp;&nbsp;Phụ kiện</a></p>
            </div>
        </div>
        <div class="products-container"  id="phan">
            
            <?php
            while($row = mysqli_fetch_assoc($all_product)){
            ?>
            <div class="product">
                <table id="myTable">
                    <tr>
                    <td>
                        <div class="product--hoverEffect">
                            <img class="product-img" src="<?php echo $row["Image"]; ?>" alt="test">
                        </div>
                    </td>
                    <td>
                        <div class="product-description">
                            <span><?php echo $row["Name"]?></span> 
                            <h5><?php echo $row["Description"]?></h5>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                                <h4><?php echo $row["Price"]?> VND</h4>
                            </div>
                            <a href="#" onclick="addToCart(<?php echo $row['Id']; ?>, '<?php echo $row['Name']; ?>', '<?php echo $row['Image']; ?>', <?php echo $row['Price']; ?>, <?php echo '1' ?>)" class="product-cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                    </td>
                    </tr>
                </table>
            </div>
            <?php }?>

        </div>
    </div>
<<<<<<< HEAD
    <footer class="footer">
		<div class="container row">
			<div class="footer-col">
				<h4>Liên hệ với chúng tôi</h4>
				<ul>
					<li><a href="#">Số điện thoại +84-XXX-XXX-XXX</a></li>
					<li><a href="#">Địa chỉ TPHCM</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Theo dõi chúng tôi qua</h4>
				<div class="social-links">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</footer>
    <?php include_once("./components/cartToast.php")?>
</body>
<script src='../JS/index.js'></script>
<script src="../JS/tailwind.config.js"></script>
<script src="../JS/app.js"></script>
<script>
function addToCart(product_id, product_name, product_image_link, product_price) {
    var xhr = new XMLHttpRequest();
    var data = "product_id=" + product_id +
               "&product_name=" + product_name +
               "&product_image_link=" + product_image_link +
               "&product_price=" + product_price;
    xhr.open("POST", "./services/add_to_cart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };

    xhr.send(data);
}
</script>
</html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Sự kiện thay đổi giá trị trong dropdown
        $("#sortHi").click(function () {
            // Lấy giá trị đã chọn
            var selectedValue = "highlow";
            var loaisp = 2;
            // Gửi yêu cầu AJAX để lấy dữ liệu được sắp xếp
            $.ajax({
                url: "./sortphanloai.php", // Đường dẫn đến file xử lý sắp xếp
                method: "POST",
                data: { sortOption: selectedValue, loaisp: loaisp },
                success: function (data) {
                    // Cập nhật nội dung trang với kết quả sắp xếp
                    $("#content").html(data);
                }
            });
        });
        $("#sortLo").click(function () {
            // Lấy giá trị đã chọn
            var selectedValue = "lowhigh";
            var loaisp = 2;
            // Gửi yêu cầu AJAX để lấy dữ liệu được sắp xếp
            $.ajax({
                url: "./sortphanloai.php", // Đường dẫn đến file xử lý sắp xếp
                method: "POST",
                data: { sortOption: selectedValue, loaisp: loaisp },
                success: function (data) {
                    // Cập nhật nội dung trang với kết quả sắp xếp
                    $("#content").html(data);
                }
            });
        });
    });
</script>
=======
</div>

<?php
// include_once("./components/cartToast.php");
include_once("./components/footer.php");
?>
>>>>>>> parent of a0113a0 (Điều chỉnh_Tiên Lê)
