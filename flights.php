<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" id="searchbar">
                <div class="panel-body" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="col-md-2 modify" style="border-right: 1px solid #e7e7e7">
                            <label><small>One way</small></label>
                            <p>Prague to Brno</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6 modify" style="border-right: 1px solid #e7e7e7">
                                    <label><small>Departure</small></label>
                                    <p><span class="fa fa-calendar"></span> 08 <sup>Sep,16</sup></p>
                            </div>
                            <div class="col-md-6 modify" style="border-right: 1px solid #e7e7e7">
                                    <label><small>Return</small></label>
                                    <p><span class="fa fa-calendar"></span> 10 <sup>Sep,20</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7">
                                <label><small>Adult</small></label>
                                <p>01</p>
                            </div>
                            <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7">
                                <label><small>Child</small></label>
                                <p>01</p>
                            </div>
                            <div class="col-md-3 modify">
                                <label><small>Infant</small></label>
                                <p>01</p>
                            </div>
                            <div class="col-md-3">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary " style="margin-top:5px;">
                                        Modify search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-menu wide modify_search">
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
                                        <div class='input-group date' id='flights_check_in'>
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
                                        <div class='input-group date' id='flights_check_out'>
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
                                <input type="submit" class="btn btn-primary btn" value="Search flights">
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 15px">
        <div class="col-md-3">
            <h4>Filter your search <button class="btn btn-default btn-xs pull-right">Reset all</button></h4>
            <div class="form-group">
                <label>Nearby Airports</label>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Bangkok-Don Mueang Airport <DMK></DMK>
                        </div>
                    </div>
                </a>
            </div>
            <div class="form-group">
                <label>No. of Stops</label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                        <input type="checkbox" autocomplete="off" checked> 0 stop
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" autocomplete="off"> 1 stop
                    </label>
                    <label class="btn btn-default" disabled>
                        <input type="checkbox" autocomplete="off"> 1+ stops
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Timings: From </label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                        <input type="checkbox" autocomplete="off" checked> 12AM - 6AM
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" autocomplete="off"> 6AM - 12PM
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" autocomplete="off"> 12PM - 6PM
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" autocomplete="off"> 6PM - 12AM
                    </label>
                </div>
            </div>
            <div class="form-group">
                    <label>Price Range</label>
                <div class="panel panel-default">
                    <div class="panel-body airports-select">
                    <input type="range" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Airlines</label>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://placehold.it/40x40" style="float: left">
                            <div style="float: left; padding: 3px 0px 0px 10px">
                                SpiceJet
                                <br>$35 onwards
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://placehold.it/40x40" style="float: left">
                            <div style="float: left; padding: 3px 0px 0px 10px">
                                SpiceJet
                                <br>$35 onwards
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://placehold.it/40x40" style="float: left">
                            <div style="float: left; padding: 3px 0px 0px 10px">
                                SpiceJet
                                <br>$35 onwards
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://placehold.it/40x40" style="float: left">
                            <div style="float: left; padding: 3px 0px 0px 10px">
                                SpiceJet
                                <br>$35 onwards
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="form-group">
                <label>Connecting Airports</label>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Mumbai (BOM)
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Mumbai (BOM)
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Mumbai (BOM)
                        </div>
                    </div>
                </a>
                <a href="javascript:" class="panel-sm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Mumbai (BOM)
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <h4>ONE WAY , BLR ⇒ BKK</h4>
                    <p>08 Sep, 16 | 37 Flights found</p>
                </div>
                <div class="col-md-4 col-md-offset-2 text-right">
                    <select class="form-control" style="margin-top: 15px">
                        <option>US dolar (USD)</option>
                        <option>US dolar (USD)</option>
                        <option>US dolar (USD)</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-bottom: 15px">
                <div class="col-md-12">
                    <div class="btn-group col-md-3" style="padding: 0px">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; border-radius: 0px; border-right-width: 0px"">
                            Departure
                        </button>
                        <ul class="dropdown-menu wide">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                    <div class="btn-group col-md-3" style="padding: 0px">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; border-radius: 0px; border-right-width: 0px">
                            Duration
                        </button>
                        <ul class="dropdown-menu wide">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                    <div class="btn-group col-md-3" style="padding: 0px">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; border-radius: 0px; border-right-width: 0px"">
                            Arrival
                        </button>
                        <ul class="dropdown-menu wide">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                    <div class="btn-group col-md-3" style="padding: 0px">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%; border-radius: 0px">
                            Price
                        </button>
                        <ul class="dropdown-menu wide">
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2" style="padding-top: 5px;text-align: center">
                                    <img src="http://placehold.it/40x40">
                                    <div>SpiceJet</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bengaluru</div>
                                    <div><b>08 Sep, 17:40</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>-></div>
                                    <div>7h 50m | ‏1 stop</div>
                                </div>
                                <div class="col-md-2" style="padding-top: 10px;text-align: center">
                                    <div>Bangkok</div>
                                    <div><b>09 Sep, 03:00</b></div>
                                </div>
                                <div class="col-md-2" style="padding-top: 20px;text-align: center">
                                    <a href="">Flight details</a>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <div><b>35$</b></div>
                                    <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>