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
<!--                                                        <div class="listdeal_hover_B">
                                                                <span class="text_alert"></span>
                                                                <a href="detailt.php?id=<?php //echo $arrData[$i]->geId();?>" class="btn_view">XEM NGAY</a>
                                                        </div>-->
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