                                <?php
                                session_start();
                                $conn = new mysqli ('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");
                                $bookID = mysqli_real_escape_string($conn,$_POST['bookID']);
                                $author = mysqli_real_escape_string($conn,$_POST['author']); 
                                $YOB = mysqli_real_escape_string($conn,$_POST['YOB']); 
                                $description = mysqli_real_escape_string($conn,$_POST['description']); 
                               $category = mysqli_real_escape_string($conn,$_POST['category']); 
                                $sql="INSERT INTO book (title,author,yearOfPublishing,description,category) VALUES ('$title','$author','$YOB','$description','$category')";
                               $result=mysqli_query($conn,$sql);
                                if (!$result) {
                                    printf("Error: %s\n", mysqli_error($conn));
                                    exit();
								}
                                    header("Location: http://localhost/OnlineLibraryBookStore/homepage.php");
                               //initialize sql
							   //store row
							   //store borrowed book
                            
                                ?>