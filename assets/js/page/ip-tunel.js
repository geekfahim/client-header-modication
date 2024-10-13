const nameUser = document.getElementById('nameUser');
const nameUserspan = document.getElementById('nameUserspan');
const emailUser = document.getElementById('emailUser');
const emailUserspan = document.getElementById('emailUserspan');
const organisationUser = document.getElementById('organisationUser');
const organisationUserspan = document.getElementById('organisationUserspan');
const connectiviteSelect = document.getElementById("ConectivityIPTunel");
const protocoleSelect = document.getElementById("iptunelselectedchoice");
const utilisationSelect = document.getElementById("GetTunelIpDirection");
const fraisInstallationSelect = document.getElementById("RequiredIntallTaxe");
const adresseIPInput = document.getElementById("adresseCombahthon");
const debitSelectedSpan = document.getElementById("SpanDebitSelected");
const protocoleSelectedSpan = document.getElementById("SpanProtocoleSelected");
const utilisationSelectedSpan = document.getElementById("SpanUtilisationSelected");
const fraisInstallationSpan = document.getElementById("SpanFraisInstallation");
const ipAdressCombahtonSpan = document.getElementById("SpanIPAdressCombahton");

function UptadeResult() {
    nameUser.addEventListener('input', () => {nameUserspan.textContent = nameUser.value;});
    emailUser.addEventListener('input', () => {emailUserspan.textContent = emailUser.value;});
    organisationUser.addEventListener('input', () => {organisationUserspan.textContent = organisationUser.value;});
    connectiviteSelect.addEventListener('change', () => {debitSelectedSpan.textContent = connectiviteSelect.options[connectiviteSelect.selectedIndex].textContent;});
    protocoleSelect.addEventListener('change', () => {protocoleSelectedSpan.textContent = protocoleSelect.options[protocoleSelect.selectedIndex].textContent;});
    utilisationSelect.addEventListener('change', () => {utilisationSelectedSpan.textContent = utilisationSelect.options[utilisationSelect.selectedIndex].textContent;});
    fraisInstallationSelect.addEventListener('change', () => {fraisInstallationSpan.textContent = fraisInstallationSelect.options[fraisInstallationSelect.selectedIndex].textContent;});
    adresseIPInput.addEventListener('input', () => {ipAdressCombahtonSpan.textContent = adresseIPInput.value;});
}

setInterval(UptadeResult, 1000);


const totalPriceElement = document.getElementById('totalpricetva');

function updateTotalPrice() {
    const connectiviteSelectPrice = parseFloat(connectiviteSelect.options[connectiviteSelect.selectedIndex].getAttribute('data-price')) || 0;
    const protocoleSelectPrice = parseFloat(protocoleSelect.options[protocoleSelect.selectedIndex].getAttribute('data-price')) || 0;
    const utilisationSelectPrice = parseFloat(utilisationSelect.options[utilisationSelect.selectedIndex].getAttribute('data-price')) || 0;
    const fraisInstallationSelectPrice = parseFloat(fraisInstallationSelect.options[fraisInstallationSelect.selectedIndex].getAttribute('data-price')) || 0;
    const ipadresssupPrice = parseFloat(document.getElementById('adresseCombahthon').value) * parseFloat(document.getElementById('adresseCombahthon').getAttribute('data-price')) || 0;
    const totalPrice = connectiviteSelectPrice + protocoleSelectPrice + utilisationSelectPrice + fraisInstallationSelectPrice + ipadresssupPrice;
    console.log(connectiviteSelect)
    console.log('Aliteration')
    const tva = totalPrice * 0.20; 
    const FinalTTC = totalPrice + tva;
    totalPriceElement.textContent = FinalTTC.toFixed(2);
}

connectiviteSelect.addEventListener('change', updateTotalPrice);
protocoleSelect.addEventListener('change', updateTotalPrice);
utilisationSelect.addEventListener('change', updateTotalPrice);
fraisInstallationSelect.addEventListener('change', updateTotalPrice);
adresseIPInput.addEventListener('input', updateTotalPrice);

updateTotalPrice();


function validateKey(event) {
    if (event.key === '-' || event.key === 'e' || event.key === '.' || event.key === '+' || event.key === 'E') {
      event.preventDefault(); // Empêcher la saisie des caractères indésirables
    }
  }

function GetipadressInputIfArborSup244() {
    if (adresseIPInput.value > 244) {
        numAttempts++;
        
        if (numAttempts >= 3) {
           alert("Can't be more than 244 IP Adresses '(IPv4)'");
        } else if (numAttempts == 1) {
            alert("Can't be more than 244 IP Adresses '(IPv4)'");
            adresseIPInput.value = 0;
            ipAdressCombahtonSpan.textContent = "0";
        updateTotalPrice();
        
        } else {
            numAttempts = 0;
            updateTotalPrice();
        }
    }
}


setInterval(GetipadressInputIfArborSup244, 1000);