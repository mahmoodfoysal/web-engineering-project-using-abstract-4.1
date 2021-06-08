<!DOCTYPE html>
<html>
<head>
	<?php 
	include("head.php");
	?>
</head>
<body>
	<?php 
	include("header.php");
	?>

	<!--For View Rental Post --> 
	<?php

	abstract class ViewUser extends User
	{
		public function showAllUser(){
			?>
			<div class="container">
			    <div class="row">
			    	<?php
					$datas = $this->getAllUser();
					foreach ($datas as $data) {
						?>				
						<!--Product -->
	                    <div class="col-md-4 product-grid">
	                        <div class="image">
	                            <a href="details.html">
	                                <?php 
	                                echo "<img src ='".$data['image']."' height = '300' width = '350'</a>";
	                                ?>
	                                <div class="overlay">
	                                    <div class="details">View Details</div>
	                                </div>
	                            </a>
	                        </div>

	                        <h2>
	                        	<?php
	                        	echo $data['ad_title']
	                        	?>
	                        </h2>

	                        <h6>
	                            <?php
	                            echo $data['property_type']
	                            ?>
	                        </h6>

	                        <h5>
	                            <?php
	                            echo $data['area']
	                            ?>,
	                            <?php
	                            echo $data['district']
	                            ?>
	                        </h5>

	                        <h5 style="color: #bdc3c7">
	                            <?php
	                            echo $data['date']
	                            ?>  
	                        </h5>

	                        <h5 class="price">
	                            <?php
	                            echo $data['amount']
	                            ?>
	                        </h5>

	                        <h5> 
	                        	<a href="details.html"> Contact with Property Holder</a>
	                        </h5>
	                        <a href="details.html" class="btn rent">Details</a>
	                    </div>
	                    <!--End of Product -->

			        	<?php
					}
				}
			}
			?>
		</div>
	</div>
	<!--End Of View Rental Post -->

	<!--Staring of Footer View -->
	<div>
		<?php 
		//include("footer.php");
		?>
	</div>
	<!--End of Footer View -->
</body>
</html>