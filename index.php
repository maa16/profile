<!DOCTYPE html>
<?php
    require "show-data.php";
    require "update-data.php";
?>
<html>
    <head>
        <title>My Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- buat menu  -->
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li> <a href="#"> HOME</a> </li>
                <li> <a href="#"> PRODUCT</a></li>
                <li> <a href="#"> GALLERY</a></li>
                <li> <a href="#"> BLOG</a></li>
                <li> <a href="#"> MY INVENTORY</a></li>
            </ul>
        </nav>

        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url('pp.png');"> 
                </div> 
            </div>
            <div class="description">
                <h1 id="pName"> <?php echo $nama; ?> </h1>
                <p id="pRole"><?php echo $role; ?></p>
                <a href="#" class="button bg-blue" onclick="editForm()">Edit</a>
                <a href="#" class="button border-green">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability :</p>
                    <p id="pAvailable" class="text-gray"><?php echo $availability; ?></p>
                </div>
                <div class="data">
                    <p class="field">Age :</p>
                    <p id="pAge" class="text-gray"><?php echo $age; ?></p>
                </div>
                <div class="data">
                    <p class=field>Location :</p>
                    <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
                </div>
                <div class="data">
                    <p class=field>Years Experience :</p>
                    <p id="pExperience" class="text-gray"><?php echo $experience; ?></p>
                </div>
                <div class="data">
                    <p class=field>Email :</p>
                    <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
                </div>
            </div>
        </section>
        
        <section id="input-form">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form">
                    <label>Id User</label>
                    <input type="number" id="inpId" name="id" value="<?php echo $id;?>">
                </div>
                <div class="form">
                    <label>Name</label>
                    <input type="text" id="inpName" name="name" placeholder="masukkan nama anda">
                </div>
                <div class="form">
                     <label>Role</label>
                     <input type="text" id="inpRole" name="role"> 
                </div>
                <div class="form">
                     <label>Availability</label>
                     <input type="text" id="inpAvailability" name="availability">
                </div>
                <div class="form">
                     <label for="Age">Age</label>
                     <input type="number" id="inpUsia" name="age"> 
                </div>
                <div class="form">
                     <label>Location</label>
                     <input type="text" id="inpLokasi" name="location">
                </div>
                <div class="form">
                     <label>Years of Experience</label>
                     <input type="number" id="inpYears" name="years_experience">
                </div>
                <div class="form">
                     <label>Email</label>
                     <input type="email" id="inpEmail" name="email">
                </div>
                <div class="form">
                     <input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-green">
                </div>
                
            </form>
        </section>
        <script>

            var formMenu = document.getElementById("input-form");
            formMenu.style.display="none"

            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                }else{
                    formMenu.style.display = "none";
                }
            }


            var name = document.getElementById("pName").innerHTML;
            var role = document.getElementById("pRole").innerHTML;
            var available = document.getElementById("pAvailable").innerHTML;
            var usia = document.getElementById("pAge").innerHTML;
            var lokasi = document.getElementById("pLocation").innerHTML;
            var experience= document.getElementById("pExperience").innerHTML;
            var email = document.getElementById("pEmail").innerHTML;


            document.getElementById("inpRole").value=role;
            document.getElementById("inpName").value=name;
            document.getElementById("inpAvailability").value=available;
            document.getElementById("inpUsia").value=usia;
            document.getElementById("inpLokasi").value=lokasi;
            document.getElementById("inpYears").value=experience;
            document.getElementById("inpEmail").value=email;

            // function simpanForm(){
            //     formMenu.style.display = "none";

            //     var name = document.getElementById("inpName").value;
            //     var role = document.getElementById("inpRole").value;
            //     var available = document.getElementById("inpAvailability").value;
            //     var usia = document.getElementById("inpUsia").value;
            //     var lokasi = document.getElementById("inpLokasi").value;
            //     var experience = document.getElementById("inpYears").value;
            //     var email = document.getElementById("inpEmail").value;

            //     document.getElementById("pName").innerHTML=name;
            //     document.getElementById("pRole").innerHTML=role;
            //     document.getElementById("pAvailable").innerHTML=available;
            //     document.getElementById("pAge").innerHTML=usia;
            //     document.getElementById("pLocation").innerHTML=lokasi;
            //     document.getElementById("pExperience").innerHTML=experience;
            //     document.getElementById("pEmail").innerHTML=email;
            // }
            
            function showMenu()
            {
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    menu.style.display = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.display = "125px";
                }
            }
        </script>
    </body>
</html>