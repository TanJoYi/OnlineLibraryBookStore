                                <?php
                                session_start();
                                if($_SERVER["REQUEST_METHOD"] == "POST") {
                                $conn = new mysqli ('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");
                                $email = mysqli_real_escape_string($conn,$_POST['email']);
                                $password = mysqli_real_escape_string($conn,$_POST['password']); 
                                $sql="SELECT userID FROM user_information WHERE email = '$email' and password = '$password'";
                                $result=mysqli_query($conn,$sql);
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
                                }
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                $count = mysqli_num_rows($result);
                                if ($count==1) {
                                    $_SESSION['email'] = $email;
                                    $_SESSION['password'] = $password;
                                    header("Location: http://localhost/OnlineLibraryBookStore/homepage.php");
                                } else {
                                    echo $count;
                                    header("Location: http://localhost/OnlineLibraryBookStore/signin.php");
                                }
                            }
                                ?>