<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">
    
        <?php include 'includes/admin_navigation.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to the CMS
                            <small>signed in as:  
                                <?php 
                                if (empty($_SESSION['username'])) {
                                    echo "";
                                }
                                echo $_SESSION['username']; 


                                ?>
                            </small>
                        </h1>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fas fa-book-open fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                              <div class='huge'>
                                            
        <?php 

            $query = "SELECT * FROM posts";
            $select_all_posts = mysqli_query($con, $query);
            
            // foreach ($select_all_posts as $post) {
            //     $post_count++;
            // }
            $post_count = mysqli_num_rows($select_all_posts);
            echo $post_count;

         ?>                                        </div>
                                                <div>Posts</div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <a href="posts.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                             <div class='huge'>
                                                 
 <?php 

            $query = "SELECT * FROM comments";
            $select_all_comments = mysqli_query($con, $query);
            
            // foreach ($select_all_posts as $post) {
            //     $post_count++;
            // }
            $comments_count = mysqli_num_rows($select_all_comments);
            echo $comments_count;

?>   

                                             </div>
                                              <div>Comments</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="comments.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                            <div class='huge'>
<?php 

            $query = "SELECT * FROM users";
            $select_all_users = mysqli_query($con, $query);

            // foreach ($select_all_posts as $post) {
            //     $post_count++;
            // }
            $users_count = mysqli_num_rows($select_all_users);
            echo $users_count;

?>
                                            </div>
                                                <div> Users</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="users.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-list fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class='huge'>
<?php 

            $query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($con, $query);
            
            // foreach ($select_all_posts as $post) {
            //     $post_count++;
            // }
            $categories_count = mysqli_num_rows($select_all_categories);
            echo $categories_count;

?>
                                                </div>
                                                 <div>Categories</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="categories.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                <!-- /.row -->
                    </div>
                </div>
                    <?php 
                            $query = "SELECT * FROM posts WHERE post_status = 'published'";
                            $select_all_published_posts = mysqli_query($con, $query);
                            
                            // foreach ($select_all_posts as $post) {
                            //     $post_count++;
                            // }
                            $published_count = mysqli_num_rows($select_all_published_posts);




                            $query = "SELECT * FROM posts WHERE post_status = 'draft'";
                            $select_all_draft_posts = mysqli_query($con, $query);
                            
                            // foreach ($select_all_posts as $post) {
                            //     $post_count++;
                            // }
                            $draft_count = mysqli_num_rows($select_all_draft_posts);

                            $query = "SELECT * FROM comments WHERE comment_status = 'unapproved'";
                            $select_all_unapproved_comments = mysqli_query($con, $query);
                            
                            // foreach ($select_all_posts as $post) {
                            //     $post_count++;
                            // }
                            $unapproved_count = mysqli_num_rows($select_all_unapproved_comments);


                            $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
                            $select_all_subscribers = mysqli_query($con, $query);
                            
                            // foreach ($select_all_posts as $post) {
                            //     $post_count++;
                            // }
                            $subscriber_count = mysqli_num_rows($select_all_subscribers);

                           $query = "SELECT * FROM comments";
                            $select_all_comments = mysqli_query($con, $query);
                            
                            // foreach ($select_all_posts as $post) {
                            //     $post_count++;
                            // }
                            $comment_count = mysqli_num_rows($select_all_comments);
                            



                     ?>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);



      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
          <?php 

            $element_text = ['All Posts', 'Active Posts', 'Draft Posts', 'Categories', 'Users', 'Subscribers', 'Comments', 'Unapproved Comments'];
            $element_count = [$post_count, $published_count, $draft_count, $categories_count, $users_count, $subscriber_count, $comment_count, $unapproved_count];

                for($i = 0; $i < 8; $i++) {
                    echo "['{$element_text[$i]}'" . "," . " {$element_count[$i]}],";
                }

           ?>
          // ['Posts', 1000],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <div id="columnchart_material" style="width: 100%;height: 500px;"></div>
                <!-- /.row -->
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>

    


    


        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>