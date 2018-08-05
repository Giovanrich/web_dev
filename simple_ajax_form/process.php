<?php
	$errors = array(); //To store errors
    $form_data = array(); //Pass back the data to `form.php`
    
    
    /* Validate the form on server side */
    if (empty($_POST['name'])) { //Name cannot be empty
        $errors['name'] = 'Name cannot be blank';
    }
    
    if (!empty($errors)) { //If errors in validation
    	$form_data['success'] = false;
    	$form_data['errors']  = $errors;
    } else { //If not, process the form, and return true on success
    	$form_data['success'] = true;
    	$form_data['posted'] = 'Data Was Posted Successfully';
    }

    //Return the data back to form.php
    echo json_encode($form_data);