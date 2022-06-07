<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Caesar Cipher</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3> Masukan data enkripsi</h3>
                    </div>
                    <div class="card-body pb-3">
                        <form action="enkripsi.php" method="post">
                            <div class="form-group mb-3">
                                <label for="plaint-text">Plaint text</label>
                                <input type="text" class="form-control" name="plaintext">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Key">Key</label>
                                <select name="key" id="Key" class="form-control">
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">H</option>
                                    <option value="9">I</option>
                                    <option value="10">J</option>
                                    <option value="11">K</option>
                                    <option value="12">L</option>
                                    <option value="13">M</option>
                                    <option value="14">N</option>
                                    <option value="15">O</option>
                                    <option value="16">P</option>
                                    <option value="17">Q</option>
                                    <option value="18">R</option>
                                    <option value="19">S</option>
                                    <option value="20">T</option>
                                    <option value="21">U</option>
                                    <option value="22">V</option>
                                    <option value="23">W</option>
                                    <option value="24">X</option>
                                    <option value="25">Y</option>
                                    <option value="26">Z</option>
                                </select>
                            </div>
                            <div class="form-group d-flex flex-row">
                                <button class="btn btn-primary me-2" type="submit" name="submit" value="Submit">Submit</button>
                                <a class="btn btn-warning" onclick="window.location.href='/kriptografi-UBSI'">Home</a>
                            </div>
                        </form>
                    </div>

                    <?php
                    // generate all input
                    // operation only alphabet
                    // dont change space when generate
                    if (isset($_POST['submit'])) {
                        $plaintext = $_POST['plaintext'];
                        $key = $_POST['key'];
                        $plaintext = strtoupper($plaintext);
                        $key = (int)$key;
                        $ciphertext = "";
                        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $alphabet_length = strlen($alphabet);
                        for ($i = 0; $i < strlen($plaintext); $i++) {
                            $char = substr($plaintext, $i, 1);
                            if (strpos($alphabet, $char) !== false) {
                                $index = strpos($alphabet, $char);
                                $index = ($index + $key) % $alphabet_length;
                                $ciphertext = $ciphertext . $alphabet[$index];
                            } else {
                                $ciphertext = $ciphertext . $char;
                            }
                        }
                    }
                    //show result when user click submit
                    if (isset($_POST['submit'])) {

                        echo "<div class='alert alert-info'><b>Ciphertext: $ciphertext</b></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>