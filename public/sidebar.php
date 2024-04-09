<?php 
    $post_name = get_post_field('post_name', get_post());
    // echo $post_name;
?>
<div class="sidebar_menu">
    <div class="logo">
        <img src="http://49.249.236.30:3131/rob/wp-content/plugins/Form%20Plugin/assets/css/images/logo.png" alt="">
    </div>
    <div class="side-bar">
    <i class="fa-solid fa-bars"></i>
    </div>    
    <ul>
        <li class="<?php if($post_name == 'profile'){ echo "active"; } ?>"><a href="<?php echo home_url().'/profile' ?>"><i class="fa-solid fa-user"></i>Profile</a></li>
        <li class="<?php if($post_name == 'dashboard'){ echo "active"; } ?>"><a href="<?php echo home_url().'/dashboard' ?>"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
        <li class="<?php if($post_name == 'portfolio'){ echo "active"; } ?>"><a href="<?php echo home_url().'/portfolio' ?>"><i class="fa-solid fa-bag-shopping"></i>Portfolio</a></li>
        <li class="<?php if($post_name == 'topup'){ echo "active"; } ?>"><a href="<?php echo home_url().'/topup' ?>"><i class="fa-sharp fa-solid fa-circle-up"></i>Top Up</a></li>
        <li class="<?php if($post_name == 'payment-confirmation'){ echo "active"; } ?>"><a href="<?php echo home_url().'/payment-confirmation' ?>"><i class="fa-solid fa-square-check"></i>Payment Confirmation</a></li>
        <li class="<?php if($post_name == 'account-overview'){ echo "active"; } ?>"><a href="<?php echo home_url().'/account-overview' ?>"><i class="fa-solid fa-list"></i>Account Overview</a></li>
        <li class="<?php if($post_name == 'wallet-transfer'){ echo "active"; } ?>"><a href="<?php echo home_url().'/wallet-transfer' ?>"><i class="fa-solid fa-wallet"></i> Wallet Transfer</a></li>
        <li><a href="<?php echo home_url().'/contact-us' ?>" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-address-book"></i> Contact Us</a></li>
        <li><a href="<?php echo wp_logout_url(home_url().'/login'); ?>"> <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
    </ul>
</div>



<script>
$(".side-bar").click(function(){
    $(this).toggleClass("open");
   $(".sidebar_menu").toggleClass("open"); 
});
</script>



