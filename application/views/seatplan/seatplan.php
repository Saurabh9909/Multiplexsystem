 <!-- ==========Banner-Section========== -->
 <section class="details-banner hero-area bg_img" data-background="<?php echo base_url()?>demoproject/images/<?php echo $record->movie_poster?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title"><?php echo $record->movie_name?></h3>
                    <!-- <div class="tags">
                        <a href="#0"><?php echo $record->movie_language?></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
   
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <!-- <div class="item date-item">
                    <span class="date"><?php echo $this->session->userdata('date') ?></span>
                    <select class="select-bar">
                        <option selected><?php echo $this->session->userdata('time') ?></option>
                    </select>
                </div> -->
                <div class="item">
                    <h5 class="title">
                    <?php 

                            
                            $this->db->from('multiplex');
                            $this->db->join('area','area.area_id = multiplex.area_id');
                            $this->db->join('city','city.city_id = multiplex.city_id');
                            $this->db->join('state','state.state_id = multiplex.state_id');
                            
                            $this->db->where('multiplex_id',$this->session->userdata('multiplex_id'));
                            // echo $this->session->userdata('multiplex_id');
                            // die();
                            $query=$this->db->get()->row();
                            echo $query->multiplex_name;
                            ?>
                    </h5>
                    <p>
                    <?php 
                            echo $query->area_name." , ";
                            echo $query->city_name." , ";
                            echo $query->state_name;
					    ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">screen</h4>
                <div class="screen-thumb">
                    <img src="<?php echo base_url() ?>assets/images/movie/screen-thumb.png" alt="movie">
                </div>
          <h5 class="subtitle">silver plus (&#8377; <?php echo $record->movie_price ?>)</h5>
                 <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                    <?php

									//$oc=explode(',',$occupiedseat);
									?>
                                    <input type="hidden" value="// echo $this->session->userdata('occupiedseat') ?>" id="seatplanid" />
                                     <input type="hidden" value="//echo count($oc); ?>" id="seatplancnt" />
                                  
                                     
                                         <?php
                                            if($bookseat != null)
                                            {
                                            $dd=implode(',',$bookseat);
                                              $tt = explode(',',$dd);

                                            //  print_r($tt);
                                            //  die();

                                            foreach($tt as $rr)
                                            {
                                                $booked[$rr] = true;
                                            }
                                        }
                                            // echo "<pre>";
                                            // print_r($booked);
                                            // die();

										    for($g=1;$g<=4;$g++)
                                            {
                                                $bookedseat = isset($booked['g'.$g]);
                                            if($bookedseat)
        
                                            {
                                                ?>
                                                 
                                               
    <li class="single-seat"  id="bookedseatg<?php echo $g ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">g<?php echo $g?></span>
    </li>
                                                <?php
                                                }
                                                else
                                                {
        ?>
        
        <li class="single-seat seat-free" id="avseatg<?php echo $g ?>" onclick="bookticket('g<?php echo $g ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgg<?php echo $g ?>" alt="seat" >
        <span class="sit-num">g<?php echo $g ?></span>
        </li>
        
        <li class="single-seat" id="bookedseatg<?php echo $g ?>"   style="display: none"  >
        <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat" >
        <span class="sit-num" >g<?php echo $g ?></span>                                             
        </li>
        <li class="single-seat" id="selectedseatg<?php echo $g ?>" onclick="cancel('g<?php echo $g ?>','0')"    style="display: none"  >
        <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="bookedseat" >
        <span class="sit-num" >g<?php echo $g ?></span>                                             
        </li> 
        <?php
                                                }
                                           } 
                                         ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
                                        for($g=5;$g<=10;$g++)
                                        {
                                            $bookedseat = isset($booked['g'.$g]);
                                        if($bookedseat)
    
                                        {
                                            ?>
                                              
    <li class="single-seat"  id="bookedseatg<?php echo $g ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">g<?php echo $g?></span>
    </li>
                                            <?php
                                            }
                                            else
                                            {
    ?>
    <li class="single-seat seat-free" id="avseatg<?php echo $g ?>" onclick="bookticket('g<?php echo $g ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgg<?php echo $g ?>" alt="seat" >
        <span class="sit-num">g<?php echo $g ?></span>
        </li>
        
        <li class="single-seat" id="bookedseatg<?php echo $g ?>"   style="display: none"  >
        <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat" >
        <span class="sit-num" >g<?php echo $g ?></span>                                             
        </li>
        <li class="single-seat" id="selectedseatg<?php echo $g ?>"onclick="cancel('g<?php echo $g ?>','0')"    style="display: none"  >
        <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="bookedseat" >
        <span class="sit-num" >g<?php echo $g ?></span>                                             
        </li> 
    <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php 
                                        for($g=11;$g<=14;$g++)
                                        {
                                            $bookedseat = isset($booked['g'.$g]);
                                        if($bookedseat)
    
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseatg<?php echo $g ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">g<?php echo $g?></span>
    </li>
                                            <?php
                                            }
                                            else
                                            {
    ?>
    <li class="single-seat seat-free" id="avseatg<?php echo $g ?>" onclick="bookticket('g<?php echo $g ?>','100','0')">
    <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgg<?php echo $g ?>" alt="seat" >
    <span class="sit-num">g<?php echo $g ?></span>
    </li>
    
    <li class="single-seat" id="bookedseatg<?php echo $g ?>"   style="display: none"  >
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat" >
    <span class="sit-num" >g<?php echo $g ?></span>                                             
    </li>
    <li class="single-seat" id="selectedseatg<?php echo $g ?>"  onclick="bookticket('e<?php echo $g ?>','100','1')" style="display: none"  >
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="bookedseat" >
    <span class="sit-num" >g<?php echo $g ?></span>                                             
    </li> 
    <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <?php
                                        for ($f=1; $f <= 4 ; $f++) 
                                        {
                                            $bookedseat = isset($booked['f'.$f]);
                                        if($bookedseat)
    
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseatf<?php echo $f ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">f<?php echo $f?></span>
    </li>
                                            <?php
                                            }
                                            else
                                            {
    ?>
    <li class="single-seat seat-free" id="avseatf<?php echo $f?>" onclick="bookticket('f<?php echo $f ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgf<?php echo $f ?>" alt="seat">
         <span class="sit-num">f<?php echo $f ?></span>
    </li>
    
    
    <li class="single-seat" style="display:none;" id="bookedseatf<?php echo $f ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">f<?php echo $f?></span>

    <li class="single-seat" id="selectedseatf<?php echo $f ?>" onclick="bookticket('f<?php echo $f ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">f<?php echo $f?></span>
    </li> 
    <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
                                        for ($f=5; $f <= 10; $f++) 
                                        {
                                            $bookedseat = isset($booked['f'.$f]);
                                        if($bookedseat)
    
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseatf<?php echo $f ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">f<?php echo $f?></span>
    </li>
                                            <?php
                                            }
                                            else
                                            {
    ?>
  
<li class="single-seat seat-free" id="avseatf<?php echo $f ?>" onclick="bookticket('f<?php echo $f ?>','100','0')">
    <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgf<?php echo $f ?>" alt="seat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>

<li class="single-seat" id="bookedseatf<?php echo $f ?>" style="display: none;">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="seat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>

<li class="single-seat" id="selectedseatf<?php echo $f ?>" onclick="bookticket('f<?php echo $f ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>
    <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
                                        for($f=11;$f <= 14;$f++)
                                        {
                                            $bookedseat = isset($booked['f'.$f]);
                                        if($bookedseat)
    
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseatf<?php echo $f ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">f<?php echo $f?></span>
    </li>
                                            <?php
                                            }
                                            else
                                            {
    ?>
   
<li class="single-seat seat-free" id="avseatf<?php echo $f ?>" onclick="bookticket('f<?php echo $f ?>','100','0')">
    <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgf<?php echo $f ?>" alt="seat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>

<li class="single-seat" id="bookedseatf<?php echo $f ?>" style="display: none;">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="seat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>

<li class="single-seat" id="selectedseatf<?php echo $f ?>" onclick="bookticket('f<?php echo $f ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">f<?php echo $f ?></span>
</li>
    <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>E</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                    <?php
									for($e=1;$e<=4;$e++)
									{
                                        $bookedseat = isset($booked['e'.$e]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseate<?php echo $e ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">e<?php echo $e ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
 <li class="single-seat seat-free" id="avseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imge<?php echo $e ?>" alt="seat">
         <span class="sit-num">e<?php echo $e ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseate<?php echo $e ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li>
    
    <li class="single-seat" id="selectedseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li> 
<?php
                                        }
									}
									?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                      <?php
									  for($e=5;$e<=10;$e++)
									  {
                                        $bookedseat = isset($booked['e'.$e]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseate<?php echo $e ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">e<?php echo $e ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
 <li class="single-seat seat-free" id="avseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imge<?php echo $e ?>" alt="seat">
         <span class="sit-num">e<?php echo $e ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseate<?php echo $e ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li>
    
    <li class="single-seat" id="selectedseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
									  for($e=11;$e<=14;$e++)
									  {  
                                        $bookedseat = isset($booked['e'.$e]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseate<?php echo $e ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">e<?php echo $e ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
 <li class="single-seat seat-free" id="avseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imge<?php echo $e ?>" alt="seat">
         <span class="sit-num">e<?php echo $e ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseate<?php echo $e ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li>
    
    <li class="single-seat" id="selectedseate<?php echo $e ?>" onclick="bookticket('e<?php echo $e ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">e<?php echo $e ?></span>
	</li>  
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>E</span>
                        </li>
                        <li class="seat-line">
                            <span>D</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($d=1;$d<=4;$d++)
									  {   
                                        $bookedseat = isset($booked['d'.$d]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatd<?php echo $d ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">d<?php echo $d ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
   <li class="single-seat seat-free" id="avseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgd<?php echo $d ?>" alt="seat">
         <span class="sit-num">d<?php echo $d ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatd<?php echo $d ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($d=5;$d<=10;$d++)
									  {   
                                        $bookedseat = isset($booked['d'.$d]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatd<?php echo $d ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">d<?php echo $d ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
   <li class="single-seat seat-free" id="avseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgd<?php echo $d ?>" alt="seat">
         <span class="sit-num">d<?php echo $d ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatd<?php echo $d ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
									  for($d=11;$d<=14;$d++)
									  {     
                                        $bookedseat = isset($booked['d'.$d]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatd<?php echo $d ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">d<?php echo $d ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
   <li class="single-seat seat-free" id="avseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgd<?php echo $d ?>" alt="seat">
         <span class="sit-num">d<?php echo $d ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatd<?php echo $d ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatd<?php echo $d ?>" onclick="bookticket('d<?php echo $d ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">d<?php echo $d ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>D</span>
                        </li>
                    </ul>
					<ul class="seat-area">
                        <li class="seat-line">
                            <span>C</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <?php
									  for($c=1;$c<=4;$c++)
									  {     
                                        $bookedseat = isset($booked['c'.$c]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatc<?php echo $c ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">c<?php echo $c ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
<li class="single-seat seat-free" id="avseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgc<?php echo $c?>" alt="seat">
         <span class="sit-num">c<?php echo $c ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatc<?php echo $c ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li>  
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($c=5;$c<=10;$c++)
									  {     
                                        $bookedseat = isset($booked['c'.$c]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatc<?php echo $c ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">c<?php echo $c ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
<li class="single-seat seat-free" id="avseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgc<?php echo $c?>" alt="seat">
         <span class="sit-num">c<?php echo $c ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatc<?php echo $c ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li>  
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($c=11;$c<=14;$c++)
									  {
                                            
                                        $bookedseat = isset($booked['c'.$c]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseatc<?php echo $c ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">c<?php echo $c ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
<li class="single-seat seat-free" id="avseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgc<?php echo $c?>" alt="seat">
         <span class="sit-num">c<?php echo $c ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatc<?php echo $c ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatc<?php echo $c ?>" onclick="bookticket('c<?php echo $c ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">c<?php echo $c ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>C</span>
                        </li>
                        <li class="seat-line">
                            <span>B</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($b=1;$b<=4;$b++)
									  {
                                            
                                        $bookedseat = isset($booked['b'.$b]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseata=b<?php echo $b ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">b<?php echo $b ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
   <li class="single-seat seat-free" id="avseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgb<?php echo $b?>" id="imgb<?php echo $b ?>">
         <span class="sit-num">b<?php echo $b ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatb<?php echo $b ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                          <?php

									  for($b=5;$b<=10;$b++)
									  {
                                            
                                        $bookedseat = isset($booked['b'.$b]);
                                    if($bookedseat)

                                    {
                                        ?>
                                         
<li class="single-seat"  id="bookedseata=b<?php echo $b ?>">
<img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
<span class="sit-num">b<?php echo $b ?></span>
</li>
                                        <?php
                                        }
                                        else
                                        {
?>
   <li class="single-seat seat-free" id="avseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgb<?php echo $b?>" alt="seat">
         <span class="sit-num">b<?php echo $b ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatb<?php echo $b ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li> 
<?php
                                        }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($b=11;$b<=14;$b++)
									  {
                                        
                                            $bookedseat = isset($booked['b'.$b]);
                                        if($bookedseat)

                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseata=b<?php echo $b ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li>
                                            <?php
                                            }
                                            else
                                            {
?>
   <li class="single-seat seat-free" id="avseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imgb<?php echo $b?>" alt="seat">
         <span class="sit-num">b<?php echo $b ?></span>
    </li>
    
    <li class="single-seat" style="display: none;" id="bookedseatb<?php echo $b ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li>
    
    <li class="single-seat" id="selectedseatb<?php echo $b ?>" onclick="bookticket('b<?php echo $b ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">b<?php echo $b ?></span>
	</li> 
<?php
                                            }
									  }
									  ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>B</span>
                        </li>
                    </ul>
          <!-- <h5 class="subtitle">Recliner (&#8377;200)</h5> -->
          <!-- <?php echo $this->session->userdata('movieprice')+100 ?> -->
          		<ul class="seat-area">
                        <li class="seat-line">
                            <span>A</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                         <?php
									  for($a=1;$a<=4;$a++)
									  {$bookedseat = isset($booked['a'.$a]);
                                        if($bookedseat)
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
                                            <?php
                                            }
                                            else
                                            {
?>
<li class="single-seat seat-free" id="avseata<?php echo $a ?>" onclick="bookticket('a<?php echo $a ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imga<?php echo $a?>" alt="seat">
         <span class="sit-num">a<?php echo $a ?></span>
    </li>
    
    <li class="single-seat" style="display:none;" id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
    
    <li class="single-seat" id="selectedseata<?php echo $a ?>"onclick="bookticket('a<?php echo $a ?>','100','1')"  style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li> 
<?php
                                            }
									  }
									  ?>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        
                                        <?php
                                        
									  for($a=5;$a<=10;$a++)
									  {
                                        $bookedseat = isset($booked['a'.$a]);
                                        if($bookedseat)
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
                                            <?php
                                            }
                                            else
                                            {
?>
<li class="single-seat seat-free" id="avseata<?php echo $a ?>" onclick="bookticket('a<?php echo $a ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imga<?php echo $a?>" alt="seat">
         <span class="sit-num">a<?php echo $a ?></span>
    </li>
    
    <li class="single-seat" style="display:none;" id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
    
    <li class="single-seat" id="selectedseata<?php echo $a ?>" onclick="bookticket('a<?php echo $a ?>','100','1')"  style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li> 
<?php
                                            }
                                        } 
									  ?>
     
                                      
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <?php
									  for($a=11;$a<=14;$a++)
									  {$bookedseat = isset($booked['a'.$a]);
                                        if($bookedseat)
                                        {
                                            ?>
                                             
    <li class="single-seat"  id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
                                            <?php
                                            }
                                            else
                                            {
?>
<li class="single-seat seat-free" id="avseata<?php echo $a ?>" onclick="bookticket('a<?php echo $a ?>','100','0')">
        <img src="http://localhost/Multiplexsystem/assets/images/movie/seat01.png" id="imga<?php echo $a?>" alt="seat">
         <span class="sit-num">a<?php echo $a ?></span>
    </li>
    
    <li class="single-seat" style="display:none;" id="bookedseata<?php echo $a ?>">
    <img src="<?php echo base_url() ?>assets/images/movie/seatbooked1.png" alt="bookedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li>
    
    <li class="single-seat" id="selectedseata<?php echo $a ?>" onclick="bookticket('a<?php echo $a ?>','100','1')" style="display: none">
    <img src="<?php echo base_url() ?>assets/images/movie/bookedalreday.png" alt="selectedseat">
    <span class="sit-num">a<?php echo $a ?></span>
	</li> 
<?php
                                            }
									  }
									  ?>
                                    </ul>
                                </li>
                            </ul>
                            <span>A</span>
                        </li>
                    </ul>                    
                </div>
            </div>
            <div class="proceed-book bg_img" data-background="<?php echo base_url() ?>assets/images/movie/movie-bg-proceed.jpg">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>You have Choosed Seat</span>
                        <h3 class="title" id="selectedseat"></h3>
                    </div>
                    
                    <div class="book-item">
                        <a href="<?php echo site_url() ?>/multiplexcontroller/moviecheckout/<?php echo $movie->movie_id ?>" class="custom-button">proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
       
		
		seatarr = [];
        function bookticket(seat,price,value)
        {
        //    alert(seat)
        if(value == 0)
        {
            $("#avseat"+seat).hide()
            $("#bookedseat"+seat).show()
            seatarr.push(seat)
            
            $.ajax({
                url:"<?php echo site_url() ?>/multiplexcontroller/addbookticket/"+seatarr+"/"+price,
                method:"post",
                success:function(res)
                {
                    $("#bookedseat"+seat).hide();
                    $("#selectedseat"+seat).show();		
                    $("#selectedseat").html(seatarr+" ")
                    
                }    
            });  
        }
            // alert(seatarr)
            else
            {
                $("#avseat"+seat).show();
                $("#img"+seat).attr('src','http://localhost/Multiplexsystem/assets/images/movie/seat01.png')
			$("#selectedseat"+seat).hide();		
            $("#selectedseat").html(seatarr+" ");

            seatarr = $.grep(seatarr,function(item){return item !== seat; });
            
            // alert(seatarr);
            
            if(seatarr == "")
            {
                // alert('hello');
                $.ajax({
                        url:"<?php echo site_url() ?>/multiplexcontroller/cancelticket/",
                        method:"post",
                        success:function(res)
                        {
							$("#bookedseat"+seat).hide();
							$("#selectedseat"+seat).hide();		
                            $("#selectedseat").html("")
                            seat=null;
                        }    
                    }); 

            }
            else
            {
                $.ajax({
                            url:"<?php echo site_url() ?>/multiplexcontroller/addbookticket/"+seatarr+"/"+price,
                            method:"post",
                            success:function(res)
                            {
                                $("#bookedseat"+seat).hide();
                                $("#selectedseat"+seat).hide();		
                                $("#selectedseat").html(seatarr+" ")
                            }    
                        });
            } 
            }
	    }
        

     	$(document).ready(function(e) {
        var nseat=$("#seatplanid").val()
		var cnt=$("#seatplancnt").val()
		var occupied=nseat.split(',');
		

		for(var i=0;i<occupied.length;i++)
		{
			$("#avseat"+occupied[i]).hide();
			$("#bookedseat"+occupied[i]).show();
		}
		});
	   
        function cancel(seat,price)
        {
            // alert('hello');
            
			$("#avseat"+seat).show();
			$("#selectedseat"+seat).hide();		
            $("#selectedseat").html(seatarr+" ");

            
            seatarr = $.grep(seatarr,function(item){return item !== seat; });
            // alert(seatarr);
            
            if(seatarr == "")
            {
                // alert('hello');
                $.ajax({
                        url:"<?php echo site_url() ?>/multiplexcontroller/cancelticket/",
                        method:"post",
                        success:function(res)
                        {
							$("#bookedseat"+seat).hide();
							$("#selectedseat"+seat).hide();		
                            $("#selectedseat").html("")
                            seat=null;
                        }    
                    }); 

            }
            else
            {
                $.ajax({
                            url:"<?php echo site_url() ?>/multiplexcontroller/addbookticket/"+seatarr+"/"+price,
                            method:"post",
                            success:function(res)
                            {
                                $("#bookedseat"+seat).hide();
                                $("#selectedseat"+seat).hide();		
                                $("#selectedseat").html(seatarr+" ")
                            }    
                        });
            } 

        }
       
    </script>