<?php
include 'connectdb.php';
include 'header.php';
include 'menu.php';

if(!isset($_SESSION["cart"])){
    header("LOCATION: index.php");
    exit();
}
$arrCart = $_SESSION["cart"];
// cap nhat gio hang
if(isset($_POST["btnUpdate"])!=NULL){
    $arrTmp = array();
    // cap nhat so luong/
    for($i=0; $i<count($arrCart);$i++){
        $_SESSION["cart"][$i]["soLuong"] = $_POST["soLuong".$i];
        if(isset($_POST["chk".$i])!=NULL){
            $_SESSION["cart"][$i]=NULL;
        }
    }
    $ind=0;
    for($i=0; $i<count($arrCart);$i++){
        if($_SESSION["cart"][$i]!=NULL){
            $arrTmp[$ind] = $_SESSION["cart"][$i];
            $ind++;
        }
    }
    
    
    $_SESSION["cart"]=NULL;
    $_SESSION["cart"] = $arrTmp;
    // load lai trang:
    header("LOCATION: giohang.php");
    exit();
}
// xoa gio hang
if(isset($_POST["btnDel"])!=NULL){
    unset($_SESSION["cart"]);
    header("LOCATION: index.php");
    exit();
}
// thanh toan
if(isset($_POST["btnPay"])!=NULL){
        // TODO SOMETHING HERE __
}
?>

	<section id="cart">
		<div id="heading">
			<h2 style="text-align: center;">GIỎ HÀNG CỦA BẠN </h2>
		</div>
		<div id="text">
			Giỏ hàng của bạn chưa có sản phẩm nào ! 
		</div>
            <form action="" method="post">
                <table id="table" cellspacing="" cellpadding="" border="1" style="width: 100%">
			<tbody>
                            <?php
                            $tongTien = 0;
                            for($i =0 ; $i< count($arrCart); $i++){
                            
                                // truy van tu csdl -? id trong gio hang
                                $id = $arrCart[$i]["idSp"];
                                $query = 'SELECT tensanpham, gia FROM sanpham WHERE id = '.$id;
                                $item = $db->query($query)->fetchAll();
                                $tongTien += $item[0]["gia"]*$arrCart[$i]["soLuong"];
                            ?>
				<tr>
                                        <td>
                                            <input type="checkbox" name="chk<?php echo $arrCart[$i]["index"];?>">
                                        </td>
					<td>
                                            <?php echo $i+1;?>
                                        </td>
					<td><?php echo $item[0]["tensanpham"];?></td>
                                      
					<td><?php echo number_format($item[0]["gia"], 3)."VNĐ";?></td>
                                        <td><?php echo $arrCart[$i]["mau"];?></td>
					<td>
						<input type="text" style="text-align: right" size="1" 
                                                       maxlength="3" value="<?php echo $arrCart[$i]["soLuong"];?>" 
                                                       name="soLuong<?php echo $i;?>">
					</td>
					<td>
                                            <?php echo number_format(($item[0]["gia"]*$arrCart[$i]["soLuong"]), 3)."VNĐ";?>
                                        </td>
                                        
				</tr>
                                <?php
                            }
                                ?>
				<tr>
					<td>
						<b>Tổng tiền: 
                                                
                                                <?php echo number_format($tongTien, 3)."VNĐ";?>
                                                </b>
					</td>
					<td align="right" colspan="5">
                                            <input class="fg-button teal" type="submit" value="Xóa giỏ hàng" name="btnDel">
                                            <input class="fg-button teal" type="submit" value="Update Cart" name="btnUpdate">
                                            <input class="fg-button teal" type="submit" value="Thanh toán" name="btnPay">
					</td>
				</tr>
			</tbody>
                </table>
            </form>
	</section>

<?php 
    include 'footer.php';
?>