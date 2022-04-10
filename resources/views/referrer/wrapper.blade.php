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
                right: 16px !important;
                bottom: 16px !important;
                display: block !important;
                width: 300px;
                height: 80px;
                overflow: visible !important;
                flex-wrap: nowrap !important;
                background: transparent !important;
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
