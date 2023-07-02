<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<a href="menu.php" class="btn btn-success btn-sm">Back</a>
<!--Order-->

    <div class="order" id="Order">
        <h1><span>Order</span>Now</h1>

        <div class="order_main">

            <div class="order_image">
                <img src="image/order_image.png">
            </div>

            <form action="#">

                <div class="input">
                    <p>Name</p>
                    <input type="text" placeholder="you name">
                </div>

                <div class="input">
                    <p>Email</p>
                    <input type="email" placeholder="you email">
                </div>

                <div class="input">
                    <p>Gcash Number</p>
                    <input placeholder="you number">
                </div>


                <div class="input">
                    <p>Address</p>
                    <input placeholder="you Address">
                </div>

                <a href="order.php" class="order_btn">Order Now</a>
                <script> alert('Your Order is Successful'); </script>

            </form>

        </div>

    </div>
    
    </body>
</html>