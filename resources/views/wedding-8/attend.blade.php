<div id="fh5co-started" class="fh5co-bg">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2 class="rsvp-title">Are You Attending?</h2>
                <p class="rsvp-please">Please Fill-up the form to notify you that you're attending. Thanks.</p>
            </div>
        </div>
        <div class="row animate-box rsvp-form">
            <div class="col-md-10 col-md-offset-1">
                <form action="" method="POST" class="form-inline" id="form-rsvp">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="name" name="name" class="form-control" id="rsvp-name" placeholder="Name" required>
                            <input type="hidden" name="ww_id" id="ww_id" value="3"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="email"  class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" id="rsvp-email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <!-- <label for="arrived_date"  class="sr-only">Arrived Date</label>
                            <input type="text" name="arrived_date" class="form-control datepicker" id="rsvp-arrived_date" placeholder="Arrived Date"> -->
                            <label for="number_of_guest"  class="sr-only">Number of guests attending</label>
                            <select name="number_of_guest" class="form-control" id="rsvp-number_of_guest" required oninvalid="this.setCustomValidity('Please select an item from the list.')" oninput="setCustomValidity('')">
                                <option value=""  style="color: gray;">
                                    Number of guests attending
                                </option>
                                <option value="1" style="color: gray;font-weight: bold">
                                    1
                                </option>
                                <option value="2"  style="color: gray;font-weight: bold">
                                    2
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button type="submit" class="btn btn-default btn-block btn-attending anchor-style">I am Attending</button>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    </div>
                </form>
                
            </div>
        </div>
        <div class="rsvp-desc animate-box" >
            <p class="rsvp-desc-thanks">
                Thank you <b class="rsvp-name">asdf</b>, your RSVP has been submitted to us.
            </p>
            <p class="rsvp-desc-helphashtag">
                Help us to share the moments on Instagram with #hashtag
                <br/>
                <a href="https://www.instagram.com/explore/tags/DISBIforever/" target="_blank">#DISBIforever</a>
            </p>
        </div>
    </div>
</div>