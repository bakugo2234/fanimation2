<?php
session_start();
require_once 'includes/db_connect.php';
$search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brown Luggage - Premium Luggage & Bags</title>
    <meta name="description" content="Shop premium luggage, backpacks, handbags, and accessories at Brown Luggage. Enjoy exclusive deals and quality products.">
    <meta name="keywords" content="luggage, backpacks, handbags, accessories, Brown Luggage">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        .carousel-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            z-index: 10;
        }

        .carousel-content h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .carousel-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .carousel-content .btn {
            background-color: transparent;
            /* Nền trong suốt */
            color: #fff;
            /* Chữ màu trắng */
            padding: 10px 20px;
            text-decoration: none;
            border: 2px solid #fff;
            /* Viền trắng */
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            /* Chữ in hoa giống hình */
        }

        .carousel-content .btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            /* Nền mờ khi hover */
            border-color: #e0e0e0;
            /* Viền sáng hơn khi hover */
            color: #fff;
        }

        .carousel-container {
            width: 100%;
            max-height: 500px;
            /* Điều chỉnh chiều cao theo ý muốn */
            overflow: hidden;
        }

        .carousel-item img {
            width: 100%;
            height: 500px;
            /* Phải khớp với max-height của container */
            object-fit: cover;
            /* Đảm bảo ảnh lấp đầy khung */
            object-position: center;
            /* Căn giữa ảnh */
        }

        .header {
            background-color: #deb887;
        }

        .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .dropdown-toggle::after {
            display: none !important;
        }

        /* Tạo hiệu ứng underline cho tất cả nav-link, bao gồm dropdown-toggle */
        .navbar-nav .nav-link {
            position: relative;
            transition: all 0.3s ease;
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1.8px;
            background-color: white;
            left: 0;
            bottom: 3px;
            transition: width 0.3s ease-in-out;
        }

        .navbar-brand img {
            height: 3.5rem;
            /* h-10 equivalent */
            width: auto;
            /* Maintain aspect ratio */
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        /* Hiệu ứng underline khi dropdown mở trên màn hình nhỏ */
        .navbar-nav .nav-link.show::after {
            width: 100%;
        }

        /* Tạo hiệu ứng underline cho dropdown-item */
        .navbar-nav .dropdown-menu .dropdown-item {
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-nav .dropdown-menu .dropdown-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1.8px;
            background-color: rgb(0, 0, 0);
            /* Màu xanh Bootstrap để dễ nhìn, có thể đổi thành black hoặc màu khác */
            left: 0;
            bottom: 3px;
            transition: width 0.3s ease-in-out;
        }

        .navbar-nav .dropdown-menu .dropdown-item:hover::after {
            width: 100%;
        }

        /* Đảm bảo dropdown menu có nền rõ ràng để underline hiển thị */
        .dropdown-menu {
            background-color: #fff;
            /* Nền trắng để underline màu xanh/đen dễ nhìn */
        }

        .navbar {
            background-color: rgb(133, 55, 167);
        }

        .bi-person-circle {
            color: #fff;
        }

        .bi-person-circle {
            color: #fff;
            font-size: 1.5rem;
        }

        .bi-cart3 {
            color: #fff;
            font-size: 1.5rem;
            padding-left: 2rem;
        }

        /* Improved user dropdown styling */
        .user-dropdown {
            position: relative;
        }

        .user-dropdown .dropdown-menu {
            min-width: 150px;
            margin-top: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
        }

        .user-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .user-dropdown .dropdown-item {
            padding: 10px 15px;
            font-size: 0.9rem;
            color: #333;
        }

        .user-dropdown .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #000;
        }

        .logo-container {
            background-color: rgb(133, 55, 167);
            /* Purple gradient similar to the image */
            padding: 0.5rem 1rem;
            /* p-4 */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 0;
            /* Remove rounded corners for navbar integration */
            max-width: none;
            /* Remove max-width to fit navbar */
            margin: 0;
            /* Remove margin for navbar alignment */
            height: 100%;
            /* Center the container */
        }

        /* Fan icon styling */
        .fan-icon {
            font-size: 1.5rem;
            /* Large icon size */
            color: #fff;
            /* White color */
            margin-right: 0.5rem;
            /* Space between icon and text */
            margin-bottom: 0;
            /* Space below icon */
        }

        /* Fanimation text */
        .fanimation-text {
            font-family: 'Arial', sans-serif;
            /* Fallback font */
            font-size: 1.2rem;
            /* Large text */
            font-weight: 700;
            /* Bold */
            color: #fff;
            /* White color */
            text-transform: uppercase;
            /* All caps */
            letter-spacing: 0.05em;
            /* Slight letter spacing */
            margin-bottom: 0rem;
            /* Space below */
        }

        /* Ceiling fans text */
        .ceiling-fans-text {
            font-family: 'Arial', sans-serif;
            font-size: 0.8rem;
            /* Smaller text */
            font-weight: 400;
            /* Normal weight */
            color: #fff;
            /* White color */
            text-transform: uppercase;
            letter-spacing: 0.1em;
            /* Wider letter spacing */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <div class="logo-container">
                <i class="bi bi-fan fan-icon"></i>
                <div class="fanimation-text">Fanimation</div>
                <div class="ceiling-fans-text">Ceiling Fans</div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav mx-auto"> <!-- Thêm mx-auto để căn giữa -->
                    <li class="nav-item active fs-4"> <a class="nav-link" href="#">Home</a> </li>
                    <li class="nav-item fs-4"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item fs-4"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-4" href="#" data-bs-toggle="dropdown">Hover me</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                            <li><a class="dropdown-item" href="#">Submenu item 3</a></li>
                        </ul>
                    </li>
                </ul>

            </div> <!-- navbar-collapse.// -->
            <!-- container-fluid.// -->
            <div>
                <form method="GET" action="search_result.php" class="d-flex align-content-center mb-1">
                    <input class="form-control form-control-sm w-24 me-1 align-items-center mt-2" name="search" type="text" value="<?php echo htmlspecialchars($search); ?>" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm">
                </form>
            </div>
            <!-- giỏ hàng -->
            <div class="search-container position-relative d-inline-block me-3">
                <a href="cart.php" class="position-relative">
                    <i class="bi bi-cart3"></i>
                </a>
            </div>

            <!-- profile -->
            <div class="user-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-label="User menu">
                    <i class="bi bi-person-circle"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                    <li><a class="dropdown-item" href="account.php">Thông tin tài khoản</a></li>
                </ul>
            </div>




        </div>
    </nav>