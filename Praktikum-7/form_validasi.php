<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red;"></span>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" style="color: red;"></span>
        <br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color: red;"></span>
        <br><br>

        <input type="submit" value="Submit">
        <span id="form-success" style="color: green;"></span>
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event){
                event.preventDefault(); 

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi form
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                } else if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", 
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email
                        },
                        success: function(response) {
                            $("#form-success").text("Form berhasil dikirim!");
                            console.log("Response dari server: " + response);
                        },
                        error: function() {
                            $("#form-success").text("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
