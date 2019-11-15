 
window.onload = function() {
    console.log("Creating update analytis request");
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "analytics.php?update_link_following_count=true", true);
    xhttp.send();
    console.log("Sent update analytis request");
}
