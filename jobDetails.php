<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
$template = new Template('templates/single_job.php');

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php','Job is Deleted','success');
    }else {
        redirect('index.php','Job isnot Deleted','failed');
    }
}

$job_id = isset($_GET['id']) ? $_GET['id'] : null;
$template->single_job = $job->getJob($job_id);

echo $template;