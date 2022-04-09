(function() {
  let xhr = new XMLHttpRequest();
  const url = 'http://127.0.0.1:8000/api/button';
  xhr.open('GET', url, [true]);
  xhr.responseType = 'json';
  xhr.send();
  console.log(77)
})();
