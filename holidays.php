<?php include 'header.php';
include 'nav-secondary.php'; ?>
    <div id="holidays_search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Goa</h1>
                    <form class="form-inline" style="margin-top: 30px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="From" value="Bangalore">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="To" value="Goa">
                        </div>
                        <div class="form-group">
                            <div class='input-group date date-picker' id='holidays_when'>
                                <input type=====t' class="form-control" placeholder="When"/>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" id="searchbar">
                    <div class="panel-body" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7; padding: 10px;">
                                    <label>Budget</label>
                                </div>
                                <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7; padding: 10px;">
                                    <label>Duration</label>
                                </div>
                                <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7; padding: 10px;">
                                    <label>Hotel choice</label>
                                </div>
                                <div class="col-md-3 modify" style="border-right: 1px solid #e7e7e7; padding: 10px;">
                                    <label>Travel option</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary " style="margin-top:5px;">
                                        Filters
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-menu wide modify_search">
                        <form>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    Up to 300$
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    300 - 400$
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    400 - 500$
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    500 - 600$
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    600 - 700$
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    700 - 800$
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    Up to 3 nights
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    4 nights
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    5 to 7 nights
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    8 to 10 nights
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    11 Nights And above
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    Up to 3 stars
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    4 stars
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    5 stars
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    By flight
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    By car
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    By bus
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    Includes Sightseeing
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios" id="optionsRadios1"
                                                           value="option1">
                                                    Includes Meals
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 15px">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4>34 Hotels Available in Chiang Mai Riverside</h4>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div class="col-md-12">
                        <div class="btn-group col-md-12 sorting" style="padding: 0px" data-toggle="buttons">
                            <label class="btn btn-default active" style="width: 25%">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Popularity
                                <span class="fa fa-sort-asc" style="display: none"></span> <span
                                    class="fa fa-sort-desc"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Price <span
                                    class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc"
                                                                                               style="display: none"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Duration <span
                                    class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc"
                                                                                               style="display: none"></span>
                            </label>
                            <label class="btn btn-default" style="width: 25%">
                                <input type="radio" name="options" id="option3" autocomplete="off"> User rating <span
                                    class="fa fa-sort-asc" style="display: none"></span> <span class="fa fa-sort-desc"
                                                                                               style="display: none"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="holiday">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="http://placehold.it/300x300" style="width: 100%;">
                                        </div>
                                        <div class="col-md-5" style="padding-top: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Enlightening NorthEast 5 Nights 6 Days</h4>
                                                    <p>
                                                        <small><b>Darjeeling (2N) Gangtok (2N) Kalimpong (1N)</b>
                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small>http://www.appleholidays.lk/</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Hotels Included in package</b></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="javascript:">View more</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Standart
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Luxury
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="text-align: center; padding: 80px 0px;">
                                            <h4>35$</h4>
                                            <div>
                                                <small>Per person from Bangalore</small>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-danger" style="margin-top: 10px">Book online
                                                </button>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-primary" style="margin-top: 5px">View details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="holiday">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="http://placehold.it/300x300" style="width: 100%;">
                                        </div>
                                        <div class="col-md-5" style="padding-top: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Enlightening NorthEast 5 Nights 6 Days</h4>
                                                    <p>
                                                        <small><b>Darjeeling (2N) Gangtok (2N) Kalimpong (1N)</b>
                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small>http://www.appleholidays.lk/</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Hotels Included in package</b></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="javascript:">View more</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Standart
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Luxury
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="text-align: center; padding: 80px 0px;">
                                            <h4>35$</h4>
                                            <div>
                                                <small>Per person from Bangalore</small>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-danger" style="margin-top: 10px">Book online
                                                </button>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-primary" style="margin-top: 5px">View details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="holiday">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="http://placehold.it/300x300" style="width: 100%;">
                                        </div>
                                        <div class="col-md-5" style="padding-top: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Enlightening NorthEast 5 Nights 6 Days</h4>
                                                    <p>
                                                        <small><b>Darjeeling (2N) Gangtok (2N) Kalimpong (1N)</b>
                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small>http://www.appleholidays.lk/</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Hotels Included in package</b></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="javascript:">View more</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Standart
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Luxury
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="text-align: center; padding: 80px 0px;">
                                            <h4>35$</h4>
                                            <div>
                                                <small>Per person from Bangalore</small>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-danger" style="margin-top: 10px">Book online
                                                </button>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-primary" style="margin-top: 5px">View details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="holiday">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="http://placehold.it/300x300" style="width: 100%;">
                                        </div>
                                        <div class="col-md-5" style="padding-top: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Enlightening NorthEast 5 Nights 6 Days</h4>
                                                    <p>
                                                        <small><b>Darjeeling (2N) Gangtok (2N) Kalimpong (1N)</b>
                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small>http://www.appleholidays.lk/</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Hotels Included in package</b></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="javascript:">View more</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Standart
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Luxury
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="text-align: center; padding: 80px 0px;">
                                            <h4>35$</h4>
                                            <div>
                                                <small>Per person from Bangalore</small>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-danger" style="margin-top: 10px">Book online
                                                </button>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-primary" style="margin-top: 5px">View details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="holiday">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="http://placehold.it/300x300" style="width: 100%;">
                                        </div>
                                        <div class="col-md-5" style="padding-top: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Enlightening NorthEast 5 Nights 6 Days</h4>
                                                    <p>
                                                        <small><b>Darjeeling (2N) Gangtok (2N) Kalimpong (1N)</b>
                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small>http://www.appleholidays.lk/</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><b>Hotels Included in package</b></p>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="javascript:">View more</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Standart
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Luxury
                                                                </label>
                                                            </th>
                                                            <th>
                                                                <label class="radio-inline">
                                                                    <input type="radio" id="inlineradio1"
                                                                           value="option1"> Premium
                                                                </label>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Darjeeling</td>
                                                            <td>Hotel Sonar Bangla</td>
                                                            <td class="rating">3 <span class="fa fa-star"></span></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="text-align: center; padding: 80px 0px;">
                                            <h4>35$</h4>
                                            <div>
                                                <small>Per person from Bangalore</small>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-danger" style="margin-top: 10px">Book online
                                                </button>
                                            </div>
                                            <div class="input-group" style="margin: 0 auto;">
                                                <button class="btn btn-primary" style="margin-top: 5px">View details
                                                </button>
                                            </div>
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