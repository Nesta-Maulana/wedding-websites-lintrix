<div id="fh5co-testimonial"  class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="fh5co-heading">
                    <h2>Your Wishes.</h2>
                    <!-- <span>We'll be so happy to read your best wishes to us!</span> -->
                </div>
            </div>
            
            <!-- Form Input -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs12 col-md-offset-3 testimonial">
                        <form id="wishes_form" name="wishes_form" class="form-transparent form-text-white form" method="post" action="include/wishes.php">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>YOUR NAME</label>
                                    <input type="text" placeholder="Enter Your Name" id="form_name" name="name" required="" class="form-control" required>
                                    <input type="hidden" name="ww_id" id="ww_id" value="2"/>
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>YOU ARE</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="friend">Friend</option>
                                        <option value="family">Family</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label>OF</label>
                                    <select name="type_of" class="form-control" id="type_of" required>
                                        <option value="dyla">Dyla</option>
                                        <option value="nico">Nico</option>
                                        <option value="both">Both</option>
                                    </select>
                                </div>
                                </div>



                                
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label>YOUR WISH</label>
                                    <textarea id="form_wish" name="wish" class="form-control required" rows="5" placeholder="Enter your wihses for us" required></textarea>
                                </div>
                                </div>
                                <div class="col-sm-12">
                                <div class="form-group mb-0 text-center">
                                    <button type="button" class="btn btn-primary btn-wish anchor-style" onclick="submitWish()">Send Wishes</button>
                                </div>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>

            <hr/>
            
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="fh5co-heading2">
                    <h2>Friends Wishes</h2>
                    <!-- <span>Best Wishes</span> -->
                </div>
            </div>
            <!-- Wishes -->
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="wrap-testimony">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
