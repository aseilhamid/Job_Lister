<?php include 'inc/header.php' ?>
<h2 class="page-header">Create Job Listing</h2>

<form method="post" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>">
                    <?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="Salary">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contact_user">
    </div>

    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contact_email">
    </div>
    
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>



<?php include 'inc/footer.php' ?>