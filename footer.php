
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <hr>
                &copy; 2016 Trvael company
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="loginModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registrationModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="">Repeat password</label>
                        <input type="password" class="form-control" id="" placeholder="Repeat password">
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/datetimepicker.js"></script>
<script type="text/javascript">
    $(function () {
        $('#flights_check_in').datetimepicker();
        $('#flights_check_out').datetimepicker();
        $('#hotels_check_in').datetimepicker();
        $('#hotels_check_out').datetimepicker();
    });
</script>
</body>
</html>