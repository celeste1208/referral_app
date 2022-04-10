const body = `
    <div class="container flex flex-column pointer" id="banner">
        <div class="text-bold text-large">サービスを紹介いただいた方に</div>
        <div class="text-bold text-large">アマギフプレゼント中！</div>
    </div>
`;

@include('referrer/wrapper');

doc.body.innerHTML = body;

const banner = doc.getElementById('banner');
banner.addEventListener('click', () => {
    const xhr = new XMLHttpRequest();
    const url = 'http://127.0.0.1:8000/api/dialog';
    xhr.onload = (e) => {
        if (xhr.status === 200) {
            eval(xhr.response);
        } else {
            console.log(e);
        }
    }
    xhr.open('GET', url, true);
    xhr.send();
})
