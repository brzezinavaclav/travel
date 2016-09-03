<?php include 'header.php'; include 'nav-secondary.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" id="searchbar">
                    <div class="panel-body" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7">
                            <label><small>From</small></label>
                            <p>Czech republic</p>
                        </div>
                        <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7">
                            <label><small>To</small></label>
                            <p>Czech republic</p>
                        </div>
                        <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7">
                            <label><small>Departure</small></label>
                            <p><span class="fa fa-calendar"></span> 08 <sup>Sep,16</sup></p>
                        </div>
                        <div class="col-md-3 text-right">
                            <button type="button" class="btn btn-primary" style="margin-top:3px;">
                                Modify search
                            </button>
                        </div>
                    </div>
                    <div class="dropdown-menu wide modify_search">
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
                                    <div class='input-group date' id='bus_departure'>
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
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 15px">
            <div class="col-md-3">
                <h4>Filter your search <button class="btn btn-default btn-xs pull-right">Reset all</button></h4>
                <div class="form-group">
                    <label>Price Range</label>
                    <div class="panel panel-default">
                        <div class="panel-body airports-select">
                            <input type="range" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Departure time</label>
                    <div class="panel panel-dafault">
                        <div class="panel-body">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Chiang Mai City
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Chiang Mai City
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Chiang Mai City
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Bus type</label>
                    <div class="panel panel-dafault">
                        <div class="panel-body">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                                    Internet/Wi-Fi
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                                    Internet/Wi-Fi
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                                    Internet/Wi-Fi
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                                    Internet/Wi-Fi
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h4>34 Hotels Available in Chiang Mai Riverside</h4>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-md-12">
                        <div class="btn-group col-md-12 sorting" style="padding: 0px" data-toggle="buttons">
                            <label class="btn btn-default active" style="width: 25%">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Popularity <span class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Departure <span class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc" style="display: none"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Arrival <span class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc" style="display: none"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Price <span class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc" style="display: none"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="hotel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 10px;">
                                            <h4>New Mitrapap Hotel <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h4>
                                            <p><small>Chiang Mai Riverside</small></p>
                                            <div>At a 10-minute walk from Chiang Mai Night Bazaar, this hotel offers massages, tour desk and free Wi-Fi access. Specialising in Indian recipes, Rajdarbar restaurant is onl...</div>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding: 25px 0px;">
                                            <h4>35$</h4>
                                            <div><small>per room/night</small></div>
                                            <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="hotel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 10px;">
                                            <h4>New Mitrapap Hotel <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h4>
                                            <p><small>Chiang Mai Riverside</small></p>
                                            <div>At a 10-minute walk from Chiang Mai Night Bazaar, this hotel offers massages, tour desk and free Wi-Fi access. Specialising in Indian recipes, Rajdarbar restaurant is onl...</div>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding: 25px 0px;">
                                            <h4>35$</h4>
                                            <div><small>per room/night</small></div>
                                            <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="hotel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 10px;">
                                            <h4>New Mitrapap Hotel <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h4>
                                            <p><small>Chiang Mai Riverside</small></p>
                                            <div>At a 10-minute walk from Chiang Mai Night Bazaar, this hotel offers massages, tour desk and free Wi-Fi access. Specialising in Indian recipes, Rajdarbar restaurant is onl...</div>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding: 25px 0px;">
                                            <h4>35$</h4>
                                            <div><small>per room/night</small></div>
                                            <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="hotel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 10px;">
                                            <h4>New Mitrapap Hotel <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h4>
                                            <p><small>Chiang Mai Riverside</small></p>
                                            <div>At a 10-minute walk from Chiang Mai Night Bazaar, this hotel offers massages, tour desk and free Wi-Fi access. Specialising in Indian recipes, Rajdarbar restaurant is onl...</div>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding: 25px 0px;">
                                            <h4>35$</h4>
                                            <div><small>per room/night</small></div>
                                            <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="hotel">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 10px;">
                                            <h4>New Mitrapap Hotel <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h4>
                                            <p><small>Chiang Mai Riverside</small></p>
                                            <div>At a 10-minute walk from Chiang Mai Night Bazaar, this hotel offers massages, tour desk and free Wi-Fi access. Specialising in Indian recipes, Rajdarbar restaurant is onl...</div>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding: 25px 0px;">
                                            <h4>35$</h4>
                                            <div><small>per room/night</small></div>
                                            <button class="btn btn-danger" style="margin-top: 5px">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>