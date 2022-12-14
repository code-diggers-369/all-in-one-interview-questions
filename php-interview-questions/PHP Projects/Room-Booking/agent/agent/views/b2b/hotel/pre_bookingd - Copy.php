<?php echo $this->load->view('home/header'); ?>
<?php echo $this->load->view('home/agent_header'); ?>
<link rel="stylesheet" href="<?php echo WEB_DIR; ?>public/css/customagent.css">

<!-----  Top destination content ----->

<style>
    .padd{
        padding:10px;  
    }
</style>
<div class="hotelCntr">
    <div class="container"> 

        <!--hotel search section-->
        <div class="row">
            <div class="col-md-12 bookedDetails">


                


                <form action="<?php echo WEB_URL; ?>hoteld/provisional_booking" method="post">
                    <!-- login details -->
                    <section  id="emailDetails" class="verySoftShadow">
                        <div class="bdOpen " id="loginOpen">
                            <div class="bdTitle">
                                <h3>Email address</h3>
                            </div>


                            <div class="row">

                                <div class="row">
                                    <div class="padd">
                                        <div class="col-md-2">Your email address</div>
                                        <div class="col-md-4">
                                            <input type="text"  class="form-control" tabindex="143" maxlength="75" placeholder="Your booking details will be sent here" title="Enter your email id" id="userEmailId" name="userEmailId"  onblur="return email_validate(this.id);"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="padd">
                                        <div class="col-md-2">Mobile No</div>
                                        <div class="col-md-4">
                                            <input type="text"  class="form-control" tabindex="143" maxlength="10" placeholder="Enter Mobile Number" title="Enter Mobile Number" id="userMobilNo" name="userMobilNo"  onblur="return mobile_validate(this.id);"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="padd">
                                        <div class="col-md-2">Country</div>
                                        <div class="col-md-4" >
                                            <select name="country" class="form-control" >

                                                <?php
                                                foreach ($country as $val) {
                                                    ?>
                                                    <option value="<?php echo $val->name; ?>" ><?php echo $val->name; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="padd">
                                        <div class="col-md-2">City</div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="CITY" name="city" required /> 

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="padd">
                                        <div class="col-md-2">Postal Code</div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="POSTAL CODE" name="p_code" required /> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                            </div>

                        </div>
                        <div class="bdDone" id="loginDone"></div>
                    </section>

                    <!-- traveller details -->
                    <section  id="travellerDetails" class="verySoftShadow">
                        <div class="bdOpen " id="travellersOpen">
                            <div class="bdTitle">
                                <h3>Travellers</h3>
                            </div>
                            <div class="row ">
                                <input type="hidden" name="email_id" id="travMail" />
                                <input type="hidden" name="mobile_no" id="travMobile" />

                                <div class="BkdtrvlrDtls">


                                    <?php $session_dat = $this->session->userdata('hotel_search_data'); //echo '<pre>';print_r($session_dat);   ?>
                       
                                            <div class="row">
                                                <div class="col-md-2 txtRight">&nbsp;Adult</div>
                                                <div class="col-md-1 form-group">
                                                    <select name="atitle" class="form-control">
                                                        <option>Title</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="MS">Ms</option>
                                                        <option value="Mrs">Mrs</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <input type="text" name="afname" class="form-control" placeholder="First Name"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <input type="text" name="amname" class="form-control" placeholder="Middle Name"/>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <input type="text" name="alname" class="form-control" placeholder="Last Name"/>
                                                </div>
                                            </div>
                                </div>
                             
                            </div>
                        </div>
                        <div class="bdDone" id="travellersDone"></div>
                    </section>

                    <!-- Payment details -->
                    <section  id="travellerDetails" class="verySoftShadow">
                        <div class="bdOpen " id="travellersOpen">
                            <div class="bdTitle">
                                <h3>Payment Process</h3>
                            </div>
                            <div class="row ">

                                <div class="BkdtrvlrDtls">
                                    <div class="col-md-2"> <input type="radio" name="payment_type" value="deposite" checked="checked">Deposit Payments</input></div>
                                    <div class="col-md-2"> <input type="radio" name="payment_type" value="hdfc">HDFC Payments</input></div>
                                    <div class="col-md-2"><input type="radio" name="payment_type" value="payu">Pay U Payments</input></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"><button type="submit" class="btn btn-primary">CONTINUE</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="bdDone" id="travellersDone"></div>
                    </section>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
<?php echo $this->load->view('home/footer'); ?>