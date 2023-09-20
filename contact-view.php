<html>
<head>
<title>PHP Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="Name"
                    id="Name" />
            </div>
            <div class="input-row">
                <label>Contact</label> <span id="userContact-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="contact" id="contact" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="email-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="email" id="email" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var Name = $("#Name").val();
            var contact = $("#contact").val();
            var email = $("#email").val();
            var message = $("#message").val();
            
            if (Name == "") {
                $("#Name-info").html("Required.");
                $("#Name").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (contact == "") {
                $("#userContact-info").html("Required.");
                $("#contact").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (email == "") {
                $("#email-info").html("Required.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email-info").html("Invalid Email Address.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (message == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>