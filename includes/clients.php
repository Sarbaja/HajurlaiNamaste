<?php
    include('./config/init.php');
    $sql ="SELECT * FROM clients";
    $result = $connection->query($sql);
    $numRows= $result->num_rows;
?>


<div id="client" class="section wb">
    <div class="container">
        <h2 style="font-weight:bold;font-size:35px;">DEALER'S LOGO</h2>
    </div>

    <?php if($numRows > 0)  { ?>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <?php for($i=1; $i<=$numRows;$i++) { 
                    
                    $row = $result->fetch_assoc();

                    if($i==1) {
                ?>
                    <div class="item active">
                        <h4><img src="backend/<?php echo $row['logo']; ?>" style="background-color:black;"></h4>
                    </div>

                <?php }  else { ?>

                    <div class="item">
                        <h4><img src="backend/<?php echo $row['logo']; ?>" style="background-color:black;"></h4>
                    </div>
                <?php } ?>
                   
                <?php } ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
    <?php } 
    else{
        echo "<h1 class='text-center'>No Clients Found</h1>";
    } ?>

</div>