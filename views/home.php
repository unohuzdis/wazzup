<div class="container-fluid mainContainer">

    <div class="row">

        <div class="col-md-4">

            <?php displaySearch(); ?>

            <hr>

            <?php displayTweetBox(); ?>

        </div>

        <div class="col-md-8">

            <h2>Recent Stories</h2>

            <?php displayTweets('public'); ?>

        </div>
    </div>

</div>