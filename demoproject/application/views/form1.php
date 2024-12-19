<!-- CONTENT -->
<section id="content">
    <div class="page page-forms-validate">
        <div class="row">
            <div class="col-md-12">
                <section class="boxs">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-blush">
                            <strong>Add Event</strong></h3>
                    </div>
                    <div class="boxs-body">
                        <form class="form-horizontal"   name="form4" role="form" id="form4" method="POST" action=""  enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Categoryid</label>
                                <div class="col-sm-9">
                                    <select name="event_cat_id" class="form-control">
                                        <option>Select Event Category</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Speakerid</label>
                                <div class="col-sm-9">
                                <select name="event_speaker_id" class="form-control">
                                        <option>Select Event Speaker</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                        <option value="Abc">Abc</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Title</label>
                                <div class="col-sm-9">
                                    <input name="event_title" type="text" class="form-control" placeholder="Event Title"   >
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Trailer</label>
                                <div class="col-sm-9">
                                    <input name="event_trailer" type="text" class="form-control" placeholder="Event Trailer ">
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Price</label>
                                <div class="col-sm-9">
                                    <input name="event_price" type="text" class="form-control" placeholder="Event Price"  >
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Images</label>
                                <div class="col-sm-9">
                                <span class="btn btn-raised btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <input name="event_images" type="file" class="form-control" placeholder="Event Images" >
                                    </span>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Poster</label>
                                <div class="col-sm-9">  
                                <span class="btn btn-raised btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <input name="event_poster" type="file" class="form-control" placeholder="Event Poster" >
                                    </span>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Description</label>
                                <div class="col-sm-9">
                                    <input name="event_description" type="text" class="form-control" placeholder="Event Description">
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Type</label>
                                <div class="col-sm-9">
                                    <input name="event_type" type="text" class="form-control" placeholder="Event Type" >
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Address</label>
                                <div class="col-sm-9">
                                    <input name="event_address" type="text" class="form-control" placeholder="Event Address" >
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Event Date</label>
                                <div class="col-sm-9">
                                    <input name="event_date" type="text" class="form-control" placeholder="Event Date" >
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">State</label>
                                <div class="col-sm-9">
                                        <select class="form-control" name="txtstate" onchange="getcity(this.value)">
                                            <option>Select State</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                        </select>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">City</label>
                                <div class="col-sm-9">
                                        <select id="city" class="form-control" name="txtcity" onchange="getarea(this.value)">
                                            <option>Select City</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                        </select>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Area</label>
                                <div class="col-sm-9">
                                        <select id="area" class="form-control" name="txtarea">
                                            <option>Select Area</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                            <option value="Abc">Abc</option>
                                        </select>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                    </div>
                    <div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
                        <button type="submit" class="btn btn-raised btn-success" id="form4Submit">Submit</button>
                    </div>
                </section>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->

<!-- Page Specific Scripts  -->
<script >
$(window).load(function () {
    $('#form1').parsley().subscribe('parsley:field:validate', function () {
        if ($('#form1').parsley().isValid()) {
            $('#form1Submit').prop('disabled', false);
        } else {
            $('#form1Submit').prop('disabled', true);
        }
    });

    $('#form1Submit').on('click', function () {
        $('#form1').submit();
    });

    $('#form2Submit').on('click', function () {
        $('#form2').submit();
    });

    $('#form3Submit').on('click', function () {
        $('#form3').submit();
    });

    $('#form4Submit').on('click', function () {
        $('#form4').submit();
    });
});
</script>
<!--/ Page Specific Scripts -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:26 GMT -->
</html>