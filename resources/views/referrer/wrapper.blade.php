const wrapper = document.getElementById('ruhu-wrapper');
if (wrapper !== null) {
    wrapper.remove();
}

const html = `
    <div id="ruhu-wrapper">
        <style>
            #ruhu-wrapper {
                position: fixed !important;
                z-index: 9999999999 !important;
                {{$position == 0 ? 'right' : 'left'}}: {{$side}}px !important;
                bottom: {{$bottom}}px !important;
                display: block !important;
                width: 300px;
                height: 80px;
                overflow: visible !important;
                flex-wrap: nowrap !important;
                background: transparent !important;
                box-shadow: rgb(0 0 0 / 30%) 0px 4px 8px 2px !important;
            }
            #ruhu-iframe {
                position: relative !important;
                height: 100% !important;
                width: 100% !important;
                border: none !important;
            }
        </style>
        <iframe id="ruhu-iframe"></iframe>
    </div>
`;
document.body.insertAdjacentHTML('beforeend', html);

const newDoc = document.implementation.createHTMLDocument();
newDoc.head.innerHTML = @include('referrer/style');

const iframe = document.getElementById('ruhu-iframe');
const doc = iframe.contentDocument;
const srcNode = newDoc.documentElement;
const newNode = doc.importNode(srcNode, true);
doc.replaceChild(newNode, doc.documentElement);
