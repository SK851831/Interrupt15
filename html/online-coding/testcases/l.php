<?php
session_start();
set_time_limit(5);
$start_time = time();
require_once('../../dbConnect.php');
require_once './class.Diff.php';
$sql = dbConnect();
$name = $_SESSION['email'];
$id = $_SESSION['id'];
if(isset($_SESSION['id']))
{ 
	$code = $_GET['code'];
	$option = $_GET['option'];
	$qNo =$_GET['qNo'];
	$query= mysqli_query($sql,"SELECT * FROM questions WHERE questionNo =".$qNo."");
	$data = mysqli_fetch_array($query);
	$testcase_i =array($data['testCase1'], $data['testCase2'], $data['testCase3'], $data['testCase4'], $data['testCase5']);
	$testcase_o = array($data['testCase1Output'],$data['testCase2Output'],$data['testCase3Output'],$data['testCase4Output'],$data['testCase5Output']);
	$response = null;

	if($option == 1 )
		{
			
			$b = $id;
			$b .= $name;
			file_put_contents($b.".c",$code);
			
			$a = shell_exec("sh compile.sh ".$b.".c 2>&1");
			if($a)
			{	
				$response["error"]= true;
				$response["message"] = $a; 
				echo json_encode($response);

			}
			else
			{	for($i = 0 ; $i<5; $i++)
				{
					$final[$i] = "";
					exec("timeout 0.1s sh run.sh ".$b.".c.out ".$testcase_i[$i], $output , $status);
					foreach ($output as $line) {
   						
   						$final[$i] .= "$line\n";
					}

					$output= "";

					
					if($status == 124){
						$response["testcase".$i] = "Failed";
						$response["error"] = true;
						$response["message"] = "Timed Out";
						
						
					}else { 

						$fileName = $b."Output.txt";
						
						file_put_contents($fileName,$final[$i]);
						$diff = Diff::compareFiles($fileName,$testcase_o[$i]);
						if($diff[0][1] == 0)
						{	
							if($response["error"] == true){
								$response["error"] = true ;
							}
							else{
								$response["error"] = false ;
							}
							$response["testcase".$i] = "Passed";
							
							$response["message"] = "Success";
							}
						else
						{
							$response["testcase".$i] = "Failed";
							$response["error"] = true;
							$response["message"] = "Failure";

							
						}
					}
					
				}
				if($response["error"] != true)

				{	
					$current = $qNo + 1;

					$query3 = mysqli_query($sql,"UPDATE online_coding SET `$qNo` = 1 , current = $current WHERE  user_id = $id ") or die("Query failed.");
					
				}

				echo json_encode($response);
			}
		}
	else if($option == 2) {
			$b = $id;
			$b .= $name;
			file_put_contents($b.".cpp",$code);
			
			$a = shell_exec("sh compilec.sh ".$b.".c 2>&1");
			if($a)
			{	
				$response["error"]= true;
				$response["message"] = $a; 
				echo json_encode($response);

			}
			else
			{	for($i = 0 ; $i<5; $i++)
				{
					$final[$i] = "";
					exec("timeout 0.1s sh run.sh ".$b.".cpp.out ".$testcase_i[$i], $output , $status);
					foreach ($output as $line) {
   						
   						$final[$i] .= "$line\n";
					}

					$output= "";

					
					if($status == 124){
						$response["testcase".$i] = "Failed";
						$response["error"] = true;
						$response["message"] = "Timed Out";
						
						
					}else { 

						$fileName = $b."Output.txt";
						
						file_put_contents($fileName,$final[$i]);
						$diff = Diff::compareFiles($fileName,$testcase_o[$i]);
						if($diff[0][1] == 0)
						{	
							if($response["error"] == true){
								$response["error"] = true ;
							}
							else{
								$response["error"] = false ;
							}
							$response["testcase".$i] = "Passed";
							
							$response["message"] = "Success";
							}
						else
						{
							$response["testcase".$i] = "Failed";
							$response["error"] = true;
							$response["message"] = "Failure";

							
						}
					}
					
				}
				if($response["error"] != true)

				{	
					$current = $qNo + 1;

					$query3 = mysqli_query($sql,"UPDATE online_coding SET `$qNo` = 1 , current = $current WHERE  user_id = $id ") or die("Query failed.");
					
				}

				echo json_encode($response);
			}
	}
}
else
{
	header('location:login-register.html');

}
function files_are_equal($a, $b)
{
  // Check if filesize is different
 
  // Check if content is different
  $ah = fopen($a, 'r');
  $bh = fopen($b, 'r');

  $result = true;
  while(!feof($bh))
  {	$line = fgets($ah);
  	$line2 = fgets($bh);
    if($line != $line2)
    {

      $result = false;
      break;
    }
  }

  fclose($ah);
  fclose($bh);

  return $result;
}
	

?>
