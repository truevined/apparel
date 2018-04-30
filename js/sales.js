function salesNumberGen(url) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        document.getElementById('salesNumber').textContent = this.responseText;
    };
    xhr.open('GET', url);
    xhr.send();
}
salesNumberGen('http://www.5kco.com/sales.txt');