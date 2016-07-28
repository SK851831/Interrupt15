<?php require_once('Connections/database.php'); ?>
<?php
session_start();
//echo $_SESSION['x'];
//echo $_SESSION["level"];
if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $user_id=$_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }
  if (!isset($_SESSION['email'])) {
    header("Location:../quizzler.php");
  }
$user_id=$_SESSION['id'];

//print_r($_SESSION['pic']);

if (!isset($_SESSION['pic']))
{
    header("Location:index.php");
}

if (isset($_POST["submit"])){
    if(strtolower(trim($_POST['answer'])) == strtolower(trim($_SESSION['answer'][$_SESSION['x']])))
    {
           $_SESSION['answered'][$_SESSION['x']] = 1;
           $_SESSION['x']=$_SESSION['x']+1;
           $cques=$_SESSION['x'];
           $query_Recordset3="UPDATE  `connection`.`conn_user` SET  `cques` =  '$cques', `updated_at` = now() WHERE  `conn_user`.`id` ='$user_id'";
//        echo $query_Recordset3;
            $Recordset3 = mysql_query($query_Recordset3, $database) or die(mysql_error());
           
  //         print_r($_SESSION['answered']);
    }
    

    if ($_SESSION['x']>=5){
    $query_Recordset3="UPDATE  `connection`.`conn_user` SET  `score` =  `score`+5, `updated_at` = now() WHERE  `conn_user`.`id` ='$user_id'";
        // echo $query_Recordset3;
            $Recordset3 = mysql_query($query_Recordset3, $database) or die(mysql_error());
    header("refresh:1;url=next.php");
    }
if ($_SESSION['level']>32)
{
    header("Location:../logout.php");
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connections &middot; Interrupt'15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="animate.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
    <script type="text/javascript">
        function restrainIllegalOperation(){
   document.onkeydown = keyEventHandle;
   document.oncontextmenu = contextEventHandle; 
}  
    function keyEventHandle(e) {
    // The information under keys is registered.
    var shift, ctrl, alt;
	
    // Mozilla(Firefox, NN) and Opera
    if (e != null) {
        keycode = e.which;
        ctrl    = typeof e.modifiers == 'undefined' ? e.ctrlKey : e.modifiers & Event.CONTROL_MASK;
        shift   = typeof e.modifiers == 'undefined' ? e.shiftKey : e.modifiers & Event.SHIFT_MASK;
        alt   = typeof e.modifiers == 'undefined' ? e.altKey : e.modifiers & Event.ALT_MASK;
    // Internet Explorer
    } else {
        keycode = event.keyCode;
        ctrl    = event.ctrlKey;
        shift   = event.shiftKey;
        alt     = event.altKey;
    }

    // Ctrl + R
    if((ctrl && keycode == 82) || (ctrl == 17 && keycode == 82)) {
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        // Internet Explorer
        } else {
            // The higher rank propagation of an event is prevented. 
        	event.keyCode = 0;
            event.returnValue = false;
            event.cancelBubble = true;
        }
        return false;
    }
    
    // Ctrl + F5
    if((ctrl && keycode == 116) || (ctrl == 17 && keycode == 116)) {
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        // Internet Explorer
        } else {
            // The higher rank propagation of an event is prevented. 
        	event.keyCode = 0;
            event.returnValue = false;
            event.cancelBubble = true;
        }
        return false;
    }
    
    // F5
    if(keycode == 116) {
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        // Internet Explorer
        } else {
            // The higher rank propagation of an event is prevented. 
        	event.keyCode = 0;
            event.returnValue = false;
            event.cancelBubble = true;
        }
        return false;
    }
    
    // Alt 
    if((alt && keycode == 37) || (alt == 18 && keycode == 37)) {
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        }
        return false;
    }

    // ESC
    if(keycode == 27) {
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        // Internet Explorer
        } else {
            // The higher rank propagation of an event is prevented. 
        	event.keyCode = 0;
            event.returnValue = false;
            event.cancelBubble = true;
        }
        return false;
    }

    // BackSpace
    if(keycode == 8) {
        if ((document.activeElement.type == "text") || 
          (document.activeElement.type == "textarea") ||
          (document.activeElement.type == "password") ||
          (document.activeElement.type == "file")) {
            if(!document.activeElement.readOnly) {
                return true;
            }
        }
        // Mozilla(Firefox, NN) and Opera
        if (e != null) {
            // The higher rank propagation of an event is prevented. 
        	e.which = 0;
            e.preventDefault();
            e.stopPropagation();
        // Internet Explorer
        } else {
            // The higher rank propagation of an event is prevented. 
        	event.keyCode = 0;
            event.returnValue = false;
            event.cancelBubble = true;
        }
        return false;
    }

    // Mozilla(Firefox, NN) and Opera
    if (e != null) {
    	// In MacOS, Cmd+R (renewal of a Web page and cash) deters.
    	if (e.metaKey && keycode == 82) {
    		return false;
    	}
    	
    	// In MacOS, it is Cmd+. Control of [(it moves to a front page) 
    	if (e.metaKey && keycode == 219) {
    		return false;
    	}
    } 
}
function contextEventHandle() {
    return false;
}
    </script>
</head>
<body onload="restrainIllegalOperation()">
<div class="container">
<div>
    <br><br><br><br>
</div>
        <div align="center"  >
        <?php if($_SESSION['pic'][$_SESSION['x']]!="0"){?>
        <img src="images/<?php echo $_SESSION['pic'][$_SESSION['x']]?>" height="40%" width="60%" class="animated bounceInLeft"/>
        <?php } ?>
        <h3><?php echo $_SESSION['hint'][$_SESSION['x']]?></h3>
            <br><br>
            <form method="post" class="col-md-6 col-md-offset-3">
                <form>
                    <div class="form-group">

                        <input type="text" class="form-control" name="answer" placeholder="Answer" autofocus autocomplete="off">
                    </div>
                    <button type="submit" name="submit" value="<" class="btn btn-default">Submit</button>
                </form>
            </form>
        </div>

        </div>

</div>

</body>
</html>