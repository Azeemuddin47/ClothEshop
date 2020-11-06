<script type="text/javascript">
    $(document.).ready(function () {
        $("#register").click(function () {
            fname = $("#fname").val();
            lname = $("#lname").val();
            email = $("#email").val();
            password = $("#password").val();

            $ajax({
                type: "POST",
                url: "adduser.php",
                data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password" + password,
                success: function(html) {
                    if (html == "true") {
                        $("#add_error2").html("Success");
                        window.location.href = "index.php";
                    } else if (html == "false") {
                        ("#add_error2").html("Already Exists.")
                    } else {
                        $("#add_error2").html("Some Problem");
                    }
                }
            },
            beforeSend: function() {
                $("#add_error2").html("loading..");
            }
        });
        return false;
    });
});
</script>