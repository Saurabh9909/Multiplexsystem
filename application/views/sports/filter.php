<div class="row justify-content-center">
<?php 
    $i=1;
    foreach($filter as $mrow)
    {
    ?>
    <div class="col-sm-6 col-lg-4" id="filter">
        <div class="sports-grid" >
            <div class="movie-thumb c-thumb">
                <a href="<?php echo site_url()?>/matchdetailscontroller/display/<?php echo $mrow->match_id?>">
                    <img src="<?php echo base_url()?>demoproject/images/<?php echo $mrow->match_img?>" alt="sports">
                </a>
                <div class="event-date">
                    <h6 ><?php echo "match ".$i ; $i++;?></h6>
                    <span><?php echo $mrow->match_date?></span>
                </div>
            </div>
            <div class="movie-content bg-one">
                <h5 class="title m-0">
                    <a style="color:#fff" href="<?php echo site_url()?>/matchdetailscontroller/display/<?php echo $mrow->match_id?>"><?php echo $mrow->match_title ?></a>
                </h5>
                <div class="movie-rating-percent">
                    <span>
                        <?php 
                        $this->db->where('stadium_id',$mrow->stadium_id);
                         $stadium=$this->db->get('sportsstadium')->row();
                         echo $stadium->stadium_name;
                        ?>                       
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php
 } 
 ?>

</div>