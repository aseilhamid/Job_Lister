<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
    //create data array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['salary'] = $_POST['Salary'];
    $data['location'] = $_POST['location'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->create($data)){
        redirect('index.php','Your job has been listed','success');
    }else{
        redirect('index.php','something went wrong','error');
    }
}


$template = new Template('templates/job_create.php');
$template->categories = $job->getAllCategories();



echo $template;