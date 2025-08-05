/*SCRIPT PARA BUSCAR O ENDEREÇO DO CEP INFORMADO PELO CLIENTE**********************************/
const cepInput = document.getElementById('cep');

if (cepInput) {
    cepInput.addEventListener('blur', function () {
        let cep = this.value.replace(/\D/g, '');

        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        document.getElementById('endereco').value =
                            `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`;
                    } else {
                        alert("CEP não encontrado.");
                    }
                })
                .catch(() => alert("Erro ao buscar o CEP."));
        } else {
            alert("CEP inválido. Digite 8 números.");
        }
    });
}

/*FUNÇÃO PARA FAZER O TEXTO DO DATA-TTS SER FALADO*********************************************/
function speak(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'pt-BR';
        window.speechSynthesis.cancel();//para parar a fala anterior
        window.speechSynthesis.speak(utterance);//para falar a fala atual
    }
}

/*SELECIONA TODOS OS ELEMENTOS DA TELA PARA LEITURA********************************************/
document.querySelectorAll('[data-tts]').forEach(el => {
    const texto = el.getAttribute('data-tts');

    //FALAR AO CLICAR
    el.addEventListener('click', function () {
        speak(texto);
    });

    //FALAR AO FOCAR NO OBJETO
    el.addEventListener('focus', function () {
        speak(texto);
    });

});

/*LINK DE REDEFINIÇÃO DE SENHA*****************************************************************/
function enviarEmail(event) {
    event.preventDefault();
    const msg = document.getElementById('mensagem');
    msg.style.display = "block";

    //DESATIVAR O INPUT E O BUTTON
    document.getElementById('email').disabled = true;
    event.target.querySelector("button").disabled = true;

    //APÓS 5 SEGUNDOS REDIRECIONAR PARA A INDEX
    setTimeout(() => {
        window.location.href = "index.php";
    }, 5000);
}

let pixel = 0.5; // MEDIDA EM PIXEL QUE VAI AUMENTAR OU DIMINUIR A FONTE

function aumentarFonte(){
    const elementos = document.querySelectorAll('body, body *');

    elementos.forEach(el => {
        const estilo = window.getComputedStyle(el);
        const tamanho = parseFloat(estilo.fontSize);

        if(!isNaN(tamanho)){
            el.style.fontSize = (tamanho + pixel) + "px";
        }
    })
}

function diminuirFonte(){
    const elementos = document.querySelectorAll('body, body *');

    elementos.forEach(el => {
        const estilo = window.getComputedStyle(el);
        const tamanho = parseFloat(estilo.fontSize);

        if(!isNaN(tamanho)){
            el.style.fontSize = (tamanho - pixel) + "px";
        }
    })
}
