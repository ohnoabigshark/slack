<?php header('content-type: application/json; charset=utf-8');
$SLACK_7of9_TOKEN = "FUyIGwngG3GZOXhgvlE7Sc4Q";
$token = $_POST['token'];
$channel_name = $_POST['channel_name'];
$user_name = $_POST['user_name'];
$command = $_POST['command'];
$text = $_POST['text'];

$token_flag = strcmp($token,$SLACK_7of9_TOKEN); //if true, message came from slack

if($token_flag!=0){

} else if ($token_flag==0) {
	$attachment = json_decode('{
					   "attachments":[
					      {
					         "fallback":"New open task [Urgent]: <http://url_to_task|Test out Slack message attachments>",
					         "pretext":"New open task [Urgent]: <http://url_to_task|Test out Slack message attachments>",
					         "color":"#D00000",
					         "fields":[
					            {
					               "title":"Notes",
					               "value":"This is much easier than I thought it would be.",
					               "short":false
					            }
					         ]
					      }
					   ]
					}');

	echo '{
					   "attachments":[
					      {
					         "fallback":"New open task [Urgent]: <http://url_to_task|Test out Slack message attachments>",
					         "pretext":"New open task [Urgent]: <http://url_to_task|Test out Slack message attachments>",
					         "color":"#D00000",
					         "fields":[
					            {
					               "title":"Notes",
					               "value":"This is much easier than I thought it would be.",
					               "short":false
					            }
					         ]
					      }
					   ]
					}';
	//echo json_encode($attachment);				
	//echo json_encode($text." ".$user_name." ".$channel_name);
}


?>