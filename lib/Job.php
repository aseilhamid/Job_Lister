<?php
    class Job{
        private $db;
        public function __construct()
        {
            $this->db = new Database;
            $this->db->connect();
        }


        // get all jobs
        public function getAllJobs(){
            $this->db->query("SELECT * FROM jobs");
            $results = $this->db->resultSet();
            return $results;
        }

        //get all categories
        public function getAllCategories(){
            $this->db->query("SELECT * FROM categories");
            $results = $this->db->resultSet();
            return $results;
        }

        //get by category
        public function getByCategory($category){
            $this->db->query("SELECT * FROM jobs WHERE category_id = $category");
            $results = $this->db->resultSet();
            return $results;
        }

        //get category
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = $category_id");
            $row = $this->db->single();
            return $row;
        }

        //get job
        public function getJob($job_id){
            $this->db->query("SELECT * FROM jobs WHERE id = $job_id");
            $row = $this->db->single();
            return $row;
        }

        //create job
        public function create($data){
            $this->db->query("INSERT INTO jobs (category_id, company, job_title, description, salary, location, contact_user, contact_email)
                                 VALUES (:category_id, :company, :job_title, :description, :salary, :location, :contact_user, :contact_email)");
            
            // Bind Data
            $this->db->bind(':category_id',$data['category_id']);
            $this->db->bind(':company',$data['company']);
            $this->db->bind(':job_title',$data['job_title']);
            $this->db->bind(':description',$data['description']);
            $this->db->bind(':salary',$data['salary']);
            $this->db->bind(':location',$data['location']);
            $this->db->bind(':contact_user',$data['contact_user']);
            $this->db->bind(':contact_email',$data['contact_email']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        // Delete job
        public function delete($id){
            $this->db->query("DELETE FROM jobs WHERE id = $id");

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        // Update job
        public function update($id,$data){
            
            $this->db->query("UPDATE jobs SET
                            category_id = :category_id,
                            job_title = :job_title,
                            company = :company,
                            description = :description,
                            location = :location,
                            salary = :salary,
                            contact_user = :contact_user,
                            contact_email = :contact_email
                            WHERE id = $id");
            // Bind Data
            $this->db->bind(':category_id',$data['category_id']);
            $this->db->bind(':company',$data['company']);
            $this->db->bind(':job_title',$data['job_title']);
            $this->db->bind(':description',$data['description']);
            $this->db->bind(':salary',$data['salary']);
            $this->db->bind(':location',$data['location']);
            $this->db->bind(':contact_user',$data['contact_user']);
            $this->db->bind(':contact_email',$data['contact_email']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }