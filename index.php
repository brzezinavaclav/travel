<?php include 'header.php'; ?>

<section id="select">
    <div class="container">
        <div id="select_form">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#flights" aria-controls="home" role="tab" data-toggle="tab"><span class="fa fa-plane"></span> Flights</a></li>
                <li role="presentation"><a href="#hotels" aria-controls="profile" role="tab" data-toggle="tab"><span class="fa fa-bed"></span> Hotels</a></li>
                <li role="presentation"><a href="#holidays" aria-controls="profile" role="tab" data-toggle="tab"><span class="fa fa-sun-o"></span> Holidays</a></li>
                <!--<li role="presentation"><a href="#flight_hotel" aria-controls="messages" role="tab" data-toggle="tab"><span class="fa fa-briefcase"></span> Flight+Hotel</a></li>
                <li role="presentation"><a href="#bus" aria-controls="settings" role="tab" data-toggle="tab"><span class="fa fa-bus"></span> Bus</a></li>
                <li role="presentation"><a href="#trains" aria-controls="settings" role="tab" data-toggle="tab"><span class="fa fa-train"></span> Trains</a></li>-->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="flights">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h3>Book Domestic & International Flight Tickets</h3>
                                <div class="input-group">
                                    <div class="btn-group btn-group-sm" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="options" id="flights_domestic" autocomplete="off" checked> Domestic
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="options" id="flights_international" autocomplete="off"> International
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="radio-inline">
                                    <input type="radio" name="flights_way" value="option1" checked> One way
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="flights_way" value="option2"> Round trip
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="flights_way" value="option3"> Multicity/Stop over
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <input type="text" class="form-control" name="flights_from" id="flights_from">
                            </div>
                            <div class="form-group col-md-6">
                                <label>To</label>
                                <input type="text" class="form-control" name="flights_to" id="flights_to">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <label>Departure</label>
                                        </div>
                                        <div class='input-group date date-picker' id='flights_departure'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <label>Return</label>
                                        </div>
                                        <div class='input-group date date-picker' id='flights_return'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <label>Adult <small>(12+)</small></label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <label>Child <small>(2-11)</small></label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <label>Infant <small>(0-2)</small></label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Class</label>
                                        <select class="form-control">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Airline preference</label>
                                        <select class="form-control">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="flights.php" class="btn btn-primary btn">Search flights</a>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>

                <div role="tabpanel" class="tab-pane" id="hotels">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h3>Book Domestic & International Hotels</h3>
                                <div class="input-group">
                                    <div class="btn-group btn-group-sm" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="options" id="hotels_domestic" autocomplete="off" checked> Domestic
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="options" id="hotels_international" autocomplete="off"> International
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>I want to go</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label>Check in</label>
                                </div>
                                <div class='input-group date date-picker' id='hotels_check_in'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label>Check out</label>
                                </div>
                                <div class='input-group date date-picker' id='hotels_check_out'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="hotels.php" class="btn btn-primary btn">Search hotels</a>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="holidays">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h3>Book Domestic & International Holiday packages</h3>
                                <div class="input-group">
                                    <div class="btn-group btn-group-sm" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" name="options" id="holidays_domestic" autocomplete="off" checked> Domestic
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="options" id="holidays_international" autocomplete="off"> International
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <select class="form-control">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Destination</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <a href="holidays.php" class="btn btn-primary btn">Search holidays</a>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </form>
                </div>
                <!--
                <div role="tabpanel" class="tab-pane" id="flight_hotel">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h3>Book Flight Plus Hotel Combo & Save More !</h3>
                                <label class="radio-inline">
                                    <input type="radio" name="flighthotel_way" value="option1" checked> One way
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="flighthotel_way" value="option2"> Round trip
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>From</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>To</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <div class="input-group">
                                    <label>Departure</label>
                                </div>
                                <div class='input-group date date-picker' id='flight_hotel_departure'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="input-group">
                                    <label>Return</label>
                                </div>
                                <div class='input-group date date-picker' id='flight_hotel_return'>
                                    <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Hotel city</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <div class="input-group">
                                    <label>Check in</label>
                                </div>
                                <div class='input-group date date-picker' id='flight_hotel_check_in'>
                                    <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="input-group">
                                    <label>Check out</label>
                                </div>
                                <div class='input-group date date-picker' id='flight_hotel_check_out'>
                                    <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Travelers</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn" value="Search fly + hotel combos">
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="bus">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Online Bus Tickets Booking</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>To</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label>Departure</label>
                                </div>
                                <div class='input-group date date-picker' id='bus_departure'>
                                    <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email <small>(Optional)</small></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn" value="Search buses">
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="trains">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>IRCTC Indian Railways Tickets</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>To</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label>Departure</label>
                                </div>
                                <div class='input-group date date-picker' id='train_departure'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Class</label>
                                <select class="form-control">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn" value="Search trains">
                            </div>
                        </div>
                    </form>
                </div>
                -->
            </div>
        </div>
    </div>
</section>
<section id="explore">
    <div class="container">

    </div>
</section>

<?php include 'footer.php'; ?>