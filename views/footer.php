<footer class="footer">

    <div class="container">

        <p>&copy; 2017 Wasek Habib</p>

    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="loginModalTitle">Login</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="loginAlert"></div>
                <form>
                    <input type="hidden" id="loginActive" name="loginActive" value="1">
                    <fieldset class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email address">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" id="toggleLogin">Sign up</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" id="loginSignupButton" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>

<script src="http://project360-com.stackstaging.com/scripts.js"></script>

</body>
</html>