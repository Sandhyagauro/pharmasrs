
<!-- Footer -->
<footer id="footer" class="footer-hover-links-light mt-0" >
    <div class="footer-copyright">
        <div class="container">
            <div class="row text-center text-md-left align-items-center">
                <div class="col-md-7 col-lg-8">
                    <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">

                        <li class="social-icons-facebook"><a href="https://www.facebook.com/Mailsnepal-1943526925692742" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-5 col-lg-4">
                    <p class="text-md-right pb-0 mb-0">
                        Copyrights © 2018. All Rights Reserved by <a href="#">Pharma SRS</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
    <div class="modal-dialog text-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4Label">Rate Enquiry Form </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="contact-form form-style-2" data-request="estimateform::onSend">
                <strong id="succesEstimateMsg"></strong>

                <div class="modal-body">
                    <div id="successEstimateMsg"></div>

                    <div class="form-group">
                        <a href="{{url('/pickup')}}" style="float: right;" class="btn btn-primary">Get a Pickup</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="merchantise" id="merchantise" class="form-control">
                                <optgroup label="Merchantise Type">
                                    <option value=" ">-- Select --</option>
                                    <option value="import">Import</option>
                                    <option value="export">Export</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="service_type" class="form-control">
                                <optgroup label="Service Type">
                                    <option>DHL</option>
                                    <option>ARAMEX</option>
                                    <option>TNT</option>
                                    <option>FEDEX</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="row export_type_section">
                        <div class="col-md-6">
                            <select name="export_type" class="form-control ">
                                <optgroup label="Export Type">
                                    <option>Document</option>
                                    <option>Non Dox</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">

                        <label class="form-control-label">Name</label>
                        <input name="person_name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">

                        <label class="form-control-label">Mobile No.</label>
                        <input name="number" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Pickup Location</label>
                        <input id="pickup_location" name="pickup_location" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Drop off Location</label>
                        <input id="dropoff_location" name="dropoff_location" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Weight</label>
                        <input id="weight" name="weight" type="number" step="0.01"class="form-control">
                    </div>



                    <strong id="errorEstimateCaptcha"></strong>

                    <div class="form-row mt-2">
                        <div class="form-group col">
                            <div class="g-recaptcha" data-sitekey="6Lf3r18UAAAAAF_i7k-ETJARNzaw2fa8FIpOLKUE"></div>

                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
            <strong id="result"></strong>


        </div>
    </div>
</div>
