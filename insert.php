<?php
require "connection.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <title>Student Database</title>
</head>

<body>
    <div class="container">
        <h1>Register as a BeCode Student</h1>
        <br>
        <hr>
        <nav>

        </nav>

        <!-- THE FORM -->

        <?php // I MAKE ALL FIELDS REQUIRED BY MAKING THESE EMPRTY STRING VARIABLES 
        $quoteErr = $authorErr = $videoErr = $avatarErr = $githubErr = $linkedinErr = $usernameErr = $emailErr = $firstNameErr = $lastNameErr = $genderErr = $languageErr = "";
        $quote = $author = $video = $avatar = $github = $linkedin = $username = $email = $firstName = $lastName = $gender = $language = "";

        $isFormValid = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = ($_POST["username"]);
            if (empty($username)) {
                $usernameErr = "Username is required";
                $isFormValid = false;
            }

            $email = ($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "A valid email is required";
                $isFormValid = false;
            }

            $firstName = ($_POST["first_name"]);
            if (empty($firstName)) {
                $firstNameErr = "First name is required";
                $isFormValid = false;
            }

            $lastName = ($_POST["last_name"]);
            if (empty($lastName)) {
                $lastNameErr = "Last name number is required";
                $isFormValid = false;
            }

            $gender = ($_POST["gender"]);
            if (empty($gender)) {
                $genderErr = "Gender is required";
                $isFormValid = false;
            }

            $language = ($_POST["language"]);
            if (empty($language)) {
                $languageErr = "Language code is required";
                $isFormValid = false;
            }

            $avatar = ($_POST["avatar"]);
            if (empty($avatar)) {
                $avatarErr = "An avatar link is required";
                $isFormValid = false;
            }
            $quote = ($_POST["quote"]);
            if (empty($quote)) {
                $quoteErr = "A quote is required";
                $isFormValid = false;
            }

            $author = ($_POST["author"]);
            if (empty($author)) {
                $authorErr = "The author of the quote is required";
                $isFormValid = false;
            }

            $video = ($_POST["video"]);
            if (empty($video)) {
                $videorErr = "A video link is required";
                $isFormValid = false;
            }
        }
        ?>



        <!--old display message -->

        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Choose a username:</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?php echo $username ?>" />
                    <?php echo $usernameErr; ?></span>
                    <br><br>
                </div>
                <div></div>
            </div>

            <fieldset>
                <legend>Student Details</legend>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $firstName ?>">
                        <span class="error"> <?php echo $firstNameErr; ?></span>
                        <br><br>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $lastName ?>">
                        <span class="error"> <?php echo $lastNameErr; ?></span>
                        <br><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender:</label><br>
                        <select id="gender" name="gender">
                            <option value="0">--Select Gender--</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="NA">None of the above</option>
                            <option value="None">Prefer not to say</option>
                        </select>

                        <?  // if ($_POST['submit'] && $_POST['submit'] != 0) {
                        // $gender = $_POST['gender'];
                        //} 
                        ?>
                        <br><br>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>">
                        <?php echo $emailErr; ?></span>
                        <br><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="language">Preferred language:</label><br>
                        <select data-placeholder="Choose a Language...">
                            <option value="0">--Select Language--</option>
                            <option value="AF">Afrikanns</option>
                            <option value="SQ">Albanian</option>
                            <option value="AR">Arabic</option>
                            <option value="HY">Armenian</option>
                            <option value="EU">Basque</option>
                            <option value="BN">Bengali</option>
                            <option value="BG">Bulgarian</option>
                            <option value="CA">Catalan</option>
                            <option value="KM">Cambodian</option>
                            <option value="ZH">Chinese (Mandarin)</option>
                            <option value="HR">Croation</option>
                            <option value="CS">Czech</option>
                            <option value="DA">Danish</option>
                            <option value="NL">Dutch</option>
                            <option value="EN">English</option>
                            <option value="ET">Estonian</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finnish</option>
                            <option value="FR">French</option>
                            <option value="KA">Georgian</option>
                            <option value="DE">German</option>
                            <option value="EL">Greek</option>
                            <option value="GU">Gujarati</option>
                            <option value="HE">Hebrew</option>
                            <option value="HI">Hindi</option>
                            <option value="HU">Hungarian</option>
                            <option value="IS">Icelandic</option>
                            <option value="ID">Indonesian</option>
                            <option value="GA">Irish</option>
                            <option value="IT">Italian</option>
                            <option value="JA">Japanese</option>
                            <option value="JW">Javanese</option>
                            <option value="KO">Korean</option>
                            <option value="LA">Latin</option>
                            <option value="LV">Latvian</option>
                            <option value="LT">Lithuanian</option>
                            <option value="MK">Macedonian</option>
                            <option value="MS">Malay</option>
                            <option value="ML">Malayalam</option>
                            <option value="MT">Maltese</option>
                            <option value="MI">Maori</option>
                            <option value="MR">Marathi</option>
                            <option value="MN">Mongolian</option>
                            <option value="NE">Nepali</option>
                            <option value="NO">Norwegian</option>
                            <option value="FA">Persian</option>
                            <option value="PL">Polish</option>
                            <option value="PT">Portuguese</option>
                            <option value="PA">Punjabi</option>
                            <option value="QU">Quechua</option>
                            <option value="RO">Romanian</option>
                            <option value="RU">Russian</option>
                            <option value="SM">Samoan</option>
                            <option value="SR">Serbian</option>
                            <option value="SK">Slovak</option>
                            <option value="SL">Slovenian</option>
                            <option value="ES">Spanish</option>
                            <option value="SW">Swahili</option>
                            <option value="SV">Swedish </option>
                            <option value="TA">Tamil</option>
                            <option value="TT">Tatar</option>
                            <option value="TE">Telugu</option>
                            <option value="TH">Thai</option>
                            <option value="BO">Tibetan</option>
                            <option value="TO">Tonga</option>
                            <option value="TR">Turkish</option>
                            <option value="UK">Ukranian</option>
                            <option value="UR">Urdu</option>
                            <option value="UZ">Uzbek</option>
                            <option value="VI">Vietnamese</option>
                            <option value="CY">Welsh</option>
                            <option value="XH">Xhosa</option>
                        </select>
                        <br><br>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="avatar">Avatar:</label>
                        <input type="text" id="avatar" name="avatar" class="form-control" value="<?php echo $avatar ?>">
                        <?php echo $avatarErr; ?></span>
                        <br><br>
                    </div>
                </div>
    </div>
    </fieldset>
    <br>
    <div class="container">
        <fieldset>
            <legend>Online Presence</legend>

            <p>If you have already begun an online presence in the development field, please provide the urls. <br><br> It is OK to leave these fields blank. </p>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="linkedin">Linkedin:</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="<?php echo $linkedin ?>">
                    <span class="error"> <?php echo $linkedinErr; ?></span>
                    <br><br>
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Github:</label>
                    <input type="text" id="github" name="github" class="form-control" value="<?php echo $github ?>">
                    <span class="error"> <?php echo $githubErr; ?></span>
                    <br><br>
                </div>
            </div>
            <br><br>
        </fieldset>

        <fieldset>
            <legend>Random Info</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quote">Favourite quote:</label>
                    <input type="text" name="quote" id="quote" class="form-control" value="<?php echo $quote ?>">
                    <span class="error"> <?php echo $quoteErr; ?></span>
                    <br><br>
                </div>
                <div class="form-group col-md-6">
                    <label for="author">Quote author:</label>
                    <input type="text" id="author" name="author" class="form-control" value="<?php echo $author ?>">
                    <span class="error"> <?php echo $authorErr; ?></span>
                    <br><br>
                </div>
                <div class="form-group col-md-6">
                    <label for="video">Favourite video:</label>
                    <input type="text" id="video" name="video" class="form-control" value="<?php echo $video ?>">
                    <span class="error"> <?php echo $videoErr; ?></span>
                    <br><br>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    <br><br>

    </div>
    <br>
    <br>
    <br>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($isFormValid) {
    ?> <h1 style="color:green">Thanks for registering!</h1> <?php
                                                        } else {
                                                            ?> <h1 style="color:red">Please fix the errors</h1> <?php
                                                                                                            }
                                                                                                        }
                                                                                                                ?>



    <style>
        footer {
            text-align: center;
        }
    </style>
</body>

</html>