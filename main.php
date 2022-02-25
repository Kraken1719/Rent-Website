<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="main.css">

</head>
<body>
    


<header>

    <a href="#" class="logo"><span>Rent</span>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#agents">agents</a>
        <a href="#contact">contact</a>
        <a href="login.php">logout</a>
    </nav>

    <div class="icons">
        <div id="menu-bars" class="fas fa-bars"></div>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>

<section class="home" id="home">

    <form action="">

        <h3>Find your perfect place to Stay</h3>

        <div class="buttons-container">
            <a href="#" class="btn">for rooms</a>
            <a href="#" class="btn">for apartments</a>
        </div>

        <div class="inputBox">
            <input type="search" name="" placeholder="neighborhood" id="">
            <input type="search" name="" placeholder="city" id="">
            <select name="" id="">
                <option value="" disabled hidden selected>minimum price</option>
                <option value="NRP 5000">NRP 5000</option>
                <option value="NRP 8000">NRP 6000</option>
                <option value="NRP 10000">NRP 8000</option>
                <option value="NRP 15000">NRP 9000</option>
                <option value="NRP 20000">NRP 10000</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>maximum price</option>
                <option value="NRP 30000">NRP 20000</option>
                <option value="NRP 35000">NRP 25000</option>
                <option value="NRP 40000">NRP 30000</option>
                <option value="NRP 45000">NRP 35000</option>
                <option value="NRP 50000">NRP 40000</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>property status</option>
                <option value="Ready To Move">Ready To Move</option>
                <option value="Under Construction">Under Construction</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-furnished">Semi-furnished</option>
                <option value="unfurnished">unfurnished</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>property type</option>
                <option value="flat">flat</option>
                <option value="house">house</option>
                <option value="shop">shop</option>
                <option value="warehouse">warehouse</option>
                <option value="office">office</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>BHK</option>
                <option value="1 BHK">1 BHK</option>
                <option value="2 BHK">2 BHK</option>
                <option value="3 BHK">3 BHK</option>
                <option value="4 BHK">4 BHK</option>
                <option value="5 BHK">5 BHK</option> 
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>aminities</option>
                <option value="parking space">parking space</option>
                <option value="playground">playground</option>
                <option value="garden">garden</option>
                <option value="none">none</option>
                <option value="all">all</option> 
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>bedrooms</option>
                <option value="1 bedroom">1 bedroom</option>
                <option value="2 bedroom">2 bedroom</option>
                <option value="3 bedroom">3 bedroom</option>
                <option value="4 bedroom">4 bedroom</option>
                <option value="5 bedroom">5 bedroom</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>bathrooms</option>
                <option value="1 bathroom">1 bathroom</option>
                <option value="2 bathroom">2 bathroom</option>
                <option value="3 bathroom">3 bedroom</option>
                <option value="4 bathroom">4 bathroom</option>
                <option value="5 bathroom">5 bathroom</option>
            </select>
        </div>

        <input type="submit" value="search property" class="btn">

    </form>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/room.png" alt="">
            <h3>Renting rooms</h3>
            <p>Hello and welcome to our site. We are here to serve you and will do everything we can to meet your needs throughout your stay.</p>
            <a href="#" class="btn">Learn more</a>
        </div>

        <div class="box">
            <img src="image/apartment.png" alt="">
            <h3>Renting apartments</h3>
            <p>Hello and welcome to our site. We are here to serve you and will do everything we can to meet your needs throughout your stay.</p>
            <a href="#" class="btn">Learn more</a>
        </div>
    </div>

</section>


<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> properties </h1>

    <div class="box-container" >

        <div class="box">
            <div class="image-container">
                <img src="image/img-1.jpg" alt="">
                <div class="info">
                    <h3>4 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>2</h3></a>
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 30000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/img-2.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>3</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 25000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/img-3.jpg" alt="">
                <div class="info">
                    <h3>5 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>3</h3></a>
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 40000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/img-4.jpg" alt="">
                <div class="info">
                    <h3>8 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>4</h3></a>
                    <a href="#" class="fas fa-camera"><h3>8</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 45000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/img-5.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>3</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 35000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/img-6.jpg" alt="">
                <div class="info">
                    <h3>2 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>4</h3></a>
                    <a href="#" class="fas fa-camera"><h3>9</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>NRP 45000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>Delhi Bazar, kathmandu, Nepal - 023-142535</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons" name>
                    <a href="#" class="btn">Add</a>
                    <a href="#" class="btn">Delete</a>
                    <a href="#" class="btn">Update</a>
                </div>
            </div>
        </div>

    </div>
    
</section>


<section class="agents" id="agents">

    <h1 class="heading"> professional <span>agents</span> </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="image/Rishav.jpg" alt="">
            <h3>Rishav Bashnet</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="image/roshan.jpg" alt="">
            <h3>Roshan Limbu</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="image/prakriti.jpg" alt="">
            <h3>Prakriti Thapa</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="image/sakchyam.jpg" alt="">
            <h3>Sakchyam Karmachareya</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <h3>phone number</h3>
        <p>023-8162341</p>
        <p>023-9837842 </p>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <h3>email address</h3>
        <p>business22@gmail.com</p>
        <p>rental@gmail.com</p>
    </div>
</div>

<div class="row">

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="number" placeholder="number">
        </div>
        <div class="inputBox">
            <input type="email" placeholder="email">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>



</div>

</section>

<section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <a href="#">Nepal</a>      
            </div> 
            
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">services</a>
                <a href="#">featured</a>
                <a href="#">agents</a>
                <a href="#">contact</a>
            </div> 
 
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div> 

        </div>

        <div class="credit">created by <span> Nimesh Shrestha </span> | all rights reserved! </div>

    </div>

</section>





<script>
    let menu = document.querySelector('#menu-bars');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        navbar.classList.toggle('active');
        menu.classList.toggle('fa-time');
    }

    window.onscroll = () =>{
        navbar.classList.remove('active');
        menu.classList.remove('fa-times');
    }
</script>
</body>
</html>