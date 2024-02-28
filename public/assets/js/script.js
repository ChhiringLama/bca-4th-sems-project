function displayTime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    
    // Format the time values
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    
    // Display the time
    document.getElementById("clock").textContent = hours + ":" + minutes + ":" + seconds;
}

function displayDate() {
    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1; // Months are zero-indexed
    var day = now.getDate();
    
    // Format the date values
    month = month < 10 ? "0" + month : month;
    day = day < 10 ? "0" + day : day;
    
    // Display the date
    document.getElementById("calendar").textContent = year + "-" + month + "-" + day;
}

// Update the clock and calendar every second
setInterval(displayTime, 1000);
setInterval(displayDate, 1000);