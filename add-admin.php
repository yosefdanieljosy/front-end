<?php include('partials/menu.php');?>

<div class="main-content">
<div class="wrapper">

<h1>Add Admin</h1>
<br><br>

<form action="" methid="POST">
        <table class="tbl-name">
                <tr>
                        <td>Full name:</td>
                        <td><input type="text" name="full_name" placeholder="Enter your first name"></td>
                </tr>
                <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" placeholder="Enter your username"></td>
                </tr>
                <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Enter your Password"></td>
                </tr>
                <tr>
                        <td colspan="2">
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                </tr>
        </table>

</form>



</div>

</div>

<?php include('partials/footer.php');?>

<?php
//processs the value from form and save it in the database
//check weather the submit button is working or not

//check weather the value is process from form and it in the database
if(isset($_POST['submit']) && !empty($_POST['submit'])){
        // if (!logged_in())
//echo "GeeksforGeeds";
//Get the value from form
echo $full_name = $_POST['full_name'];
}
?>