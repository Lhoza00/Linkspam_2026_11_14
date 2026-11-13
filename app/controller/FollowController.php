<?php

require_once __DIR__ . '/../../Classes/ProfileClass.php';

$profile_user = new Profile();

if (empty($_GET['name']) || empty($_SESSION['userID'])) {
    http_response_code(400);
    exit;
}

$myUserId = $_SESSION['userID'];
$followId = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');

$isFollowing = $profile_user->followUser($myUserId, $followId);
if($isFollowing){
    echo '
    <button
        id="followButton"
        hx-post="' . APP_URL . 'app/controller/FollowController.php?name=' . $followId . '"
        hx-target="#followButton"
        hx-swap="outerHTML">
        Unfollow
    </button>';
}
else{
    echo '
    <button
        id="followButton"
        hx-post="' . APP_URL . 'app/controller/FollowController.php?name=' . $followId . '"
        hx-target="#followButton"
        hx-swap="outerHTML">
        Follow
    </button>';
}