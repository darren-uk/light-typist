var day = new Date();
var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
document.getElementById("day").innerHTML = days[day.getDay()];


var m = new Date();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "November", "December"
];
document.getElementById("month").innerHTML = months[m.getMonth()];

var d = new Date();
document.getElementById("date").innerHTML = d.getDate();

var y = new Date();
document.getElementById("year").innerHTML = y.getFullYear();