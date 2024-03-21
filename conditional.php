<?php
    $balance = 70;

    if($balance == 70)
        echo "70";

    if($balance >= 100)
    {
        echo "<br/>You Have Enough Money";
    }
    else
    {
        echo "<br/>Not Enough Money";
    }

    if($balance > 10 && $balance < 110)
    {
        echo "<br/>You Have Between 10 To 110.";
    }
?>


<?php 
    $isDataSaved = true;    
    $time_take = 150;
    $user_name = "Kashak";

    // turnery operator
    $message = ($user_name == "") ? "Please Login." : "Hello, ".$user_name;    
    echo "<br/<br/>".$message;


    $role = 'subscriber';
    $message = '';

    if ('admin' === $role) {
        $message = 'Welcome, admin!';
    } elseif ('editor' === $role) {
        $message = 'Welcome! You have some pending articles to edit';
    } elseif ('author' === $role) {
        $message = 'Welcome! Do you want to publish the draft article?';
    } elseif ('subscriber' === $role) {
        $message = 'Welcome! Check out some new articles.';
    } else {
        $message = 'Sorry! You are not authorized to access this page';
    }

    switch ($role) {
        case 'admin':
            $message = 'Welcome, admin!';
            break;
        case 'editor':
            $message = 'Welcome! You have some pending articles to edit';
            break;
        case 'author':
            $message = 'Welcome! Do you want to publish the draft article?';
            break;
        case 'subscriber':
            $message = 'Welcome! Check out some new articles.';
            break;
        default:
            $message = 'You are not authorized to access this page';
    }

    echo "<br/><br/>".$message;
?>


<?php if($isDataSaved == true): ?>
<div style='background-color:green'>
    Data Saved
</div>
<?php endif; ?>

<?php if($isDataSaved == false): ?>
<div style='background-color:red;'>
    Data Not Saved
</div>
<?php endif; ?>


<?php if($time_take <= 10): ?>
<h1>Very Fast Save</h1>
<?php elseif($time_take >= 11 && $time_take <=20): ?>
<h1>Average Speed Save</h1>
<?php else: ?>
<h1>Slow Speed Save</h1>
<?php endif; ?>

