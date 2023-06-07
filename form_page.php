<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="margin-right:auto;margin-left:auto;width:500px;text-align:center;">
            <form id="addition_form">
                <h3>Add Numbers</h3>   
                <input type="number" name="number_1_input" placeholder="Number 1"><br><br> 
                <input type="number" name="number_2_input" placeholder="Number 2"><br><br> 
                <button type="submit">ADD</button><br><br>
                <div id="response_div">Response Will Come Here</div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script>
            /////////////////////////////////// Form ajax submission code below ////////////////////////////////////
            $('#addition_form').on('submit', function() {
                var formData = new FormData(this);
                var headers_obj = {"Authorization":"Bearer <?php echo '1234567890' /*@$_COOKIE['jwt_token_website'];*/ ?>"};
                $.ajax({
                    url: "api.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers:headers_obj,
                    success: function(data) {
                        console.log(data);
                        if (data.response == 'success') {
                            document.getElementById('response_div').innerHTML=data.addition;
                        }
                        if (data.response == 'failure') {
                            // write code for failure condition
                        }
                    },
                    error: function() {
                        alert('Some Error Occured.');
                    }
                });
                return false;
            });
            /////////////////////////////////// Form ajax submission code below ////////////////////////////////////   
        </script>
    </body>
</html>
