const nameUser = document.getElementById('nameUser');
const nameUserspan = document.getElementById('nameUserspan');
const emailUser = document.getElementById('emailUser');
const emailUserspan = document.getElementById('emailUserspan');
const organisationUser = document.getElementById('organisationUser');
const organisationUserspan = document.getElementById('organisationUserspan');
const processeur = document.getElementById("processeur");
const ram = document.getElementById("ram");
const stockage01 = document.getElementById("stockage01");
const reseauexploit = document.getElementById("RequiredIntallTaxe");
const adresseIPInput = document.getElementById("adresseArbor");
const ramconfSelectedSpan = document.getElementById("ramconf");
const processeurconfSelectedSpan = document.getElementById("processeurconf");
const stockage01countSelectedSpan = document.getElementById("stockage01count");
const fraisInstallationSpan = document.getElementById("SpanFraisInstallation");
const ipAdressCombahtonSpan = document.getElementById("ipadressarborcount");

function UptadeResult() {
    nameUser.addEventListener('input', () => {nameUserspan.textContent = nameUser.value;});
    emailUser.addEventListener('input', () => {emailUserspan.textContent = emailUser.value;});
    organisationUser.addEventListener('input', () => {organisationUserspan.textContent = organisationUser.value;});
    processeur.addEventListener('change', () => {processeurconfSelectedSpan.textContent = processeur.options[processeur.selectedIndex].textContent;});
    ram.addEventListener('change', () => {ramconfSelectedSpan.textContent = ram.options[ram.selectedIndex].textContent;});
    stockage01.addEventListener('change', () => {stockage01countSelectedSpan.textContent = stockage01.options[stockage01.selectedIndex].textContent;});
    adresseIPInput.addEventListener('input', () => {ipAdressCombahtonSpan.textContent = adresseIPInput.value;});
}

setInterval(UptadeResult, 1000);


const totalPriceElement = document.getElementById('totalpricetva');

function updateTotalPrice() {
    const processeurSelectPrice = parseFloat(processeur.options[processeur.selectedIndex].getAttribute('data-price')) || 0;
    const ramSelectPrice = parseFloat(ram.options[ram.selectedIndex].getAttribute('data-price')) || 0;
    const stockage01SelectPrice = parseFloat(stockage01.options[stockage01.selectedIndex].getAttribute('data-price')) || 0;
    const ipadresssupPrice = parseFloat(document.getElementById('adresseArbor').value) * parseFloat(document.getElementById('adresseArbor').getAttribute('data-price')) || 0;
    const totalPrice = processeurSelectPrice + ramSelectPrice + stockage01SelectPrice + ipadresssupPrice;
    console.log('Aliteration')
    const tva = totalPrice * 0.20; 
    const FinalTTC = totalPrice + tva;
    totalPriceElement.textContent = FinalTTC.toFixed(2);
}

processeur.addEventListener('change', updateTotalPrice);
ram.addEventListener('change', updateTotalPrice);
stockage01.addEventListener('change', updateTotalPrice);
adresseIPInput.addEventListener('input', updateTotalPrice);

updateTotalPrice();
function validateKey(event) {
    if (event.key === '-' || event.key === 'e' || event.key === '.' || event.key === '+' || event.key === 'E') {
      event.preventDefault(); // Empêcher la saisie des caractères indésirables
    }
  }

  function GetipadressInputIfArborSup244() {
    var adresseIPInput = document.getElementById("adresseArbor");
    if (adresseIPInput.value > 244) {
      alert("Can't be more than 244 IP Adresses '(IPv4)'");
      adresseIPInput.value = 0;
      ipAdressCombahtonSpan.textContent = "0";
      updateTotalPrice();
    } else {
      updateTotalPrice();
    }
  }

  setInterval(GetipadressInputIfArborSup244, 1000);