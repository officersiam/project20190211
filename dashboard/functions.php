<?php
	session_start();
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	// connect to database
	$db = mysqli_connect('localhost', 'uniqbdro_adill', 'adil42434', 'uniqbdro_uniquersaim');

	// variable declaration
	$username = "";
	$phone    = "";
	$errors   = array();

    // call the ordersfull() function if register_btn is clicked
    if (isset($_POST['ordersfull'])) {
        ordersfull();
    }

    // ordersfull
    function ordersfull(){
        global $db, $errors;

        // receive all input values from the form
        $file = $_FILES['file']['name'];
        $target = "../delivery/file/".basename($file);
        $id =  e($_POST['id']);
        $page =  e($_POST['page']);
        $name =  e($_POST['name']);
        $phone =  e($_POST['phone']);
        $email =  e($_POST['email']);
        $address =  e($_POST['address']);
        $link =  e($_POST['link']);
        $product =  e($_POST['product']);
        $method =  e($_POST['method']);
        $transcode =  e($_POST['transcode']);
        $status =  e($_POST['status']);
        $comment =  e($_POST['comment']);

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($address)) {
            array_push($errors, "Address is required");
        }
        if (empty($product)) {
            array_push($errors, "Select Any of Your Choicable Product is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "UPDATE orders SET page='$page', name='$name', phone='$phone', email='$email', address='$address', link='$link', product='$product', method='$method', transcode='$transcode', status='$status', file='$file', comment='$comment'
                          WHERE id='$id' ";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            echo "File Submited Successfully.";
        }else{
            echo "Failed to upload File.";
            }

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the topup() function if register_btn is clicked
    if (isset($_POST['topup'])) {
        topup();
    }

    // topup
    function topup(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $method =  e($_POST['method']);
        $price =  e($_POST['price']);
        $transcode =  e($_POST['transcode']);
        $date = date('Y-m-d H:i:sa');


        $sql = "INSERT INTO topup (name, method, price, transcode, status, date)
                          VALUES('$name', '$method', '$price', '$transcode', 'pending', '$date')";
        mysqli_query($db, $sql);

    }

    // call the products() function if sitesetting is clicked
    if (isset($_POST['products'])) {
        products();
    }

    // products
    function products(){
        global $db, $errors;

        // receive all input values from the form
        $img = $_FILES['img']['name'];
        $target = "../img/products/".basename($img);
        $seo_title =  e($_POST['seo_title']);
        $seo_keyword =  e($_POST['seo_keyword']);
        $seo_discription =  e($_POST['seo_discription']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $price =  e($_POST['price']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO products (img, name, price, seo_title, seo_discription, seo_keyword, details, date)
                          VALUES('$img', '$name', '$price', '$seo_title', '$seo_discription', '$seo_keyword', '$details', '$date')";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the orderproduct() function if register_btn is clicked
    if (isset($_POST['orderproduct'])) {
        orderproduct();
    }

    // orderproduct
    function orderproduct(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $phone =  e($_POST['phone']);
        $email =  e($_POST['email']);
        $address =  e($_POST['address']);
        $product =  e($_POST['product']);
        $method =  e($_POST['method']);
        $transcode =  e($_POST['transcode']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($address)) {
            array_push($errors, "Address is required");
        }
        if (empty($product)) {
            array_push($errors, "Select Any of Your Choicable Product is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO orders (page, name, phone, email, address, product, method, transcode, status, date)
                          VALUES('product', '$phone', '$email', '$address', '$product', '$method', '$transcode', 'pending', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the contactseo() function if sitesetting is clicked
    if (isset($_POST['contactseo'])) {
        contactseo();
    }

    // site setting
    function contactseo(){
        global $db, $errors;

        // receive all input values from the form
        $seo_title =  e($_POST['seo_title']);
        $seo_discription =  e($_POST['seo_discription']);
        $seo_keyword =  e($_POST['seo_keyword']);
        $date = date('Y-m-d H:i:sa');


        $sql = "UPDATE contact SET seo_title='$seo_title', seo_discription='$seo_discription', seo_keyword='$seo_keyword', date='$date'";
        mysqli_query($db, $sql);

    }

    // call the page() function if sitesetting is clicked
    if (isset($_POST['pages'])) {
        pages();
    }

    // site setting
    function pages(){
        global $db, $errors;

        // receive all input values from the form
        $page =  e($_POST['page']);
        $title =  e($_POST['title']);
        $seo_title =  e($_POST['seo_title']);
        $seo_discription =  e($_POST['seo_discription']);
        $seo_keyword =  e($_POST['seo_discription']);
        $discription =  e($_POST['discription']);
        $date = date('Y-m-d H:i:sa');


        $sql = "INSERT INTO page (page, title, seo_title, seo_discription, seo_keyword, discription, date)
                          VALUES('$page', '$title', '$seo_title', '$seo_discription', '$seo_keyword', '$discription', '$date')";
        mysqli_query($db, $sql);

    }

    // call the trust() function if sitesetting is clicked
    if (isset($_POST['trust'])) {
        trust();
    }

    // site setting
    function trust(){
        global $db, $errors;

        // receive all input values from the form
        $img = $_FILES['img']['name'];
        $target = "../img/trust/".basename($img);
        $date = date('Y-m-d H:i:sa');


        $sql = "INSERT INTO trust (img, date)
                          VALUES('$img', '$date')";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

    }

    // call the mail() function if sitesetting is clicked
    if (isset($_POST['contact'])) {
        contact();
    }

    // contact
    function contact(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $email =  e($_POST['email']);
        $phone =  e($_POST['phone']);
        $subject =  e($_POST['subject']);
        $message =  e($_POST['message']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($subject)) {
            array_push($errors, "Subject is required");
        }
        if (empty($message)) {
            array_push($errors, "Message is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO mail (name, email, phone, subject, message, date)
                          VALUES('$name', '$email', '$phone', '$subject', '$message', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

	// call the about() function if sitesetting is clicked
	if (isset($_POST['about'])) {
		about();
	}

    // site setting
    function about(){
        global $db, $errors;

        // receive all input values from the form
        $aboutimg = $_FILES['aboutimg']['name'];
        $target = "../img/about/".basename($aboutimg);
        $abouttitle =  e($_POST['abouttitle']);
        $aboutdiscription =  e($_POST['aboutdiscription']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($abouttitle)) {
            array_push($errors, "About Title is required");
        }
        if (empty($aboutdiscription)) {
            array_push($errors, "About Discription is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "UPDATE about  SET aboutimg='$aboutimg', abouttitle='$abouttitle', aboutdiscription='$aboutdiscription', date='$date'";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['aboutimg']['tmp_name'], $target)) {
            echo "About Image Submited Successfully.";
        }else{
            echo "Failed to upload About Image.";
            }

        }else {
                array_push($errors, "Wrong combination");
            }

    }

	// call the slider() function if sitesetting is clicked
	if (isset($_POST['slider'])) {
		slider();
	}

    // slider
    function slider(){
        global $db, $errors;

        // receive all input values from the form
        $sliderimg = $_FILES['sliderimg']['name'];
        $target = "../img/banner/".basename($sliderimg);
        $slidertitle =  e($_POST['slidertitle']);
        $sliderdiscription =  e($_POST['sliderdiscription']);
        $sliderlink =  e($_POST['sliderlink']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($slidertitle)) {
            array_push($errors, "Slider Title is required");
        }
        if (empty($sliderdiscription)) {
            array_push($errors, "Slider Discription is required");
        }
        if (empty($sliderlink)) {
            array_push($errors, "Slider Link is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO slider (sliderimg, slidertitle, sliderdiscription, sliderlink, date)
                          VALUES('$sliderimg', '$slidertitle', '$sliderdiscription', '$sliderlink', '$date')";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['sliderimg']['tmp_name'], $target)) {
            echo "Slider Image Submited Successfully.";
        }else{
            echo "Failed to upload Slider Image.";
            }

        }else {
                array_push($errors, "Wrong combination");
            }

    }

	// call the sitesetting() function if sitesetting is clicked
	if (isset($_POST['sitesetting'])) {
		sitesetting();
	}

    // site setting
    function sitesetting(){
        global $db, $errors;

        // receive all input values from the form
        $sitename =  e($_POST['sitename']);
        $sitetitle =  e($_POST['sitetitle']);
        $sitelogo = $_FILES['sitelogo']['name'];
        $target1 = "../img/".basename($sitelogo);
        $siteicon = $_FILES['siteicon']['name'];
        $target2 = "../img/".basename($siteicon);
        $seo_discription =  e($_POST['seo_discription']);
        $seo_keyword =  e($_POST['seo_keyword']);
        $facebook =  e($_POST['facebook']);
        $twitter =  e($_POST['twitter']);
        $googleplus =  e($_POST['googleplus']);
        $instagram =  e($_POST['instagram']);
        $youtube =  e($_POST['youtube']);
        $date = date('Y-m-d H:i:sa');


        $sql = "UPDATE sitesetting  SET sitename='$sitename', sitetitle='$sitetitle', sitelogo='$sitelogo', siteicon='$siteicon', seo_discription='$seo_discription', seo_keyword='$seo_keyword', facebook='$facebook', twitter='$twitter', googleplus='$googleplus', instagram='$instagram', youtube='$youtube', date='$date'";
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['sitelogo']['tmp_name'], $target1)) {
            echo "Site Logo Submited Successfully.";
        }else{
            echo "Failed to upload Site Logo.";
            }

        if (move_uploaded_file($_FILES['siteicon']['tmp_name'], $target2)) {
            echo "Site Icon Submited Successfully.";
        }else{
            echo "Failed to upload Site Icon.";
            }

    }

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

    // REGISTER USER
    function register(){
        global $db, $errors;

        // receive all input values from the form
        $username    =  e($_POST['username']);
        $phone       =  e($_POST['phone']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);
        $user_type  =  e($_POST['user_type']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database

            if (isset($_POST['user_type'])) {
                $user_type = e($_POST['user_type']);
                $query = "INSERT INTO users (username, phone, user_type, password,date)
                          VALUES('$username', '$phone', '$user_type', '$password', '$date')";
                mysqli_query($db, $query);
                $_SESSION['success']  = "New user successfully created!!";
                header('location: home.php');
            }else{
                $query = "INSERT INTO users (username, phone, user_type, password,date)
                          VALUES('$username', '$phone', 'user', '$password', '$date')";
                mysqli_query($db, $query);

                // get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
                $_SESSION['success']  = "You are now logged in";
                header('location: index.php');
            }

        }else {
                array_push($errors, "Wrong combination");
            }

    }

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

    // LOGIN USER
    function login(){
        global $db, $username, $errors;

        // grap form values
        $username = e($_POST['username']);
        $password = e($_POST['password']);

        // make sure form is filled properly
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        // attempt login if no errors on form
        if (count($errors) == 0) {
            $password = md5($password);

            $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) { // user found
                // check if user is admin or user
                $logged_in_user = mysqli_fetch_assoc($results);
                if ($logged_in_user['user_type'] == 'admin') {

                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
                    header('location: index.php');
                }else{
                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";

                    header('location: index.php');
                }
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

	/*if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}*/

    // call the service() function if register_btn is clicked
    if (isset($_POST['service'])) {
        service();
    }

    // service
    function service(){
        global $db, $errors;

        // receive all input values from the form
        $title =  e($_POST['title']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $seo_title =  e($_POST['seo_title']);
        $seo_discription =  e($_POST['seo_discription']);
        $seo_keyword =  e($_POST['seo_keyword']);
        $discription =  e($_POST['discription']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Service Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Service Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO services (title, name, details, seo_title, seo_discription, seo_keyword, discription, date) VALUES('$title', '$name', '$details', '$seo_title', '$seo_discription', '$seo_keyword', '$discription', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the orderdetails() function if register_btn is clicked
    if (isset($_POST['orderdetails'])) {
        orderdetails();
    }

    // orderdetails
    function orderdetails(){
        global $db, $errors;

        // receive all input values from the form
        $page =  e($_POST['page']);
        $title =  e($_POST['title']);
        $discription =  e($_POST['discription']);
        $seo_title =  e($_POST['seo_title']);
        $seo_discription =  e($_POST['seo_discription']);
        $seo_keyword =  e($_POST['seo_keyword']);
        $date = date('Y-m-d H:i:sa');


        $sql = "INSERT INTO orderdetails (page, title, discription, seo_title, seo_discription, seo_keyword, date) VALUES('$page', '$title', '$discription', '$seo_title', '$seo_discription', '$seo_keyword', '$date')";
        mysqli_query($db, $sql);

    }

    // call the tlike_products() function if register_btn is clicked
    if (isset($_POST['payment'])) {
        payment();
    }

    // payment
    function payment(){
        global $db, $errors;

        // receive all input values from the form
        $payimg = $_FILES['payimg']['name'];
        $target = "../img/payment/".basename($payimg);
        $method =  e($_POST['method']);
        $details =  e($_POST['details']);
        $address =  e($_POST['address']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($method)) {
            array_push($errors, "Paymen Method Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO payment (img, method, details, address, date)
                          VALUES('$payimg', '$method', '$details', '$address', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }


        if (move_uploaded_file($_FILES['payimg']['tmp_name'], $target)) {
            echo "Image Submited Successfully.";
        }else{
            echo "Failed to upload Image.";
            }

    }

    // call the twitter() function if register_btn is clicked
    if (isset($_POST['twitter'])) {
        twitter();
    }

    // twitter
    function twitter(){
        global $db, $errors;

        // receive all input values from the form
        $title =  e($_POST['title']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Twitter Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Twitter Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO twitter (title, name, details, date) VALUES('$title', '$name', '$details', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the facebook() function if register_btn is clicked
    if (isset($_POST['facebook'])) {
        facebook();
    }

    // facebook
    function facebook(){
        global $db, $errors;

        // receive all input values from the form
        $title =  e($_POST['title']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Facebook Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Facebook Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO facebook (title, name, details, date) VALUES('$title', '$name', '$details', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the instagram() function if register_btn is clicked
    if (isset($_POST['instagram'])) {
        instagram();
    }

    // instagram
    function instagram(){
        global $db, $errors;

        // receive all input values from the form
        $title =  e($_POST['title']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Instagram Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Instagram Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO instagram (title, name, details, date) VALUES('$title', '$name', '$details', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the youtube() function if register_btn is clicked
    if (isset($_POST['youtube'])) {
        youtube();
    }

    // youtube
    function youtube(){
        global $db, $errors;

        // receive all input values from the form
        $title =  e($_POST['title']);
        $name =  e($_POST['name']);
        $details =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Youtube Name is required");
        }
        if (empty($details)) {
            array_push($errors, "Youtube Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO youtube (title, name, details, date) VALUES('$title', '$name', '$details', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the twitterlike() function if register_btn is clicked
    if (isset($_POST['twitterlike'])) {
        twitterlike();
    }

    // twitterlike
    function twitterlike(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO twitterlike (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the twitterretweet() function if register_btn is clicked
    if (isset($_POST['twitterretweet'])) {
        twitterretweet();
    }

    // twitterretweet
    function twitterretweet(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO twitterretweet (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the twittertweet() function if register_btn is clicked
    if (isset($_POST['twittertweet'])) {
        twittertweet();
    }

    // twittertweet
    function twittertweet(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO twittertweet (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the twitterfollow() function if register_btn is clicked
    if (isset($_POST['twitterfollow'])) {
        twitterfollow();
    }

    // twitterfollow
    function twitterfollow(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO twitterfollow (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the facebookpagelike() function if register_btn is clicked
    if (isset($_POST['facebookpagelike'])) {
        facebookpagelike();
    }

    // facebookpagelike
    function facebookpagelike(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO facebookpagelike (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the facebookpostlike() function if register_btn is clicked
    if (isset($_POST['facebookpostlike'])) {
        facebookpostlike();
    }

    // facebookpostlike
    function facebookpostlike(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO facebookpostlike (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the facebookshare() function if register_btn is clicked
    if (isset($_POST['facebookshare'])) {
        facebookshare();
    }

    // facebookshare
    function facebookshare(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO facebookshare (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the facebookfollow() function if register_btn is clicked
    if (isset($_POST['facebookfollow'])) {
        facebookfollow();
    }

    // facebookfollow
    function facebookfollow(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO facebookfollow (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the instagramcomment() function if register_btn is clicked
    if (isset($_POST['instagramcomment'])) {
        instagramcomment();
    }

    // instagramcomment
    function instagramcomment(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO instagramcomment (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the instagramlike() function if register_btn is clicked
    if (isset($_POST['instagramlike'])) {
        instagramlike();
    }

    // instagramlike
    function instagramlike(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO instagramlike (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the instagramshare() function if register_btn is clicked
    if (isset($_POST['instagramshare'])) {
        instagramshare();
    }

    // instagramshare
    function instagramshare(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO instagramshare (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the instagramfollow() function if register_btn is clicked
    if (isset($_POST['instagramfollow'])) {
        instagramfollow();
    }

    // instagramfollow
    function instagramfollow(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO instagramfollow (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the youtubecomment() function if register_btn is clicked
    if (isset($_POST['youtubecomment'])) {
        youtubecomment();
    }

    // youtubecomment
    function youtubecomment(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO youtubecomment (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the youtubelike() function if register_btn is clicked
    if (isset($_POST['youtubelike'])) {
        youtubelike();
    }

    // youtubelike
    function youtubelike(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO youtubelike (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the youtubeshare() function if register_btn is clicked
    if (isset($_POST['youtubeshare'])) {
        youtubeshare();
    }

    // youtubeshare
    function youtubeshare(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO youtubeshare (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the youtubesubscribe() function if register_btn is clicked
    if (isset($_POST['youtubesubscribe'])) {
        youtubesubscribe();
    }

    // youtubesubscribe
    function youtubesubscribe(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $date = date('Y-m-d');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO youtubesubscribe (name, amount, date)
                          VALUES('$name', '$amount', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the orderservice() function if register_btn is clicked
    if (isset($_POST['orderservice'])) {
        orderservice();
    }

    // orderservice
    function orderservice(){
        global $db, $errors;

        // receive all input values from the form
        $name =  e($_POST['name']);
        $phone =  e($_POST['phone']);
        $email =  e($_POST['email']);
        $address =  e($_POST['address']);
        $link =  e($_POST['link']);
        $product =  e($_POST['product']);
        $method =  e($_POST['method']);
        $transcode =  e($_POST['transcode']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($phone)) {
            array_push($errors, "Phone Number is required");
        }
        if (empty($address)) {
            array_push($errors, "Address is required");
        }
        if (empty($product)) {
            array_push($errors, "Select Any of Your Choicable Product is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO orders (page, name, phone, email, address, link, product, method, transcode, status, date)
                          VALUES('service', '$name', '$phone', '$email', '$address', '$link', '$product', '$method', '$transcode', 'pending', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

    // call the pricing() function if register_btn is clicked
    if (isset($_POST['pricing'])) {
        pricing();
    }

    // pricing
    function pricing(){
        global $db, $errors;

        // receive all input values from the form
        $class =  e($_POST['class']);
        $name =  e($_POST['name']);
        $amount =  e($_POST['amount']);
        $details =  e($_POST['details']);
        $date = date('Y-m-d H:i:sa');

        // form validation: ensure that the form is correctly filled
        if (empty($class)) {
            array_push($errors, "Class is required");
        }
        if (empty($name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($amount)) {
            array_push($errors, "Amount is required");
        }
        if (empty($details)) {
            array_push($errors, "Details is required");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {


        $sql = "INSERT INTO pricing (class, title, name, amount, details, date)
                          VALUES('$class', '$name', '$name', '$amount', '$details', '$date')";
        mysqli_query($db, $sql);

        }else {
                array_push($errors, "Wrong combination");
            }

    }

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

    function er($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>