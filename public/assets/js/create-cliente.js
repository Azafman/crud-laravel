const optionValue = document.querySelectorAll('.opt');

const typeDocument = document.querySelector('.select');
let documentId;

typeDocument.addEventListener('change', (el) => {
    const type = el.target.value;


    if(type === "fisica" || type === "juridica") {
        documentId = document.querySelector('input[name="doc_id"]');
        
        documentId.removeAttribute("hidden");
        if(type === 'fisica') {
            documentId.placeholder = "Digite seu CPF";
        } else {
            documentId.placeholder = "Digite o CNPJ";
        }
        documentId.value = '';
    }
})