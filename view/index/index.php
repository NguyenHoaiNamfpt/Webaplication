<div id="slide">
				<div id="main-slide">
					<div class="clear"></div>
					<form>
						<div id="slide">
							<input type="radio" id="image1" name="slide" class="input" checked="">
							<label for="image1" class="label" id="button1"></label><!--button 1-->
							<input type="radio" id="image2" name="slide" class="input">
							<label for="image2" class="label" id="button2"></label><!--button 2-->
							<input type="radio" id="image3" name="slide" class="input">
							<label for="image3" class="label" id="button3"></label><!--button 3-->
							<input type="radio" id="image4" name="slide" class="input">
							<label for="image4" class="label" id="button4"></label><!--button 4-->
							<div id="slide_wrap">
								<img src="img/slide1.jpg" width="960" height="400">
								<img src="img/slide2.jpg" width="960" height="400">
								<img src="img/slide3.jpg" width="960" height="400">
								<img src="img/slide4.jpg" width="960" height="400">
							</div>
							<!--slide--->
							<h1 id="text1">Black-red model living room</h1>
							<!--text cho ảnh 1-->
							<h1 id="text2">Amsterdam Apartment dining space interior design</h1>
							<!--text cho ảnh 2-->
							<h1 id="text3">Green room interior wide</h1>
							<!--text cho ảnh 3-->
							<h1 id="text4">Wide open tv room design</h1>
							<!--text cho ảnh 4-->
						</div>
					</form>
				</div>
				<!--main-slide-->
			</div>
			<div id="list-news">
				<div class="listdeal_four">
					<ul class="listdeal_four">
                                            <?php
                                                
                                                
                                                for($i=0; $i<count($arrData);$i++){
                                                //echo  $row['id'];
                                                //}
                                            ?>
                                           <li>
                                                <!-- Product -->
                                                <div class="img">
                                                        <a href="detailt.php?id=<?php echo $arrData[$i]->getId();?>">
                                                        <img width="235" height="235" class="deal" alt="<?php echo $arrData[$i]->getTenSanPham();?>" src="<?php echo "./images/". $arrData[$i]->getHinhAnh();?>">
                                                        </a>
                                                        <div class="listdeal_hover_B">
                                                                <span class="text_alert"></span>
                                                                <a href="detailt.php?id=<?php echo $arrData[$i]->geId();?>" class="btn_view">XEM NGAY</a>
                                                        </div>
                                                </div>
                                                <div class="listdeal_info">
                                                        <a href="detailt.php?id=<?php echo $arrData[$i]->getId();?>" class="list_name"><?php echo $arrData[$i]->getTenSanPham();?></a>
                                                        <div class="listdeal_group">
                                                                <p class="listdeal_info_L num_down">53<span class="percent">%</span></p>
                                                                <p class="listdeal_info_Ce">
                                                                        <span class="trueprice">000.000d</span><br>
                                                                        <span class="price"><?php echo $arrData[$i]->getGia();?></span>
                                                                </p>
                                                        </div>
                                                </div>
                                                <!-- End Product--> 
                                            </li>
                                            <?php
                                                }
                                            ?>
					</ul>
				</div>
			</div>