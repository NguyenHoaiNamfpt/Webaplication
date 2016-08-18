			<div id="main-menu">
				<ul>
					<li><a href="index.php">Trang Chủ</a></li>
					<li><a href="">Giới Thiệu</a></li>
					<li>
						<a href="">Sản Phẩm</a>
						<ul id="sub-menu">
                                                    <?php
                               
                                                    for($i=0; $i< count($arrData); $i++){
                                                    ?>
                                                    
                                                           <li><a href="/sanpham.php?id=<?php echo $arrData[$i]->getId();?>"><?php echo $arrData[$i]->getTen();?></a></li>     
                                                    <?php
                                                    }
                                                    ?>
							
						</ul>
					</li>
					<li><a href="">Tin Tức</a></li>
					<li><a href="giohang.php">Giỏ Hàng</a></li>
					<li><a href="">Liên Hệ</a></li>
				</ul>
				<form action="" method="get">
					<input name="txtSearch" type="text" placeholder="Tìm Kiếm">
					<input name="btnSearch" type="submit" value="">
				</form>
			</div>
		</div>
		<div id="content">