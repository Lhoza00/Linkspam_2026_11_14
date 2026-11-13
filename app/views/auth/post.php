<?php 
 if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST["btnSavePost"]))){
        $userTags = !empty($_COOKIE['selectedUsers'])? $_COOKIE['selectedUsers'] : '';
        if(!empty($userTags)){
            $userTags = json_decode($userTags, true);
            $userTags = implode(', ',$userTags);
        }
        $hashTags = !empty($_COOKIE['hashtags'])? $_COOKIE['hashtags'] : '';
        if(!empty($hashTags)){
            $hashTags = json_decode($hashTags, true);
            $hashTags = implode(', ',$hashTags);
        }
        setcookie('selectedUsers','',time()-3600,'/');
        setcookie('hashTags','',time()-3600,'/');
        $post->createPost($_SESSION["myuserId"], array_map('htmlspecialchars' ,$_POST), $_FILES, $hashTags, $userTags);
    }
$data = $_POST;
