<form action="" method="post" enctype="multipart/form-data">



<input type="file" name="kuch_bhi" accept="image/*">
<button name="save">Submit</button>



</form>

<pre>

    <?php
    
print_r($_FILES);


if(isset($_FILES['kuch_bhi']))
{
    if($_FILES['kuch_bhi']['error'] == 0)
    {
        if(move_uploaded_file($_FILES['kuch_bhi']['tmp_name'],"image/".uniqid(). $_FILES['kuch_bhi']['name']))
        {
            echo "file saved";
        }
        else
        {
            echo "Failed to save file";
        }
    }
    else
    {
        echo "Something went wrong";
    }
}
?>
</pre>