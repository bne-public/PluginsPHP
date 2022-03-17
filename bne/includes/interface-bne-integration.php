<?php

// Declares the interface to integrate with other systems
interface I_Job_Integration
{
    /**
    * Gets the job posts in bne database
    *
    * @since    1.0.0
    * @param int $id Job Id
    * @return Job_Post
    */
    public function GetJob($id);

    /**
    * Gets the job posts in database
    *
    * @since    1.0.0
    * @param      string    $query              The query.
    * @param      int       $page               The page to be retrieved (first page = 1)
    * @param      int       $results_per_page   The number of records per page
    */
    public function GetJobs($query, $page, $results_per_page);

    /**
    * Apply to job
    *
    * @since    1.0.0
    * @param int $id Job Id
    * @return bool  True if the apply occured successfully
    */
    public function ApplyToJob($id);

    /**
    * Gets the cv of the logged in user
    *
    * @since    1.0.0
    * @return Job_Post
    */
    public function GetLoggedInCV();

    /**
    * Saves the cv.
    *
    * @since    1.0.0
    * @return   bool
    */
    public function SaveRegisterCV();

    /**
    * Returns a string with the register cv fields
    *
    * @since    1.0.0
    */
    public function GetRegisterCvFields();

    /**
    * Returns a string with the login fields
    *
    * @since    1.0.0
    */
    public function GetLoginFields();

    /**
    * Check if the current user is logged in for the integration
    *
    * @since    1.0.0
    * @return   bool    True, if the user is logged in.
    */
    public function IsLoggedIn();

    /**
    * Log in
    *
    * @since    1.0.0
    * @param    string[]    $errors     A list with errors, if ocurred.
    * @return   string      Cv identifier
    */
    public function Login(&$errors);
}