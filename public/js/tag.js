(function() {
  const xhr = new XMLHttpRequest();
  const url = 'http://127.0.0.1:8000/api/banner';
  xhr.onload = (e) => {
    if (xhr.status === 200) {
      eval(xhr.response);
    } else {
      console.log(e);
    }
  }
  xhr.open('GET', url, true);
  xhr.send();
})();
