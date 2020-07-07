<?php include 'inc/header.php' ?>

 <h2 class="page-header"><?php echo $single_job->job_title;?> (<?php echo $single_job->location; ?>) </h2>
 <small>Posted By: <?php echo $single_job->contact_user;?> on <?php echo $single_job->post_date; ?></small>
 <hr>
 <p class="lead"><?php echo $single_job->description;?></p>
 <ul class="list-group">
     <li class="list-group-item"><strong>Company: </strong> <?php echo $single_job->company;?></li>
     <li class="list-group-item"><strong>Salary: </strong> <?php echo $single_job->salary;?></li>
     <li class="list-group-item"><strong>Contact Email: </strong> <?php echo $single_job->contact_email;?></li>
 </ul>
 <br><br>
 <a href="index.php">Go Back</a>
 <br><br>

 <div class="well">
     <a href="update.php?id=<?php echo $single_job->id;?>" class="btn btn-primary">Edit</a>
     <form style="display:inline" method="post" action="jobDetails.php" >
        <input type="hidden" name="del_id" value="<?php echo $single_job->id;?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
 </div>

<?php include 'inc/footer.php' ?>