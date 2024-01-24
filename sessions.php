<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 0vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.venue-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.venue-list .carousel,.venue-list .card-body {
    width: calc(45%)
}
.venue-list .carousel img.d-block.w-100 {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh;
        height: 50vh
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.venue-text{
    justify-content: center;
    align-items: center ;
}

</style>
        <header class="mheader">
        </header>
            <div class="container-fluid mt-3 pt-2">
                <h4 class="text-center text-white">List of Our Options</h4>
                <hr class="divider">
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                <div class="col-md-6">
                <div class="card venue-list " data-id="4">

                        <div id="imagesCarousel_4 card-img-top " class="carousel slide" data-ride="carousel">
                                                          <div class="carousel-inner">
                              
                                                                             <div class="carousel-item active">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_4/engagement.jpg" alt="">
                                        </div>
                                                                         <a class="carousel-control-prev" href="#imagesCarousel_4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt">Engagement/Wedding</b></h3>
                                    <small><i>1214 west 42nd st</i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit;"><small>Engagement/Wedding Photos With Multple Locations</small></span>
                                    <br>
                                <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 500.00</span>
                                <br>
                                <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='4'>Book</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                                <div class="col-md-6">
                <div class="card venue-list " data-id="1">

                        <div id="imagesCarousel_1 card-img-top " class="carousel slide" data-ride="carousel">
                                                          <div class="carousel-inner">
                              
                                                                             <div class="carousel-item active">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_1/1_1703718840_1_1703718660_1_1703718600_1_1703717760_test photos.jfif" alt="">
                                        </div>
                                                                             <div class="carousel-item ">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_1/senior.jpg" alt="">
                                        </div>
                                                                         <a class="carousel-control-prev" href="#imagesCarousel_1" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt">Seniors</b></h3>
                                    <small><i>1214 main st</i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit;"><small>Senior Photos With Multple Locations</small></span>
                                    <br>
                                <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 50.00</span>
                                <br>
                                <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='1'>Book</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                                <div class="col-md-6">
                <div class="card venue-list rtl" data-id="3">

                        <div id="imagesCarousel_3 card-img-top " class="carousel slide" data-ride="carousel">
                                                          <div class="carousel-inner">
                              
                                                                             <div class="carousel-item active">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_3/family.jfif" alt="">
                                        </div>
                                                                             <div class="carousel-item ">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_3/family.jpg" alt="">
                                        </div>
                                                                         <a class="carousel-control-prev" href="#imagesCarousel_3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt">Family</b></h3>
                                    <small><i>1214 west 42nd st</i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit;"><small>Family Photos With Multple Locations</small></span>
                                    <br>
                                <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 100.00</span>
                                <br>
                                <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='3'>Book</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                                <div class="col-md-6">
                <div class="card venue-list rtl" data-id="2">

                        <div id="imagesCarousel_2 card-img-top " class="carousel slide" data-ride="carousel">
                                                          <div class="carousel-inner">
                              
                                                                             <div class="carousel-item active">
                                          <img class="d-block w-100" src="admin/assets/uploads/venue_2/maternity.jpg" alt="">
                                        </div>
                                                                         <a class="carousel-control-prev" href="#imagesCarousel_2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt">Maternity</b></h3>
                                    <small><i>1214 west 42nd st</i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit;"><small>Maternity Photos With Multple Locations</small></span>
                                    <br>
                                <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: 50.00</span>
                                <br>
                                <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" data-id='2'>Book</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                
                </div>
                </div>
                </div>
            </div>


<script>
    
    $('.book-venue').click(function(){
        uni_modal("Submit Booking Request","booking.php?venue_id="+$(this).attr('data-id'))
    })
    $('.venue-list .carousel img').click(function(){
        viewer_modal($(this).attr('src'))
    })

</script>