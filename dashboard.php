<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROWN-WAVE Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-image">
            <span>CROWN-WAVE</span>
        </div>
        <div class="line"></div>
        <nav class="nav-links">
            <a href="#"><i class="fas fa-money-check-alt"></i> Dashboard</a>
            <a href="#"><i class="fas fa-money-check-alt"></i> Capital</a>
            <a href="#"><i class="fas fa-exchange-alt"></i> Transactions</a>
            <a href="#"><i class="fas fa-mobile-alt"></i> Recharge</a>
            <a href="#"><i class="fas fa-exchange-alt"></i> Transfer</a>
            <a href="#"><i class="fas fa-wallet"></i> Withdrawal</a>
            <a href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
            <a href="#"><i class="fas fa-users"></i> My Team</a>
            <a href="#"><i class="fas fa-user-check"></i> Agent Claim</a>
            <a href="#"><i class="fas fa-box"></i> Service Package</a>
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
            <a href="logout.php"><i class="fas fa-money-check-alt"></i>Log-out</a>
        </nav>
    </div>
    
    <div class="righties">
        <div class="top">
            <p>Company Name</p>
            <a href="#"><i class="fas fa-exchange-alt"></i></a>
            <a href="#"><i class="fas fa-mobile-alt"></i></a>
            <a href="#"><i class="fas fa-exchange-alt"></i></a>
        </div>
    
        <div class="cont">
            <div class="main-content">
                <div class="dashboard">
                    <h1>Good morning, Cyrax6969</h1>
                    <div class="notification">
                        <p>📣 Your account is ready! We've sent you an email to confirm and claim your account. Check your inbox or Spam folder and click the link to get started. Enjoy! 😊<br>October 16, 05:47:09 AM</p>
                        <p>Info: This email was not sent. Please contact your upline for accurate verification of your account due to the unsent email.</p>
                    </div>
                </div>
            
                <div class="balances">
                    <div class="balance">
                        <h2>Whatsapp</h2>
                        <p>KES 0.00</p>
                    </div>
                    <div class="balance">
                        <h2>Total Whatsapp Withdrawal</h2>
                        <p>KES 0.00</p>
                    </div>
                    <div class="balance">
                        <h2>Cashback</h2>
                        <p>KES 0.00</p>
                    </div>
                    <div class="balance">
                        <h2>Whatsapp</h2>
                        <p>KES 0.00</p>
                    </div>
                    <div class="balance">
                        <h2>Total Whatsapp Withdrawal</h2>
                        <p>KES 0.00</p>
                    </div>
                    <div class="balance">
                        <h2>Cashback</h2>
                        <p>KES 0.00</p>
                    </div>
                </div>
            </div>
    
            <div class="transactions">
                <h2>Recent Transactions</h2>
                <p>No transactions available</p>
            </div>
        </div>
    </div> 


</body>
</html>
